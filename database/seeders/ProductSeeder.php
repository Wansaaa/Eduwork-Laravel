<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('products')->insert([
            [
                'name'=> 'Iphone',
                'description'=> 'Smartphone',
                'price'=> 1000000,
                'stock'=> 10,
                'image'=> 'https://www.digimap.co.id/cdn/shop/files/0788-APPMYEA3ID-A-1.jpg?v=1734067560&width=1445',
                'product_category_id'=> 1,
            ],
            [
                'name'=> 'Buku belajar laravel',
                'description'=> 'Buku tentang laravel',
                'price'=> 100000,
                'stock'=> 20,
                'image'=> 'https://www.malasngoding.com/wp-content/uploads/2020/02/Ebook-Panduan-Lengkap-Laravel-Untuk-Pemula-Dari-Dasar-Sampai-Membuat-Aplikasi-Keuangan.png',
                'product_category_id'=> 2,
            ],
            [
                'name'=> 'Bakso Merapi',
                'description'=> 'Bakso super besar',
                'price'=> 200000,
                'stock'=> 5,
                'image'=> 'https://awsimages.detik.net.id/community/media/visual/2022/04/19/bakso-gunung-merapi-dan-mie-ayam-brutal-di-kulon-progo-2_169.jpeg?w=1200',
                'product_category_id'=> 3,
            ],
        ]);
    }
}
