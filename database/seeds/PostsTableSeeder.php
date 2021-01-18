<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = ['記事１','記事２','記事３','記事４','記事５'];
        foreach ($titles as $title)
        {
            DB::table('title')->insert('title');
        }
    }
}
