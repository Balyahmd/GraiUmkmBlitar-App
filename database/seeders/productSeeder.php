<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\product;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        DB::table('product')->insert([
            'nama_product' => 'Kopi Al - Jaidi',
            'harga_product' => '60.000',
            'deskripsi_product' => 'kopi rempah al jaidi terbuat dari bahan alami',
            'Alamat' => 'Rumah BUMN Blitar,Kota Blitar,Jawa Timur',
            'img_url_product' => 'https://assets2.rumah-bumn.id/produk/product-16493866033592.JPG',
            'created_at' => new \DateTime,
            'updated_at' => new \DateTime,
        ]);

        DB::table('product')->insert([
            'nama_product' => 'Kopi Robusta Anjasmoro',
            'harga_product' => '15.000',
            'deskripsi_product' => 'Kopi Robusta Anjasmoro Netto : 100 gr Jenis kopi : Robusta Ground : Medium Ketinggian : 400 - 1000 mdpl Bentuk : Bubuk Kondisi : Baru',
            'Alamat' => 'Rumah BUMN Blitar,Kota Blitar,Jawa Timur',
            'img_url_product' => 'https://assets2.rumah-bumn.id/produk/product-16195921508750.jpeg',
            'created_at' => new \DateTime,
            'updated_at' => new \DateTime,
        ]);

        DB::table('product')->insert([
            'nama_product' => 'Tas Kombinasi Batik',
            'harga_product' => '70.000',
            'deskripsi_product' => 'Tas Kombinasi Batik Kondisi : Baru Bentuk : Bulat sling bag Berat : 500 gr Diameter : 14 cm',
            'Alamat' => 'Rumah BUMN Blitar,Kota Blitar,Jawa Timur',
            'img_url_product' => 'https://assets2.rumah-bumn.id/produk/product-16195924373850.JPG',
            'created_at' => new \DateTime,
            'updated_at' => new \DateTime,
        ]);

        DB::table('product')->insert([
            'nama_product' => 'Keripik Pare Pak Jo',
            'harga_product' => '10.000',
            'deskripsi_product' => 'Keripik Pare Pak Jo: Komposisi : Pare, tepung terigu, minyak nabati, penyedap rasa Netto : 100 gram Expired : 3 bulan sejak produksi',
            'Alamat' => 'Rumah BUMN Blitar,Kota Blitar,Jawa Timur',
            'img_url_product' => 'https://assets2.rumah-bumn.id/produk/product-16221864723859.JPG',
            'created_at' => new \DateTime,
            'updated_at' => new \DateTime,
        ]);

        DB::table('product')->insert([
            'nama_product' => 'Keripik Pare Krezz',
            'harga_product' => '12.000',
            'deskripsi_product' => 'Keripik Pare Krezz : Komposisi : Pare, tepung terigu, penyedap rasa, minyak nabati Netto : 200 gr Expire : 3 bulan sejak produksi',
            'Alamat' => 'Rumah BUMN Blitar,Kota Blitar,Jawa Timur',
            'img_url_product' => 'https://assets2.rumah-bumn.id/produk/product-16221838921335.JPG',
            'created_at' => new \DateTime,
            'updated_at' => new \DateTime,
        ]);

        DB::table('product')->insert([
            'nama_product' => 'Keripik Pare Krezz',
            'harga_product' => '12.000',
            'deskripsi_product' => 'Keripik Pare Krezz : Komposisi : Pare, tepung terigu, penyedap rasa, minyak nabati Netto : 200 gr Expire : 3 bulan sejak produksi',
            'Alamat' => 'Rumah BUMN Blitar,Kota Blitar,Jawa Timur',
            'img_url_product' => 'https://assets2.rumah-bumn.id/produk/product-16221838921335.JPG',
            'created_at' => new \DateTime,
            'updated_at' => new \DateTime,
        ]);

        DB::table('product')->insert([
            'nama_product' => 'Susu Kurma',
            'harga_product' => '10.000',
            'deskripsi_product' => 'Susu Kurma: Netto : 200 ml Komposisi : susu sapi segar dan kurma Packing : botol plastik',
            'Alamat' => 'Rumah BUMN Blitar,Kota Blitar,Jawa Timur',
            'img_url_product' => 'https://assets2.rumah-bumn.id/produk/product-16195907443665.jpeg',
            'created_at' => new \DateTime,
            'updated_at' => new \DateTime,
        ]);

        DB::table('product')->insert([
            'nama_product' => 'Sambel Pecel Blitar',
            'harga_product' => '35.000',
            'deskripsi_product' => 'Sambel Pecel Blitar terbuat dari bahan - bahan pilihan dan rempah - rempah segar, sehingga rasanya dijamin nikmat dan istimewa. Sambel pecel Blitar mampu bertahan selama satu tahun dan tanpa bahan pengawet.',
            'Alamat' => 'Rumah BUMN Blitar,Kota Blitar,Jawa Timur',
            'img_url_product' => 'https://assets2.rumah-bumn.id/produk/product-16170721733080.jpeg',
            'created_at' => new \DateTime,
            'updated_at' => new \DateTime,
        ]);

        DB::table('product')->insert([
            'nama_product' => 'Jappanese Cake Roll',
            'harga_product' => '35.000',
            'deskripsi_product' => 'Jappanese Cake Roll terbuat dari bahan pilihan dan resep khusus, sehingga rasanya dijamin enak dan teksturnya lembut. Cake ini sangat cocok untuk dijadikan suguhan maupun souvenir..',
            'Alamat' => 'Nuka Bakery',
            'img_url_product' => 'https://assets2.rumah-bumn.id/produk/product-16168995994360.jpeg',
            'created_at' => new \DateTime,
            'updated_at' => new \DateTime,
        ]);

        DB::table('product')->insert([
            'nama_product' => 'Batik Ecoprint',
            'harga_product' => '100.000',
            'deskripsi_product' => 'Batik ecoprint adalah teknik memberi warna dan corak (motif) pada kain, kulit atau bahan lainnya dengan menggunakan bahan alami. Bahan alami yang umum digunakan dalam ecoprint berasal dari tanaman yang meliputi beragam jenis daun, bunga, kayu, atau bagian tanaman lainnya yang memiliki corak dan warna yang khas.',
            'Alamat' => 'Rumah BUMN Blitar,Kota Blitar,Jawa Timur',
            'img_url_product' => 'https://assets2.rumah-bumn.id/produk/product-16031754922206.jpeg',
            'created_at' => new \DateTime,
            'updated_at' => new \DateTime,
        ]);
    }
}
