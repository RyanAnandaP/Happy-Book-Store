<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'publisher_id' => '0001',
                'title' => 'Lunar Storm',
                'author' => 'Terry Crosby',
                'year' => '2018',
                'synopsis' => 'Merupakan Perjalanan hidup si madun yang dimulai dari menjadi orang miskin ke orang kaya',
                'image' => 'https://1.bp.blogspot.com/-b0uwppp7MRw/W1wZmZm39FI/AAAAAAAACaE/rIvEbRBUBQUTCbQJLtCiOT_UjRdnrKFwgCLcBGAs/s640/Logo%2BAlamat%2BPenerbit%2BErlangga.jpg'
            ],
            [
                'publisher_id' => '0002',
                'title' => 'The mind of a leader',
                'author' => 'Kevin Anderson',
                'year' => '2019',
                'synopsis' => 'Andre yang merupakan pedagang kaki lima memulai hidupnya di jakarta sebagai kurir barang. Namun, kehidupan tidak berjalan semuilus yang ia kira dikarenakan banyaknya cobaan yang berat selama di perjalanan',
                'image' => 'https://www.literamediatama.com/wp-content/uploads/2016/12/16-gramedia-litera-titik-koma-malang.jpg'
            ],
            [
                'publisher_id' => '0003',
                'title' => 'The Witcher',
                'author' => 'Suprapto M. Fajar',
                'year' => '2019',
                'synopsis' => 'Geralt merupakan manusia yang lahir dari seorang penyihir bernama Visenna.',
                'image' => 'https://www.literamediatama.com/wp-content/uploads/2019/12/cropped-litera-media-tama-logo-250-1700.png'
            ],
            [
                'publisher_id' => '0004',
                'title' => 'Summer Holiday',
                'author' => 'Lily Smith',
                'year' => '2020',
                'synopsis' => 'Apa lagi yang kurang dalam hidup Cinta? Ia punya keluarga yang bahagia, popularitas di sekolah, banyak pengagum, dan yang paling penting, ia punya sahabat-sahabatnya. Alya, Maura, Milly, dan Karmen membuat hari-harinya selalu berwarna.',
                'image' => 'https://www.literamediatama.com/wp-content/uploads/2019/12/cropped-litera-media-tama-logo-250-1700.png'
            ],
            [
                'publisher_id' => '0005',
                'title' => 'The Hypocrite World',
                'author' => 'Pierre Markus',
                'year' => '2020',
                'synopsis' => 'Apa lagi yang kurang dalam hidup Cinta? Ia punya keluarga yang bahagia, popularitas di sekolah, banyak pengagum, dan yang paling penting, ia punya sahabat-sahabatnya. Alya, Maura, Milly, dan Karmen membuat hari-harinya selalu berwarna.',
                'image' => 'https://www.literamediatama.com/wp-content/uploads/2019/12/cropped-litera-media-tama-logo-250-1700.png'
            ],
        ]);
    }
}
