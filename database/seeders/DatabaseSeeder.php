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
            'password' => bcrypt('bismillah123#'),
            'email' => 'naufal@gmail.com',
            'is_admin' => true,
            'gender' => 'male'
        ]);
        User::create([
            'name' => 'Mohamad Farhat',
            'username' => 'fardanio',
            'password' => bcrypt('bismillah123#'),
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
        // 8
        Materi::create([
            'category_id' => 2,
            'judul' => 'Idzhar Syafawi',
            'slug' => 'idzhar-syafawi',
            'desc' => 'apabila ada mim sukun bertemu dengan semua huruf hijaiyah selain huruf mim[م] dan [ب]',
            'body' => "<div>Apabila ada mim sukun bertemu dengan salah satu huruf yang 26, yakni semua huruf hijaiyah selain huruf mim,[م] dan baa' [ب] maka hukum bacaannya disebut:</div><blockquote>Idh-har Syafawi [اظهار شفوى]</blockquote><div>cara membacanya :yang terang dibibir dengan mulut tertutup.dan harus lebih dijelaskan [di Idh-harkan] lagi apabila bertemu dengan huruf wau [و] dan faa'[ف]<br>Misalnya:</div><blockquote>انعمت . لهم فيها . عليهم ولا الضااين</blockquote><div>dan sebagainya.</div>",
        ]);
        // 9
        Materi::create([
            'category_id' => 3,
            'judul' => 'Mim Tasydid dan Nun Tasydid',
            'slug' => 'mim-tasydid-dan-nun-tasydid',
            'desc' => 'Apabila ada mim yang bertasydid dan nun yang bertasydid dan dibaca mendengung',
            'body' => "<div>Apabila ada mim yang bertasydid dan nun yang bertasydid, maka dibaca dengan mendengung dan disebut dengan bacaan:</div><blockquote>Ghunnah [غنة]</blockquote><div>Misalnya</div><blockquote>الناس . النار . ان . اما . الجنة</blockquote><div>dan lain sebagainya</div>",
        ]);
        // 10
        Materi::create([
            'category_id' => 4,
            'judul' => "Laam Ta'rief",
            'slug' => "laam-ta'rief",
            'desc' => "Apabila ada lam Ta'rief [ال] bertemu /dihubungkan dengan salah satu huruf 14, yaitu: [و . ك . ج . ح . غ . ب . ء . ه . م . ى . ق . ع . ف .خ]",
            'body' => "<div>Apabila ada lam Ta'rief [ال] bertemu /dihubungkan dengan salah satu huruf 14, yaitu:</div><blockquote>و . ك . ج . ح . غ . ب . ء . ه . م . ى . ق . ع . ف .خ&nbsp;</blockquote><div>maka hukum bacaannya disebut:</div><blockquote>Idh-har Qomariyah [اظهار قمرية]</blockquote><div>cara membacanya: harus terang<br>huruf 14 itu telah terkumpul dalam kalimat ini:</div><blockquote>ابغ حجك وخف عقيمه</blockquote><div>Huruf 14 itu dinamakan huruf Qamariyah [قمريه]<br>Qomar artinya&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: bulan.<br>Qomariyah artinya : sebangsa bulan.<br><br>Karena Laam Ta'rief itu diumpamakan bintang, dan huruf itu diumpamakan bulan. Bintang itu tetap terang kelihatannya, meskipun ada atau bertemu dengan bulan<br><br>Karena itu pula, maka Laam Ta'rief tadi, ketika bertemu dengan huruf qomariyah harus dibaca terang.<br>Misalnya:</div><blockquote>الانعام . البر . الغمام . الحميم . الجنة . الكوثر . الولدان . الخير . القمر</blockquote><div>dan lain sebagainya.</div>",
        ]);
        // 11
        Materi::create([
            'category_id' => 4,
            'judul' => "Idgham Syamsiyah",
            'slug' => "idgham-syamsiyah",
            'desc' => "Apabila ada Laam Ta'rief(ال) bertemu dengan salah satu huruf hijaiyah yakni semua huruf selain huruf qamariyah",
            'body' => "<div>Apabila ada Laam Ta'rief(ال) bertemu dengan salah satu huruf yang 14 yakni semua huruf selain huruf qomariyah maka hukum bacaannya disebut.</div><blockquote>Idgham Syamsiyah [ادغام شمسية]</blockquote><div>Cara membacanya : harus dimasukkan (di-Idghamkan) ke dalam salah satu huruf yang 14.<br>sedangkan huruf yang 14 dinamakan huruf syamsiyah شمسية&nbsp;<br><br>Syam artinya&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: Matahari<br>Syamsiyah artinya : sebangsa matahari<br><br>Bintang itu apabila bertemu dengan matahari menjadi tidak kelihatan. Demikian pula Laam Ta'rief itu apabila bertemu dengan huruf Syamsiyah menjadi tidak terbaca pula meskipun tulisannya masih ada. Dan kemudian ditasydidkan(dimadukkan) kedalam huruf Syamsiyah.<br>Misalnya:</div><blockquote>السلام . التواب . الرحيم . والشمس . بالصبر . الضالين . الظالمون . الناس . الدين</blockquote><div>dan lain sebagainya.</div>",
        ]);
        // 12
        Materi::create([
            'category_id' => 5,
            'judul' => 'Laam Tebal dan Tipis',
            'slug' => 'laam-tebal-dan-tipis',
            'desc' => 'Apabila Laam dalam perkataan allah didahului oleh fathah atau dhomah',
            'body' => "<div>Apabila Laam dalam perkataan allah didahului oleh fathah atau dhomah, maka haruslah dibaca tebal [مفخمة]<br>Misalnya:</div><blockquote>شهدالله . رسول الله .اللهم</blockquote><div>Apabila Laam dalam perkataan Allah didahului oleh kasroh dan semua Laam yang tidak didalam perkataan Allah<br>maka harus dibaca tipis [مرققة]<br>Misalnya:</div><blockquote>بسم الله . بالله . وله الحمد . اللذى . وعلم</blockquote><div>perkataan allah disebut&nbsp;</div><blockquote>لفظ الجلالة</blockquote>",
        ]);
        // 13
        Materi::create([
            'category_id' => 6,
            'judul' => 'Idgham Mutamatsilain',
            'slug' => 'idgham-mutamatsilain',
            'desc' => 'Apabila ada dua huruf yang sama sedang yang pertama sukun (mati)',
            'body' => "<div>Apabila ada dua huruf yang sama sedang yang pertama sukun (mati), misalnya baa' sukun bertemu dengan baa' maka bacaannya disebut:</div><blockquote>Idgham Mutamatsilain [ادغام متماثلين]</blockquote><div>Cara membacanya : harus dimasukkan [ditasydidkan] kepada huruf yang kedua.<br>misalnya:</div><blockquote>اضرب بعصاك . اذ ذهب . فماربحت تجارتهم</blockquote><div>dibaca:</div><blockquote>اضربعصاك . اذهب . فماربحتجارتهم</blockquote><div>Mutamatsilain artinya : Dua semisal dan juga disebut:<br>(mitslain)<br><br>Terkecuali:<br>Dari kaidah Idgham Mutamatsilain ini, ada kecualinya,yakni:<br>Apabila ada:</div><h1>wau sukun[و] bertemu dengan wau [و],<br>yaa' sukun[ى] bertemu dengan yaa' [ى],</h1><div>maka tidak di Idghamkan (dimasukkan) dalam huruf yang kedua tetapi harus dibaca panjang sebagaimana mestinya.<br>Misalnya:</div><blockquote>اصبرواوصابروا . امنواوعملوا . فى يومكان</blockquote>",
        ]);
        // 14
        Materi::create([
            'category_id' => 7,
            'judul' => 'Idgham Mutaqaribain',
            'slug' => 'idgham-mutaqaribain',
            'desc' => "Apabila ada: tsaa' sukun[ث] bertemu dengan dzal [ذ] baa' sukun [ب] bertemu dengan mim [م] qaaf sukun [ق] bertemu dengan kaaf [ك]",
            'body' => "<div>Apabila ada:<br>tsaa' sukun[ث] bertemu dengan dzal [ذ]<br>baa' sukun [ب] bertemu dengan mim [م]<br>qaaf sukun [ق] bertemu dengan kaaf [ك]<br>Maka hukum bacaannya disebut:</div><blockquote>Idgham Mutaqaribain [ادغام متقاربين]</blockquote><div>Mutaqaribain artinya : dua berdekatan&nbsp;<br>Cara membacanya : harus dimasukkan [di Idghamkan] ke dalam huruf yang dua itu.<br>Misalnya:</div><blockquote>يلهذ لك&nbsp; dibaca&nbsp; يلهث ذالك<br>اركب معنا &nbsp; dibaca&nbsp; اركتعنا<br>الم نخلكم&nbsp; dibaca&nbsp; الم نخلقكم</blockquote><div><br></div>",
        ]);
        // 15
        Materi::create([
            'category_id' => 8,
            'judul' => 'Idgham Mutajanisain',
            'slug' => 'idgham-mutajanisain',
            'desc' => "Apabila ada: taa' sukun [ت] bertemu dengan thaa'  [ط] taa' sukun [ت] bertemu dengan dal [د] thaa' sukun [ط] bertemu dengan taa' [ت] dal sukun [د] bertemu dengan taa' [ت] laam sukun [ل] bertemu dengan raa' [ر] dzal sukun [ذ] bertemu dengan dhaa' [ظ]",
            'body' => "<div>Apabila ada:<br>taa' sukun [ت] bertemu dengan thaa'&nbsp; [ط]<br>taa' sukun [ت] bertemu dengan dal&nbsp; &nbsp; &nbsp; [د]<br>thaa' sukun [ط] bertemu dengan taa' &nbsp; [ت]<br>dal sukun [د] bertemu dengan taa'&nbsp; &nbsp; &nbsp; &nbsp; [ت]<br>laam sukun [ل] bertemu dengan raa'&nbsp; &nbsp; [ر]<br>dzal sukun&nbsp; [ذ] bertemu dengan dhaa' &nbsp; [ظ]<br><br>Maka hukum bacannya disebut :</div><blockquote>Idgham Mutajanisain [ادغام متجا نسين]</blockquote><div>Cara membacanya : dimasukkan [di Idghamkan atau ditasydidkan] kedalam huruf yang kedua.<br>Misalnya:&nbsp;</div><blockquote>امنطائفة&nbsp; dibaca&nbsp; امنت طائفة<br>لقتاب&nbsp; dibaca&nbsp; لقد تاب<br>بست&nbsp; dibaca&nbsp; بسطت<br>اجيبد عون&nbsp; dibaca&nbsp; اجيبت دعوة<br>قرب&nbsp; dibaca&nbsp; قل رب<br>اظلموا&nbsp; dibaca&nbsp; اذ ظلموا</blockquote><div>dan sebagainya.</div>",
        ]);
        // 16
        Materi::create([
            'category_id' => 9,
            'judul' => "Mad Thabi'ie",
            'slug' => "mad-thabi'ie",
            'desc' => "<div>Apabila ada:<br>Alif&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;[<strong>ا</strong>], sesudah fathah&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;[<strong> َ </strong>], atau<br>yaa' sukun&nbsp; [<strong>ى</strong>], sesudah kasrah&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;[<strong> ِ </strong>], atau <br>wau&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;[<strong>و</strong>], sesudah dhammah&nbsp; [<strong> ُ</strong> ],<br>maka hukum bacaannya disebut:</div><blockquote>Mad Thabi'ie&nbsp; &nbsp; [مد طبيعى]</blockquote><div>Mad artinya&nbsp; &nbsp; &nbsp; &nbsp; :panjang<br>Thabi'ie artinya&nbsp; : biasa<br><br>Cara membacanya: harus panjang sepanjang dua harakat (dua gerakan huruf), atau disebut satu alif&nbsp;<br>Misalnya :<br>قو لوا . فيه . مال . نوحيها<br>dan sebagainya.</div>",
        ]);
        // 17
        Materi::create([
            'category_id' => 9,
            'judul' => 'Mad Wajib Muttashil',
            'slug' => 'mad-wajib-muttashil',
            'desc' => "Apabila ada Mad Thabi'ie bertemu dengan hamzah [ء] di dalam satu kata (kalimat)",
            'body' => "<div>Apabila ada Mad Thabi'ie bertemu dengan hamzah [<strong>ء</strong>] di dalam satu kata (kalimat), maka hukum bacaannya disebut:</div><blockquote>Mad Wajib Muttashil&nbsp; [مد واجب متصل]</blockquote><div>Cara membacanya :wajib panjang sepanjang 5 harakat atau setengah kali mad Thabi'ie atau dua setengah alif.<br>Muttashil artinya &nbsp; : Bersambung.<br>Misalnya :</div><blockquote>سواء . جئ . سوء . جاء . ساء . وراء</blockquote><div>dan lain sebagainya&nbsp;</div>",
        ]);
        // 18
        Materi::create([
            'category_id' => 9,
            'judul' => 'Mad Jaiz Munfashil',
            'slug' => 'mad-jaiz-munfashil',
            'desc' => "Apabila ada Mad Thabi'ie bertemu dengan hamzah [ء]tetapi hamzah itu di lain perkataan (kalimat)",
            'body' => "<div>Apabila ada Mad Thabi'ie bertemu dengan hamzah [<strong>ء</strong>]tetapi hamzah itu di lain perkataan (kalimat), maka hukum bacaannya disebut:</div><blockquote>Mad jaiz Munfashil&nbsp; &nbsp; [مد جائز منفصل]</blockquote><div>Jaiz artinya&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; boleh&nbsp;<br>Munfashil artinya&nbsp; &nbsp; :&nbsp; terpisah&nbsp;<br><br>Cara membacanya : boleh dipanjangkan seperti Mad Wajib Muttashil dan boleh juga seperti Mad Thabi'ie. Tetapi seperti Mad Wajib Muttashil lebih baik.&nbsp;<br>Misalnya:</div><blockquote>ولاأنتم . بما أنزل . قوا أنفسكم . فى أ نفسكم</blockquote>",
        ]);
        // 19
        Materi::create([
            'category_id' => 9,
            'judul' => 'Mad Lazim Mutsaqqal Kilmi',
            'slug' => 'mad-lazim-mutsaqqal-kilmi',
            'desc' => "Apabila ada mad Thabi'ie bertemu dengan tasydid didalam satu perkataan  (kalimat)",
            'body' => "<div>Apabila ada mad Thabi'ie bertemu dengan tasydid didalam satu perkataan&nbsp; (kalimat), maka hukum bacaannya disebut:</div><blockquote>Mad Lazim Mutsaqqal Kilmi [مد لازم مثقل كلمى]</blockquote><div>atau</div><blockquote>Mad Lazim Muthawwal [مد لازم مطول]</blockquote><div>Lazim artinya&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : pasti atau wajib<br>Mutsaqqal artinya&nbsp; &nbsp; : diberatkan<br>Kilmi artinya&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: sebangsa perkataan<br>Muthawwal artinya&nbsp; : dipanjangkan<br><br>Cara membacanya : harus panjang, selama 3 kali Mad Thabi'ie atau 6 harakat<br>Misalnya :</div><blockquote>ولاالضالين . الطامة . الصاخة</blockquote><div>Lain sebagainya.</div>",
        ]);
        // 20
        Materi::create([
            'category_id' => 9,
            'judul' => 'Mad Lazim Mukhafaf kilmi',
            'slug' => 'mad-lazim-mukhafaf-kilmi',
            'desc' => "Apabila ada Mad Thabi'ie bertemu dengan huruf mati [sukun]",
            'body' => "<div>Apabila ada Mad Thabi'ie bertemu dengan huruf mati [sukun],<br>maka hukum bacannya disebut:</div><blockquote>Mad Lazim Mukhafaf Kilmi [مد لازم مخفف كلمى]</blockquote><div>Cara membacanya :seperti Mad Lazim Muthawwal.[sepanjang enam harakat].<br>didalam Al-Quran yang menurut hukum ini hanya satu perkataan yaitu: [<strong>آلان</strong>] yang ada di dua tempat dalam surat yunus[<strong>يونس</strong>]</div>",
        ]);
        // 21
        Materi::create([
            'category_id' => 9,
            'judul' => 'Mad Layin',
            'slug' => 'mad-layin',
            'desc' => "Apabila ada wau [و] atau yaa' sukun[ى] sedang huruf yang sebelumnya itu berharakat fathah",
            'body' => "<div>Apabila ada wau [<strong>و</strong>] atau yaa' sukun[<strong>ى</strong>] sedang huruf yang sebelumnya itu berharakat fathah, maka hukum bacaannya disebut:</div><blockquote>Mad Layin &nbsp; [مد لين]</blockquote><div>dan cara membacanya : sekedar lunak dan lemas<br>ien atau layin artinya : lunak atau lemas<br>Misalnya:</div><blockquote>ريب . خوف . بيت</blockquote><div><br></div>",
        ]);
        // 22
        Materi::create([
            'category_id' => 9,
            'judul' => "Mad 'Aridl Lissukun",
            'slug' => "mad-'aridl-lissukun",
            'desc' => "Apabila ada waqaf atau tempat pemberhentian membaca ,sedang sebelum waqaf itu ada Mad Thabi'ie atau Mad Lien",
            'body' => "<div>Apabila ada waqaf atau tempat pemberhentian membaca,sedang sebelum waqaf itu ada Mad Thabi'ie atau Mad Lien, maka hukum bacaannya disebut:</div><blockquote>Mad 'Aridl Lissukun [مد عارض للسكون]</blockquote><div><br>dan cara membacanya ada 3 macam:</div><ol><li>Yang lebih utama supaya dibaca panjang, sama dengan Mad Wajib Mutashil (enam harakat)</li><li>Yang pertengahan, dibaca 4 harakat, yakni dua kali Mad Thabi'ie</li><li>Yang pendek, yakni boleh hanya dibaca seperti Mad Thabi'ie biasa (dua harakat)</li></ol><div>'Aridl&nbsp; :yang bertemu atau yang datang.<br>Li&nbsp; &nbsp; &nbsp; &nbsp; : karena<br>Sukun : mati<br>Misalnya :</div><blockquote>خالدون . سميع بصير . والناس . المفلحون . المحسنين . رب هذا البيت</blockquote>",
        ]);
        // 23
        Materi::create([
            'category_id' => 9,
            'judul' => 'Mad Shilah Qashirah',
            'slug' => 'mad-shilah-qashirah',
            'desc' => "Apabila ada haa' dhamir yang berupa [ه]sedang sebelum haa' ada huruf hidup (berharakat)",
            'body' => "<div>Apabila ada haa' dhamir yang berupa [<strong>ه</strong>]sedang sebelum haa' ada huruf hidup (berharakat) maka hukum bacaannya disebut:</div><blockquote>Mad Shilah Qashirah &nbsp; [مد صلة قصيرة]</blockquote><div>Dan cara membacanya : harus panjang seperti Mad Thabi'ie (dua harakat)<br>Shilah&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : Hubungan<br>Qashirah&nbsp; &nbsp; : pendek<br>Misalnya:</div><blockquote>وعدده يحثسب . انه كان . له ما فى السموات . وحد ه لاشريك له</blockquote><div>perhatian :<br>Apabila sebelum haa' Dhamir tadi huruf mati (sukun), atau apabila dihubungkan dengan huruf yang lain sesudahnya, maka haa' tadi tidak boleh dibaca panjang.<br>Misalnya:</div><blockquote>له الدين . فيه . عنه . انه الحق</blockquote>",
        ]);
        // 24
        Materi::create([
            'category_id' => 9,
            'judul' => 'Mad Shilah Thawilah',
            'slug' => 'mad-shilah-thawilah',
            'desc' => "Apabila ada Mad Shilah Qashirah [مد صلة قصيرة ] bertemu dengan [ء]",
            'body' => "<div>Apabila ada Mad Shilah Qashirah [<strong>مد صلة قصيرة</strong> ]</div><div>bertemu dengan [<strong>ء</strong>], maka hukum bacaan disebut:</div><blockquote>Mad Shilah Thawilah&nbsp; [مد صلة طويلة]</blockquote><div>cara membacanya : seperti Mad Jai'z Munfashil<br>Misalnya:</div><blockquote>ما له أخلده . عنده إلابإذ نه . له إلا بما شاء</blockquote><div>dan sebagainya.</div>",
        ]);
        // 25
        Materi::create([
            'category_id' => 9,
            'judul' => "Mad 'Iwadl",
            'slug' => "mad-'iwadl",
            'desc' => "Apabila ada fathatain atau ً) yang jatuh pad waqaf(Pemberhentian), Pada akhir Kalimat",
            'body' => "<div>Apabila ada fathatain atau ً) yang jatuh pad waqaf(Pemberhentian), Pada akhir Kalimat maka hukum bacaannya disebut:<br>Mad Iwadl [مد عوض]<br>Cara membacanya&nbsp; :dipanjangkan seperti Mad Thabi'ie dan tidak dibaca seperti tanwin.<br>Misalnya:</div><blockquote>عليما حكيما . سميعا بصيرا . فتحا مبينا . صرا طا مستقيما</blockquote><div>iwadl artinya ganti<br><br>yakni tanwin tadi diganti dengan Mad atau Alif yang menyebabkan bacaan panjang itu.</div>",
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
