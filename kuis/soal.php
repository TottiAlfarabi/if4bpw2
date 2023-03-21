<?php

require('testing.php');
// Kuis Pemrograman Web II - IF4B
// ==============================
// Mahasiswa diizinkan mengakses dokumentasi seperti php.net, w3schools, bootstrap, repository github pw2 mahasiswa
// Mahasista TIDAK diizinkan mengakses ChatGPT untuk menyelesaikan soal kuis ini

// ==========================================================================================
// PERHATIAN
// ==========================================================================================
// 1. Berdoa terlebih dahulu agar diberi kemudahan dalam menjawab soal
// 2. Percaya diri dengan kemampuan yang dimiliki dalam menjawab soal
// 3. Dilarang kerja sama, berbagi jawaban dengan peserta lain 
// 4. Buat folder "kuis" di dalam folder htdocs
// 5. RENAME soal.txt menjadi soal.php dan simpan di dalam folder "kuis"
// 6. Setelah selesai menjawab atau waktu habis, silakan zip folder "kuis" dan upload ke SPON
// ==========================================================================================

// soal 1 (5 poin)
// Buat sebuah function PHP yang menerima dua parameter angka dan mengembalikan hasil penjumlahan dari kedua angka tersebut?

// TULIS JAWABAN SOAL KE-1 DI BAWAH SINI YA (silakan ganti namaFunction)
// function ...

function penjumlahan($angka1, $angka2){
    $hasil = 0;
    $hasil = $angka1 + $angka2;
    return $hasil;
}


// ==========================================================================================

// soal 2 (15 poin)
// Buat function PHP yang menerima sebuah parameter tanggal dengan format YYYY-MM-DD dan mengembalikan tanggal dalam format Indonesia (Nama bulan dalam bahasa Indonesia: Januari, Februari, Maret, April, Mei, Juni, Juli, Agustus, September, Oktober, November, Desember)

// TULIS JAWABAN SOAL KE-2 DI BAWAH SINI YA (silakan ganti namaFunctionTgl)
// function ...

// Contoh penggunaan :
function getConvertTgl($date){
    $new_date = date('l, d F Y',strtotime($date));
    return $new_date;
}

// ==========================================================================================

// soal 3 (25 poin)
/*
a. Susun data mahasiswa di bawah ini ke dalam bentuk array asosiatif (multidimensi)

npm: 001
nama: ahmad
jk: L

npm: 001
nama: umar
jk: L

npm: 003
nama: aisyah
jk: P

b. Kemudian tampilkan data array menggunakan foreach ke dalam bentuk tabel dengan urutan kolom NPM | Nama Mahasiswa | Jenis Kelamin
c. Hitung jumlah mahasiswa laki-laki dan perempuan, kemudian tampilkan di bawah tabel 4.b (Gunakan variabel atau function untuk mendapatkan jumlah mahasiswa laki-laki dan perempuan)
*/

// TULIS JAWABAN SOAL KE-3 DI BAWAH SINI YA
// Buat array, tampilkan dalam bentuk tabel, jumlah mhs laki-laki dan jumlah mhs perempuan di bawah sini

$mahasiswa = [
    [
        'npm' => '001',
        'nama' => 'ahmad',
        'jk' => 'l'
    ],
    [
        'npm' => '002',
        'nama' => 'umar',
        'jk' => 'l'
    ],
    [
        'npm' => '003',
        'nama' => 'aisyah',
        'jk' => 'p'
    ]
    ];


 $jumlahLK = 0;
 $jumlahPR = 0;

foreach($mahasiswa as $data){
    echo $data['npm']."<br>".
        $data['nama']."<br>".
        $data['jk']."<br>";

        if($data['jk']== 'l'){
            $jumlahLK += 1;
        }
        else if($data['jk']=='p'){
             $jumlahPR += 1;
        }
        else{
            $jumlahLK = null;
        }

    
       
}

echo "jumlah Laki-Laki : ". $jumlahLK."<br>".
    "jumlah perempuan : ".$jumlahPR;


// ==========================================================================================

// soal 4 (35 poin)
/*
a. Susun data pegawai di bawah ini ke dalam bentuk array asosiatif (multidimensi)

kode: 001
nama_pegawai: alif
kode_jabatan: M

kode: 001
nama_pegawai: linus
kode_jabatan: WP

kode: 003
nama_pegawai: putra
kode_jabatan: MP

kode: 004
nama_pegawai: rizky
kode_jabatan: UIX

kode: 005
nama_pegawai: thomas
kode_jabatan: DB

b. Kemudian tampilkan data array menggunakan foreach ke dalam bentuk tabel dengan urutan kolom Kode | Nama Pegawai | Jabatan | Gaji
c. Tampilkan data pada kolom jabatan sesuai dengan ketentuan berikut ini:
    - M = Manager
    - WP = Web Programmer
    - MP = Mobile Programmer
    - UIX = UI/UX Designer
    - DB = Database Designer
d. Tampilkan data pada kolom gaji sesuai dengan ketentuan berikut ini: (Gunakan fungsi number_format() untuk mengubah format angka gaji dari 15000000 menjadi 15.000.000)
    - M = 15000000
    - WP = 10000000
    - MP = 10000000
    - UIX = 8000000
    - DB = 9000000
e. Hitung dan tampilkan total gaji semua pegawai yang harus dibayar perusahaan
*/
// TULIS JAWABAN SOAL KE-4 DI BAWAH SINI YA
$no = 1;
$pegawai = [
    [
        'kode' => '001',
        'nama_pegawai' => 'alif',
        'kode_jabatan' => 'M'
    ],
    [
        'kode' => '002',
        'nama_pegawai' => 'linus',
        'kode_jabatan' => 'WP'
    ],
      [
        'kode' => '003',
        'nama_pegawai' => 'putra',
        'kode_jabatan' => 'MP'
      ],
        [
        'kode' => '004',
        'nama_pegawai' => 'rizky',
        'kode_jabatan' => 'UIX'
        ],
          [
        'kode' => '005',
        'nama_pegawai' => 'thomas',
        'kode_jabatan' => 'DB'
    ]
    ];



    echo "<h1>PEGAWAI</h2>";

