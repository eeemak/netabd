<?php

use Illuminate\Database\Seeder;
use App\Model\PostType;

class PostTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostType::insert([
            ['name'=> 'news'],
            ['name'=> 'motamot']
         ]);
    }
}
