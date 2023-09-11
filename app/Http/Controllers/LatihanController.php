<?php

namespace App\Http\Controllers;

use App\Models\Latihan;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLatihanRequest;
use App\Http\Requests\UpdateLatihanRequest;
use App\Models\Jawaban;
use Illuminate\Support\Facades\Validator;

class LatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() // Tambahkan parameter Request
    {

        // Mendapatkan data latihan beserta jawaban-jawabannya
        $latihans = Latihan::all();
        $jawabans = Jawaban::all();

        return view('interface.latihan.index', [
            'title' => 'Latihan',
            'active' => 'latihan',
            'latihans' => $latihans,
            'jawabans' => $jawabans,
        ]);
    }
    public function proses(Request $request)
    {
        $messages = []; // Inisialisasi array untuk menyimpan pesan
        $id_terjawab = []; // mengirim ke redirect data yg sudah di jawab

        // Loop melalui jawaban yang diberikan
        foreach ($request->input('jawaban') as $pertanyaanId => $jawabanId) {
            // Simpan jawaban yang telah dijawab dalam session
            // Simpan jawaban yang dijawab dan jawaban yang benar dalam session
            $jawabanDijawab = Jawaban::where('id', $jawabanId)->value('jawaban');
            $jawabanBenar = Jawaban::where('latihan_id', $pertanyaanId)->where('is_true', true)->value('jawaban');

            session()->put('jawabanTerjawab.' . $pertanyaanId, $jawabanDijawab);
            session()->put('jawabanBenar.' . $pertanyaanId, $jawabanBenar);

            // Periksa apakah jawaban tersebut benar (is_true = true)
            $jawaban = Jawaban::where('id', $jawabanId)->where('is_true', true)->first();
            if ($jawaban) {
                // Jawaban benar
                $messages[$pertanyaanId] = 'Soal no ' . $pertanyaanId . ' Benar.';
                $id_terjawab[$pertanyaanId] = $jawabanId;
            } else {
                // Jawaban salah
                $messages[$pertanyaanId] = 'Soal no ' . $pertanyaanId . ' Salah.';
                $id_terjawab[$pertanyaanId] = $jawabanId;
            }
        }

        // Set pesan-pesan ke dalam session
        session()->flash('messages', $messages);
        session()->flash('id_terjawab', $id_terjawab);

        // Redirect kembali ke halaman latihan
        return redirect('/latihan');
    }
}
