<?php

namespace Database\Seeders;

use App\Models\Published;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublishedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $published = new Published();
        $published->author = 'Rick Riordan';
        $published->year_published = '2005';
        $published->publishedable_id = 1;
        $published->publishedable_type = 'App\Models\Book';
        $published->save();

        $published = new Published();
        $published->author = 'Song Ji A';
        $published->year_published = '2022';
        $published->publishedable_id = 2;
        $published->publishedable_type = 'App\Models\Comic';
        $published->save();

        $published = new Published();
        $published->author = 'Veronica Roth';
        $published->year_published = '2005';
        $published->publishedable_id = 3;
        $published->publishedable_type = 'App\Models\Book';
        $published->save();

        $published = new Published();
        $published->author = 'Suzanne Collins';
        $published->year_published = '2012';
        $published->publishedable_id = 4;
        $published->publishedable_type = 'App\Models\Book';
        $published->save();

        $published = new Published();
        $published->author = 'Sana';
        $published->year_published = '2013';
        $published->publishedable_id = 5;
        $published->publishedable_type = 'App\Models\Comic';
        $published->save();
    }
}
