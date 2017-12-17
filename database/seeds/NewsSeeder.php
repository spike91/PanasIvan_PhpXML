<?php

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            'title'=> 'Trilobites: An 8th Planet Is Found Orbiting a Distant Star, With A.I.’s Help',
            'description'=> 'A comparison of planets in our own solar system, bottom, with planets observed circling Kepler 90, a star more than 2,000 light-years from Earth. Scientists using artificial intelligence supplied by Google researchers just detected an eighth planet orbiting the star.',
            'pubDate'=>new DateTime('now'),
            'id_category'=> 1,
            'link'=>'https://www.nytimes.com/2017/12/14/science/eight-planets-star-system.html',
            'id_user' => 1
            ]);
    }
}
