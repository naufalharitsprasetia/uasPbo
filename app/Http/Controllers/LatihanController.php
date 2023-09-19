<?php

namespace App\Http\Controllers;

use App\Models\Latihan;
use App\Models\Materi;
use App\Models\Progress;
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
    public function index()
    {
        return view('interface.latihan.index', [
            'title' => 'Latihan',
            'active' => 'latihan',
            'materis' => Materi::all(),
        ]);
    }
    public function latihan(Materi $materi)
    {

        // Mendapatkan data latihan beserta jawaban-jawabannya
        $latihans = Latihan::where('materi_id', $materi->id)->get();
        $jawabans = Jawaban::all();

        return view('interface.latihan.latihan', [
            'title' => 'Latihan',
            'active' => 'latihan',
            'latihans' => $latihans,
            'jawabans' => $jawabans,
            'materi' => $materi
        ]);
    }
    public function proses(Request $request)
    {
        // jika ingin menghapus dan menyimpan datanya ke variabel
        // $nilaiSession = $request->session()->pull('nama_session');
        $request->session()->forget('jawabanTerjawab');
        $request->session()->forget('jawabanBenar');

        $messages = []; // Inisialisasi array untuk menyimpan pesan
        $id_terjawab = []; // mengirim ke redirect data yg sudah di jawab
        // jumlah_pertanyaan
        // Validasi
        $validasi = $request->validate([
            'jawaban.*' => 'required', // Pastikan setiap jawaban memiliki nilai
        ]);
        if (!$validasi) {
            return back()->with('latihanError', 'Jawab Semua Soal Yang Ada!');
        }

        $coba = $request->input('jawaban');
        $jumlah_soal = intval($request->input("jumlah_pertanyaan"));
        $jumlah_dijawab = count($coba);

        if ($jumlah_dijawab !== $jumlah_soal) {
            return back()->with('latihanError', 'Jawab Semua Soal Yang Ada!');
        }
        $speech = $request->input('speech');
        // dd($speech);

        // Loop melalui jawaban yang diberikan
        foreach ($request->input('jawaban') as $pertanyaanId => $jawabanId) {
            // ...
            // Ambil latihan yang terkait dengan jawaban ini
            $jenisPertanyaan = Jawaban::find($jawabanId)->latihan->jenis_pertanyaan_id;
            // dd($jenisPertanyaan);
            //  1 = Multiple Choice , 2 = Speech , 3 = Listening
            // Logika Speech
            if ($jenisPertanyaan == 2) {
                $jawabanBenar = Jawaban::where('latihan_id', $pertanyaanId)->where('is_true', true)->value('jawaban');
                $jawabanDijawab = $speech;
                session()->put('jawabanTerjawab.' . $pertanyaanId, $jawabanDijawab);
                session()->put('jawabanBenar.' . $pertanyaanId, $jawabanBenar);
            } else {
                $jawabanDijawab = Jawaban::where('id', $jawabanId)->value('jawaban');
                $jawabanBenar = Jawaban::where('latihan_id', $pertanyaanId)->where('is_true', true)->value('jawaban');
                // Simpan jawaban yang telah dijawab dalam session
                // Simpan jawaban yang dijawab dan jawaban yang benar dalam session
                session()->put('jawabanTerjawab.' . $pertanyaanId, $jawabanDijawab);
                session()->put('jawabanBenar.' . $pertanyaanId, $jawabanBenar);
            }

            // Periksa apakah jawaban tersebut benar (is_true = true)
            $jawaban = Jawaban::where('id', $jawabanId)->where('is_true', true)->first();
            if ($speech == $jawabanBenar) {
                $jawaban = true;
            }
            if ($jawaban) {
                // Jawaban benar
                $messages[$pertanyaanId] = 'Soal no ' . $pertanyaanId . ' Benar. (10 Exp)';
                $id_terjawab[$pertanyaanId] = $jawabanId;
            } else {
                // Jawaban salah
                $messages[$pertanyaanId] = 'Soal no ' . $pertanyaanId . ' Salah.';
                $id_terjawab[$pertanyaanId] = $jawabanId;
            }
        }

        // dd($request->input('jawaban'));
        // Set pesan-pesan ke dalam session
        session()->flash('messages', $messages);
        session()->flash('id_terjawab', $id_terjawab);

        // dd(count($coba));
        // Redirect kembali ke halaman latihan
        return redirect('/latihan/' . $request->input('materi_slug'));
    }
    public function selesai()
    {
        //         @csrf
        //         <input type="hidden" name="exp" value="10">
        //         <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        //         <input type="hidden" name="materi_id" value="{{ $materi->id }}">
        $items = [
            'exp' => intval($_GET['benar']),
            'user_id' => auth()->user()->id,
            'materi_id' => intval($_GET['materi_id'])
        ];
        // dd($items);
        Progress::create($items);

        return redirect('/papan-skor')->with('tambah', "Selamat !!! Exp Anda Bertambah " . $items['exp'] . " !!");
    }
}