echo "</br><table border=1>
    <tr>
        <th> nomor </th>
        <th> kode</th>
        <th> NAma Pegawai </th>
        <th> Jabatan </th>
         <th> Gaji </th>
        
    </tr>";

   $total_gaji= 0;
    foreach($pegawai as $data){
         echo " <tr>
    <td>" . $no++ . "</td>
    <td>" . $data['kode'] . "</td>
    <td>" . $data['nama_pegawai'] . "</td>
     <td>" . getJabatan($data['kode_jabatan']). "</td>
    <td>" . number_format(getGaji($data['kode_jabatan'])) . "</tr>";
    
    $total_gaji += getGaji($data['kode_jabatan']);
    
    }

    echo "<tr><td colspan='4'>JUMLAH</td><td>".$total_gaji."</td></tr>";


// ==========================================================================================

// soal 5 (20 poin)
/* Buat class "Alumni" dengan atribut/property "npm", "nama", "tahun_lulus", dan "tahun_diterima_kerja". 
Buat juga method getInfo() yang mengembalikan (return) informasi alumni seperti npm, nama, tahun_lulus, tahun_diterima_kerja dan waktu_tunggu_kerja alumni tersebut. Waktu_tunggu_kerja didapat dari tahun_diterima_kerja - tahun_lulus */

// Buat class Alumni di bawah sini
// class ....


/* Buat objek alumni1, alumni2 dari class Alumni, kemudian isi semua atribut dari class Alumni */

// Buat objek alumni1, alumni2 di bawah sini
// $alumni1 ....

/* Tampilkan data alumni1 dan alumni2 dengan output sebagai berikut:
    Alumni ke-1
    NPM : ... 
    Nama Alumni : ... 
    Tahun Lulus : ...
    Tahun Diterima Kerja : ...
    Waktu Tunggu Kerja : ... tahun

    Alumni ke-2
    NPM : ... 
    Nama Alumni : ... 
    Tahun Lulus : ...
    Tahun Diterima Kerja : ...
    Waktu Tunggu Kerja : ... tahun
*/

// TULIS JAWABAN SOAL KE-5 DI BAWAH SINI YA

class Alumni{
    public $npm, $nama, $tahun_lulus, $tahun_diterima_kerja;


   function setNpm($val){
         $this->npm = $val;
    }

    function getNpm(){
            return $this->npm;
    }
    
       function setNama($val){
         $this->nama = $val;
    }

    function getNama(){
            return $this->nama;
    }

       function setTlulus($val){
         $this->tahun_lulus = $val;
    }

    function getTlulus(){
            return $this->tahun_lulus;
    }

    function setTahun_diterima_kerja($val){
         $this->tahun_diterima_kerja = $val;
    }
      function getTahun_diterima_kerja(){
            return $this->tahun_diterima_kerja;
    }

}

$alumni1 = new Alumni();
$alumni2 = new Alumni();


$alumni1->setNpm(2125250080);
$alumni1->setNama('totti');
$alumni1->setTlulus(2025);
$alumni1->setTahun_diterima_kerja(2027);

$alumni2->setNpm(2125240078);
$alumni2->setNama('deriger');
$alumni2->setTlulus(2023);
$alumni2->setTahun_diterima_kerja(2028);

echo "nama : ".$alumni1->getNama()."<br>npm : ".$alumni1->getNpm()."<br>tahun lulus : ".$alumni1->getTlulus()."<br>tahun diterima kerja : ".$alumni1->getTahun_diterima_kerja()."<br>tahun abdi : ".tahunAbdi($alumni1->getTahun_diterima_kerja(),$alumni1->getTlulus())." tahun<br><br>";
echo "nama : ".$alumni2->getNama()."<br>npm : ".$alumni2->getNpm()."<br>tahun lulus : ".$alumni2->getTlulus()."<br>tahun diterima kerja : ".$alumni2->getTahun_diterima_kerja()."<br>tahun abdi : ".tahunAbdi($alumni2->getTahun_diterima_kerja(),$alumni2->getTlulus())." tahun<br>";







// ==========================================================================================