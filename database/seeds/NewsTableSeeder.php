<?php

use Illuminate\Database\Seeder;



class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(NewsTableSeeder::class);
        factory(App\News::class,100)->make();
    }
}
