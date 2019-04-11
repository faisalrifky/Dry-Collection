<?php

use Illuminate\Database\Seeder;
use App\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kat1 =new Kategori();
        $kat1->nama_kategori = "Tas Ransel";
        $kat1->deskripsi = "Tas Ransel ini dapat digunakan untuk banyak macam pilihan kebutuhan seperti tas ransel sekolah, tas seminar, tas pelatihan, tas kerja, tas travel, tas backpack dan untuk kebutuhan lainnya.";
        $kat1->save();

        $kat2 =new Kategori();
        $kat2->nama_kategori = "Tas Kantor";
        $kat2->deskripsi = "Tas Kantor seperti ini tentunya untuk kebutuhan tas kantor, akan tetapi dapat digunakan untuk tempat penyimpanan laptop atau buku dalam jumlah yang banyak.";
        $kat2->save();

        $kat3 =new Kategori();
        $kat3->nama_kategori = "Tas Selempang";
        $kat3->deskripsi = "-";
        $kat3->save(); 

        $kat3 =new Kategori();
        $kat3->nama_kategori = "Tas Kulit Asli";
        $kat3->deskripsi = "Tas Kulit Asli merupakan jenis tas yang dibuat 100% kulit asli seperti yang biasa menggunakan kulit domba atau kulit sapi, tas jenis ini kebanyakan dipakai untuk kebutuhan bepergian.";
        $kat3->save();

        $kat4 =new Kategori();
        $kat4->nama_kategori = "Tas Goodie Bag";
        $kat4->deskripsi = "Goodie Bag biasanya digunakan untuk kegiatan syukuran seperti tas ulang tahun, tas pernikahan, tas khitanan, atau kebutuhan lainnya yang bersifat acara keluarga.";
        $kat4->save();



       
    }
}
