@extends('base')

{{-- http://127.0.0.1:8000/signup/persyaratan --}}
{{-- Author: Maghfirah ZA --}}

@section('title', 'Persyaratan')

@section('content')
<div class="container-xl mb-5">
    <div class="col">
        <div class="row my-4">
            <div class="d-flex" style="width: 280px;">
                <div class="border border-teal rounded-circle">
                    <i class="fas fa-hospital-alt text-teal" style="padding: 18px 16px; font-size: 32px;"></i><br>
                </div>
                <div class="align-self-center ps-3 text-teal text-nowrap">
                    <h5 class="mb-0">Legalitas Rujucare</h5>
                    <h5 class="mb-0 fw-normal">Pre-Registrasi</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mt-2 d-flex flex-column flex-shrink-0" style="width: 280px;">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="{{ URL('/signup/persetujuan') }}" class="nav-link link-dark">
                            Persetujuan Fasilitas Kesehatan
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL('/signup/persyaratan') }}" class="nav-link active" aria-current="page">
                            Persyaratan Fasilitas Kesehatan
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="{{ URL('/signup') }}" class="nav-link link-dark">
                            Kembali
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-8">
                <h2>Persyaratan Fasilitas Kesehatan</h2>
                <hr>
                <h5> Konten Situs</h5>
                <p> Semua materi, termasuk gambar, perincian, data, ilustrasi, desain, ikon, foto, klip video, teks, perangkat lunak, grafik, tulisan, logo, dan materi lain yang merupakan bagian dari Situs ini (secara kolektif disebut “Konten”) dimiliki secara eksklusif (baik langsung maupun tidak langsung) oleh Grup dan/atau para penyedia kontennya. Konten dilindungi oleh hak cipta, merek dagang, merek jasa, tampilan visual produk atau kemasannya, serta hak intelektual dan kepemilikan lainnya yang dimiliki oleh Grup. Semua hak yang tidak dengan tegas dinyatakan di dalam Syarat dan Ketentuan ini merupakan hak Grup.</p>
                <p>Semua tanda, logo, atau desain yang ditampilkan dalam Situs Web Grup adalah merek dagang dan merek jasa eksklusif yang dimiliki (baik secara langsung maupun tidak langsung) oleh Grup. Lisensi untuk atau hak atas merek, logo, dan desain serta hak milik Grup lainnya tidak diberikan atau dilimpahkan kepada Anda.</p>
                <p>Semua merek dagang dan merek jasa lain yang bukan merupakan milik Grup, tetapi ditampilkan dalam Situs Web Grup, adalah properti dari pemiliknya masing-masing.</p>
                <h5>Penggunaan Situs dan Pembatasan</h5>
                <p>Situs ini beserta kontennya hanya dapat digunakan untuk keperluan pribadi yang tidak bersifat komersial. Dilarang keras menggunakan Situs ini atau Kontennya untuk keperluan lain, termasuk tanpa batasan, memodifikasi, menghilangkan, menghapus, mengirim, mempublikasikan, mendistribusikan, melakukan proxy caching, mengunggah, memposting, mendistribusi ulang, melakukan perizinan ulang, menjual, menggandakan, mempublikasikan ulang, atau menyebarkan dalam bentuk lain tanpa izin tertulis dari Grup atau pemiliknya. Anda tidak boleh menggunakan teknik framing untuk mendapatkan merek dagang atau logo-logo Grup atau menggunakan meta tag atau teks tersembunyi tanpa persetujuan tertulis terlebih dahulu. Anda tidak boleh membuat tautan ke Situs tanpa persetujuan tertulis sebelumnya dari kami. Dilarang keras menggunakan spider, robot, dan alat-alat pengumpulan atau pengambilan data sejenis lainnya.</p>
                <p>Anda boleh melihat dan mencetak salinan Konten yang ditampilkan pada Situs, dan mengunduh salinan Konten apa pun yang dapat diunduh, hanya untuk keperluan pribadi, tetapi Anda tidak boleh mengubah Konten dengan cara apa pun, termasuk, tanpa batasan, menghilangkan atau mengubah pemberitahuan mengenai hak cipta atau tanda kepemilikan lainnya. Semua hak dan kepentingan di dalam Konten tidak menjadi milik Anda ketika Anda menyalin atau mengunduh materi tersebut. Informasi yang tersedia dalam Situs ini bersifat gratis dan ditujukan hanya untuk kebutuhan informasi serta tidak membentuk hubungan bisnis atau jasa profesional antara Anda dengan Grup.</p>
                <h5>Perilaku Penggunaan Internet</h5>
                <p>Anda setuju untuk menggunakan Situs hanya untuk keperluan yang sesuai dengan ketentuan hukum. Anda dilarang memposting atau mengirim ke atau melalui Situs ini segala materi yang bersifat melanggar hukum, membahayakan, mengancam, bersifat kasar, melecehkan, mencemarkan nama baik, vulgar, tidak sopan, mengeluarkan kata-kata tidak senonoh, memicu kebencian, atau materi lain yang dapat menimbulkan tanggung jawab perdata maupun pidana sesuai hukum. Kami dapat mengungkapkan semua konten atau segala jenis komunikasi elektronik (termasuk profil dan alamat email Anda, serta informasi lainnya) (1) untuk memenuhi tuntutan hukum, peraturan, atau pemerintah; (2) jika pengungkapan tersebut diperlukan atau sesuai untuk pengoperasian Situs; atau (3) untuk melindungi hak atau properti milik Grup, pihak afiliasinya dan Anda.</p>
                <h5>Ketepatan Informasi</h5>
                <p>Grup berupaya menyediakan informasi yang akurat dan terkini, tetapi kami tidak menjamin bahwa informasi yang terdapat di dalam Situs ini akurat, lengkap, dapat dipercaya, terkini, atau bebas dari kesalahan, atau bahwa Situs ini bersih dari virus. Kami juga tidak bertanggung jawab atas kesalahan atau kekurangan di dalam Situs ini. Meskipun kami dapat mengubah Konten, menyempurnakan Situs, atau mengoreksi kesalahan atau kekurangan sewaktu-waktu pemberitahuan terlebih dahulu, kami tidak wajib melakukan hal-hal tersebut. Kami akan berusaha memperbarui informasi secara tepat waktu, tetapi kami tidak bertanggung jawab atas semua ketidakakuratan yang terjadi. Anda sepenuhnya bertanggung jawab atas penggunaan informasi yang tersedia pada Situs dan Grup tidak akan bertanggung jawab atas hilangnya data, hilangnya laba, atau kerusakan atau kerugian lainnya yang disebabkan oleh penggunaan Situs ini oleh Anda.</p>
                <h5>Tautan ke Situs Pihak Ketiga</h5>
                <p>Tautan pada Situs ini dapat membawa Anda ke layanan atau situs yang tidak dikelola atau dioperasikan oleh Grup. Kami menyediakan tautan tersebut untuk memberi Anda kemudahan dan informasi. Tautan bukanlah bentuk dukungan atas situs atau layanan tersebut. Kami tidak bertanggung jawab atas situs atau layanan yang lain. Anda sepenuhnya bertanggung jawab atas penggunaan situs atau layanan yang ditautkan oleh Situs ini.</p>
                <h6>Sangkalan untuk Jaminan dan Pembatasan Tanggung Jawab</h6>
                <p>SITUS INI BESERTA KONTENNYA DISEDIAKAN OLEH GRUP “SEBAGAIMANA ADANYA” DAN “SEBAGAIMANA TERSEDIA” TANPA PERNYATAAN ATAU JAMINAN DALAM BENTUK APA PUN BAIK TERSURAT MAUPUN TERSIRAT. GRUP DENGAN TEGAS MENYANGKAL SEMUA JAMINAN TERSURAT DAN TERSIRAT, TERMASUK, TETAPI TIDAK TERBATAS PADA, JAMINAN ATAS KELAYAKAN BARANG DAGANGAN, KESESUAIAN UNTUK TUJUAN TERTENTU, KEPEMILIKAN, DAN KETIADAAN PELANGGARAN. GRUP SAMA SEKALI TIDAK DAPAT DIMINTAI PERTANGGUNGJAWABAN OLEH PIHAK MANA PUN ATAS SEGALA KERUSAKAN YANG BERSIFAT LANGSUNG, TIDAK LANGSUNG, AKIBAT HUKUMAN, INSIDENTAL, GANTI RUGI, KHUSUS, KONSEKUENSIAL, DAN SEGALA JENIS KERUSAKAN LAINNYA, HILANGNYA DATA, PENDAPATAN, ATAU LABA, KEHILANGAN ATAU KERUSAKAN PROPERTI, GANGGUAN USAHA, ATAU HILANGNYA PROGRAM ATAU DATA, YANG TIMBUL DARI ATAU SEHUBUNGAN DENGAN SITUS INI, SEMUA SITUS ATAU LAYANAN LAIN YANG DITAUTKAN MELALUI SITUS INI, ATAU SEMUA PENYALINAN, TAMPILAN, ATAU PENGGUNAAN DARIPADANYA, APA PUN DALIL HUKUM YANG MENJADI DASAR BAGI GUGATAN TERSEBUT, SEKALIPUN GRUP TELAH DIBERI TAHU MENGENAI KEMUNGKINAN KERUSAKAN TERSEBUT, TERMASUK, TANPA BATASAN, SEGALA KERUSAKAN YANG DIAKIBATKAN OLEH KESALAHAN, KELALAIAN, VIRUS, PENUNDAAN, ATAU GANGGUAN DALAM PENGOPERASIAN ATAU LAYANAN KARENA ALASAN APA PUN. GRUP TIDAK AKAN BERTANGGUNG JAWAB ATAS KEHILANGAN ATAU KERUSAKAN YANG DIAKIBATKAN ATAU BERKAITAN DENGAN SITUS WEB PIHAK KETIGA, KONTEN SITUS PIHAK KETIGA YANG DIAKSES LEWAT TAUTAN DI DALAM SITUS INI, PENGGUNAAN SITUS INI, ATAU PENGGUNAAN PERLENGKAPAN PERANGKAT LUNAK YANG BERKAITAN DENGAN SITUS INI.</p>
                <p>Undang-undang tertentu tidak mengizinkan adanya pembatasan atas jaminan tersirat atau pengecualian atau pembatasan atas kerugian tertentu. Jika undang-undang tersebut berlaku untuk Anda, sebagian atau seluruh sangkalan, pengecualian, atau pembatasan di atas mungkin tidak berlaku, tetapi tanggung jawab tetap harus dibatasi sejauh yang diizinkan oleh undang-undang.</p>
                <h5>Pemberian Ganti Rugi</h5>
                <p>Anda setuju untuk memberikan ganti rugi dan membebaskan Grup dari segala gugatan, tindakan, tuntutan, kerugian, atau kerusakan dari pihak ketiga, (termasuk imbalan jasa pengacara dan biaya-biaya lainnya) yang timbul dari atau berkaitan dengan pelanggaran Anda atas Syarat dan Ketentuan ini, penggunaan Anda atas Situs ini, atau pelanggaran Anda terhadap hak-hak pihak ketiga.</p>
                <h5>Upaya Hukum untuk Pelanggaran</h5>
                <p>Grup berhak menempuh segala upaya yang tersedia secara hukum dan untuk keadilan atas pelanggaran Syarat dan Ketentuan ini, termasuk, tetapi tidak terbatas pada, hak untuk menutup akses dari alamat IP tertentu.</p>
                <h5>Masukan dan Usulan lainnya</h5>
                <p>Seluruh masukan, gagasan, atau usulan lain yang Anda berikan lewat Situs ini akan dianggap sebagai bukan rahasia dan bukan merupakan hak milik serta dapat diungkapkan atau digunakan oleh Grup untuk keperluan apa pun, tanpa ada kewajiban untuk memberikan ganti rugi. Seluruh data pribadi yang diberikan kepada Grup akan ditangani sesuai dengan Kebijakan Privasi kami.</p>
                <h5>Undang-Undang yang Berlaku</h5>
                <p>Situs ini dan Kontennya ditampilkan hanya untuk kepentingan promosi layanan yang disediakan oleh Grup. Situs ini dikelola dan dioperasikan oleh Grup dari kantor-kantornya di Swiss. Anda wajib mematuhi undang-undang yang berlaku di yurisdiksi tempat Anda mengakses Situs ini, dan Anda setuju untuk tidak mengakses atau menggunakan informasi di dalam Situs secara menyimpang dari undang-undang tersebut. Syarat dan Ketentuan serta penggunaan Anda atas Situs ini akan diatur oleh hukum substantif Swiss, dengan mengesampingkan peraturan hukum perdata internasional Swiss dan perjanjian internasional lainnya, khususnya Konvensi Wina tentang Jual Beli Barang Internasional tanggal 11 April 1980. Tidak dijalankannya hak-hak kami sesuai Syarat dan Ketentuan ini bukan merupakan bentuk pengesampingan syarat dan ketentuan apa pun di dalam Syarat dan Ketentuan ini.</p>
            </div>
        </div>
    </div>
</div>
@endsection
