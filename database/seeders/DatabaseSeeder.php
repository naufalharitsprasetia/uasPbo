<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use App\Models\Materi;
use App\Models\Latihan;
use App\Models\Jawaban;
use App\Models\JenisPertanyaan;
use App\Models\Progress;
use Illuminate\Database\Seeder;

use function Laravel\Prompts\password;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Naufal Harits',
            'username' => 'naufalharis',
            'password' => bcrypt('bismillah'),
            'email' => 'naufal@gmail.com',
            'is_admin' => true,
            'gender' => 'male'
        ]);
        User::create([
            'name' => 'Mohamad Farhat',
            'username' => 'fardanio',
            'password' => bcrypt('bismillah'),
            'email' => 'farhat@gmail.com',
            'is_admin' => true,
            'gender' => 'male'
        ]);
        User::create([
            'name' => 'Ustadzah Hanifah',
            'username' => 'ustadzahhanifah',
            'password' => bcrypt('bismillah'),
            'email' => 'hanifah@gmail.com',
            'gender' => 'female'
        ]);

        // Category
        // 1
        Category::create([
            'name' => 'Nun Sukun dan Tanwin',
            'slug' => 'nun-sukun-dan-tanwin'
        ]);
        // 2
        Category::create([
            'name' => 'Mim Sukun',
            'slug' => 'mim-sukun'
        ]);
        // 3
        Category::create([
            'name' => 'Mim Tasydid dan Nun Tasydid',
            'slug' => 'mim-tasydid-dan-nun-tasydid'
        ]);
        // 4
        Category::create([
            'name' => "Laam Ta'rief",
            'slug' => 'laam-ta-rief'
        ]);
        // 5
        Category::create([
            'name' => 'Laam Tebal dan Tipis',
            'slug' => 'laam-tebal-dan-tipis'
        ]);
        // 6
        Category::create([
            'name' => 'Idgham Mutamasilain',
            'slug' => 'idgham-mutamasilain'
        ]);
        // 7
        Category::create([
            'name' => 'Idgham Mutaqaribain',
            'slug' => 'idgham-mutaqaribain'
        ]);
        // 8
        Category::create([
            'name' => 'Idgham Mutajanisain',
            'slug' => 'idgham-mutajanisain'
        ]);
        // 9
        Category::create([
            'name' => 'Mad',
            'slug' => 'mad'
        ]);
        // 10
        Category::create([
            'name' => 'Raa',
            'slug' => 'raa'
        ]);
        // 11
        Category::create([
            'name' => 'Qalqalah',
            'slug' => 'qalqalah'
        ]);
        // 12
        Category::create([
            'name' => 'Waqaf',
            'slug' => 'waqaf'
        ]);
        JenisPertanyaan::create([
            'jenis_pertanyaan' => 'Multiple Choice'
        ]);
        JenisPertanyaan::create([
            'jenis_pertanyaan' => 'Speech'
        ]);
        JenisPertanyaan::create([
            'jenis_pertanyaan' => 'Listening'
        ]);
        // 1
        Materi::create([
            'category_id' => 1,
            'judul' => 'Izhar Halqi',
            'slug' => 'izhar-halqi',
            'desc' => 'Manakala Ada Nun Sukun Bertemu dengan tanwin',
            'body' => "- Manakala ada Nun Sukun [ن] atau tanwin [ ً ٍ ٌ] bertemu salah satu huruf halqi [حروف حلقي] yang enam yakni :
                        hamzah, haa, haa' 'ain, ghain, dan khoo<blockquote> [ء ح ه ع غ خ] </blockquote> - Maka hukum bacaannya disebut:
                        <b>Idzhar Halqi</b>  <blockquote>[إظهار حلقى]</blockquote> - Cara membacanya: harus dibaca dengan terang dan jelas sebab bertemu dengan huruf halqi.
                        <blockquote>Contohnya : </blockquote>     <blockquote>غفور حليم ، سميع عليم ، منه</blockquote>
                        dan lain sebagainya. <br><br> - Keterangan:  Idzhar artinya : menerangkan atau menjelaskan.
                        Halqi artinya : kerongkongan.",
        ]);
        // 2
        Materi::create([
            'category_id' => 1,
            'judul' => 'Idgham Bighunnah',
            'slug' => 'idgham-bighunnah',
            'desc' => "Manakala Ada Nun Sukun Bertemu dengan tanwinapabila ada nun sukun atau tanwin bertemu dengan salah satu daripada huruf: yaa', nun, mim dan wau.[ي ن م و]",
            'body' => "<div>apabila ada nun sukun atau tanwin bertemu dengan salah&nbsp;<br>satu daripada huruf: yaa', nun, mim dan wau.[ي ن م و]<br>maka hukum bacaannya disebut:</div><blockquote>ID-GHAM BI-GHUNNAH [ادغام بغنة]</blockquote><div>Id-gham artinya: memasukkan atau mentasydidkan<br>Bi-ghunnah artinya: dengan mendengung<br>jadi cara membacanya harus dimasukkan atau ditasydidkan kedalam salah satu huruf yang empat itu, dengan suara mendengung.<br><strong>Umpamanya :</strong></div><blockquote>من نور . من منع . من يقول . من ولي ولانصير</blockquote><div>Akan tetapi apabila nun sukun dan tanwin bertemu dengan salah satu huruf yang empat tersebut diatas didalam satu perkataan [kalimat] maka bukanlah bacaan Id-gham,artinya tidak dibaca Id-gham ,dan tidak ditasydidkan, bahkan harus dibaca dengan terang dan jelas atau [Idh-har]</div><blockquote>[اظهار]</blockquote><div>dan disebut<strong> IDH-HAR WAJIB&nbsp;</strong></div><blockquote>[اظهار واجب]</blockquote><div><strong>Umpamanya:</strong></div><blockquote>دنيا . صنوان . بنيان</blockquote><div>dan lain sebagainya</div>",
        ]);
        // 3
        Materi::create([
            'category_id' => 1,
            'judul' => 'Idgham Bilaghunnah',
            'slug' => 'idgham-bilaghunnah',
            'desc' => "Apabila ada nun sukun dan tanwin bertemu dengan salah satu dari huruf : lam atau ra'",
            'body' => "<div>Apabila ada nun sukun dan tanwin bertemu dengan salah&nbsp;<br>satu dari huruf : lam atau ra' maka hukum bacaan-<br>nya disebut:</div><blockquote>IDGHAM BILAGHUNNAH [ادغام بلاغنة]</blockquote><div>Id-gham artinya : memasukkan atau mentasydidkan<br>Bila ghunnah artinya : dengan tidak mendengung<br>Misalnya:</div><blockquote>ملم&nbsp; dibaca من لم<br>مر بهم dibaca مر بهم</blockquote><div>dan lain sebagainya</div>",
        ]);
        // 4
        Materi::create([
            'category_id' => 1,
            'judul' => 'Iqlab',
            'slug' => 'iqlab',
            'desc' => "Apabila ada nun sukun dan tanwin bertemu dengan huruf baa'",
            'body' => "<div>Apabila ada nun sukun dan tanwin bertemu dengan huruf baa'<br>maka hukum bacaannya disebut:<br>IQLAB [اقلاب]<br>Iqlab artinya :membalik atau menukar.<br>Tegasnya huruf nun atau tanwin itu membacanya ketika itu dibalik atau ditukar menjadi: mim'<br>Misalnya:</div><blockquote>سميع بصير . تنبيه . كرام بررة</blockquote><div>dan sebagainya</div>",
        ]);
        // 5
        Materi::create([
            'category_id' => 1,
            'judul' => 'Ikhfa Haqiqi',
            'slug' => 'ikhfa-haqiqi',
            'desc' => "Apabila ada nun sukun atau tanwin bertemu dengan salah satu dari huruf yang 15",
            'body' => "<div>Apabila ada nun sukun atau tanwin bertemu dengan salah satu dari huruf yang 15 tersebut dibawah ini, maka hukum bacaannya disebut:</div><blockquote>IKHFA'HAQIQI [اخفاء حقيقي]</blockquote><div>Ikhfaa' artinya :menyamar atau menyembunyikan.<br>Haqiqi artinya : sungguh sungguh atau benar benar<br>Cara membacanya :Samar-samar antara</div><div>Idhar[اظهار] dengan Idgham [ادغام]</div><div>artinya : harus terang, tetapi disambung dengan huruf yang&nbsp;<br>lain di mukanya dengan mendengung.<br>Huruf yang 15 itu ialah:</div><blockquote>ت ث ج د ذ ز س ش ص ض ط ظ ف ق ك&nbsp;</blockquote><div>Huruf-huruf&nbsp; itu ialah semua huruf hijaiyah[semua huruf Arab],<br>selain dari huruf Idh-Har Halqi,Id-Gham Bi-Ghunnah, Id-Gham Bila Gunnah dan Iqlab.&nbsp;<br>Misalnya:</div><blockquote>من جوع . ينطق . اندادا . منكم . انفسكم</blockquote>",
        ]);
        // 6
        Materi::create([
            'category_id' => 2,
            'judul' => "Ikhfaa' Syafawi",
            'slug' => "ikhfaa'-syafawi",
            'desc' => 'Apabila ada mim sukun [م]bertemu dengan huruf baa[ب]',
            'body' => "<div>Apabila ada mim sukun [م]bertemu dengan huruf baa[ب]<br>maka hukum bacaannya disebut:</div><blockquote>IKHFAA' SYAFAWI [اخفاء شفوى]</blockquote><div>Cara membacanya : Harus samar - samar dibibir dan didengungkan.<br>Misalnya:</div><blockquote>اعتصمبالله . وهم به . دخلتم بهم</blockquote><div>Dan lain sebagainya.</div>",
        ]);
        // 7
        Materi::create([
            'category_id' => 1,
            'judul' => 'Idgham mimi',
            'slug' => 'idgham-mimi',
            'desc' => 'Apabila ada mim sukun bertemu dengan mim',
            'body' => "<div>Apabila ada mim sukun bertemu dengan mim&nbsp;<br>maka hukum bacaannya disebut:</div><blockquote>Idgham mimi [اذغام ميمى]</blockquote><div>Misalnya:</div><blockquote>وما لهم من الله . ام من يرجون</blockquote><div>dan sebagainya.<br>boleh juga bacaan itu disebut.</div><blockquote>Idgham mutamatsilain[اذغام متما ثلين]</blockquote><div>Karena sesuai dengan kaidah hukum&nbsp;</div>",
        ]);

        Latihan::create([
            'materi_id' => 1,
            'jenis_pertanyaan_id' => 1,
            'pertanyaan' => 'Apa Artinya Idzhar ??'
        ]);
        Latihan::create([
            'materi_id' => 1,
            'jenis_pertanyaan_id' => 1,
            'pertanyaan' => 'Ada Berapa Huruf Halqi ??'
        ]);
        Latihan::create([
            'materi_id' => 1,
            'jenis_pertanyaan_id' => 1,
            'pertanyaan' => 'Kenapa Disebut Halqi ??'
        ]);
        Jawaban::create([
            'latihan_id' => 1,
            'jawaban' => "Menerangkan/Menjelaskan",
            'is_true' => true
        ]);
        Jawaban::create([
            'latihan_id' => 1,
            'jawaban' => "Memasukkan",
        ]);
        Jawaban::create([
            'latihan_id' => 1,
            'jawaban' => "Membalik",
        ]);
        Jawaban::create([
            'latihan_id' => 1,
            'jawaban' => "Menyamar",
        ]);
        Jawaban::create([
            'latihan_id' => 2,
            'jawaban' => "5",
        ]);
        Jawaban::create([
            'latihan_id' => 2,
            'jawaban' => "4",
        ]);
        Jawaban::create([
            'latihan_id' => 2,
            'jawaban' => "6",
            'is_true' => true
        ]);
        Jawaban::create([
            'latihan_id' => 3,
            'jawaban' => "Makhrajnya di Kerongkongan",
            'is_true' => true
        ]);
        Jawaban::create([
            'latihan_id' => 3,
            'jawaban' => "Karena Dengung",
        ]);
        Jawaban::create([
            'latihan_id' => 3,
            'jawaban' => "Hanya Sebuah Sebutan",
        ]);
        //
        Progress::create([
            'user_id' => 1,
            'materi_id' => 1,
            'exp' => 20
        ]);
        Progress::create([
            'user_id' => 2,
            'materi_id' => 1,
            'exp' => 20
        ]);
        Progress::create([
            'user_id' => 1,
            'materi_id' => 1,
            'exp' => 30
        ]);
        Progress::create([
            'user_id' => 3,
            'materi_id' => 1,
            'exp' => 40
        ]);
        Progress::create([
            'user_id' => 3,
            'materi_id' => 1,
            'exp' => 40
        ]);
    }
}
