<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            [
                'name' => 'bukune',
                'address' => 'Jalan - jalan sore di pagi hari',
                'phone' => '08211433333',
                'email' => 'carbonara@gmail.com',
                'image' => 'https://www.adobe.com/express/create/cover/media_178ebed46ae02d6f3284c7886e9b28c5bb9046a02.jpeg?width=400&format=jpeg&optimize=medium'

            ],
            [
                'name' => 'Erlangga',
                'address' => 'Jalan - jalan sore di pagi hari',
                'phone' => '08211433333',
                'email' => 'carbonara@gmail.com',
                'image' => 'https://d1csarkz8obe9u.cloudfront.net/posterpreviews/yellow-business-leadership-book-cover-design-template-dce2f5568638ad4643ccb9e725e5d6ff.jpg?ts=1637017516'

            ],
            [
                'name' => 'Deepublish',
                'address' => 'Jalan - jalan sore di pagi hari',
                'phone' => '08211433333',
                'email' => 'carbonara@gmail.com',
                'image' => 'https://edit.org/photos/images/cat/book-covers-big-2019101610.jpg-1300.jpg'

            ],
            [
                'name' => 'Mitra Pemuda',
                'address' => 'Jalan - jalan sore di pagi hari',
                'phone' => '08211433333',
                'email' => 'carbonara@gmail.com',
                'image' => 'https://pub-static.fotor.com/assets/projects/pages/dddda0b59fb9433eb53e7174981c8b67/blue-minimal-novel-cover-6e355184dc3545c6bec6a9f618f83e0d.jpg'

            ],
        ]);
    }
}
