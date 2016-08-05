<?php

use Illuminate\Database\Seeder;

class AmenitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // 1
        DB::table('amenities')->insert([
                'name' => 'Amphitheater',
                'img' => 'img/amenities/amphitheater.jpg'
            ]);

        // 2
        DB::table('amenities')->insert([
                'name' => 'Archery',
                'img' => 'img/amenities/archery.jpg'
            ]);

        // 3
        DB::table('amenities')->insert([
                'name' => 'Ball Field',
                'img' => 'img/amenities/ballfield.jpg'
            ]);

        // 4
        DB::table('amenities')->insert([
                'name' => 'Basketball Court',
                'img' => 'img/amenities/basketball.jpg'
            ]);

        // 5
        DB::table('amenities')->insert([
                'name' => 'Boat Ramp',
                'img' => 'img/amenities/boatramp.jpg'
            ]);

        // 6
        DB::table('amenities')->insert([
                'name' => 'Community Center',
                'img' => 'img/amenities/comcenter.jpg'
            ]);

        // 7
        DB::table('amenities')->insert([
                'name' => 'Small Children Playground',
                'img' => 'img/amenities/smallplayground.jpg'
            ]);

        // 8
        DB::table('amenities')->insert([
                'name' => 'Disc Golf',
                'img' => 'img/amenities/discgolf.jpg'
            ]);

        // 9
        DB::table('amenities')->insert([
                'name' => 'Fishing',
                'img' => 'img/amenities/fishing.jpg'
            ]);

        // 10
        DB::table('amenities')->insert([
                'name' => 'Football Field',
                'img' => 'img/amenities/football.jpg'
            ]);

        // 11
        DB::table('amenities')->insert([
                'name' => 'Garden',
                'img' => 'img/amenities/garden.jpg'
            ]);

        // 12
        DB::table('amenities')->insert([
                'name' => 'Gazebo',
                'img' => 'img/amenities/gazebo.jpg'
            ]);

        // 13
        DB::table('amenities')->insert([
                'name' => 'Golf Course',
                'img' => 'img/amenities/golf.jpg'
            ]);

        // 14
        DB::table('amenities')->insert([
                'name' => 'Green Belt Access',
                'img' => 'img/amenities/greenbelt.jpg'
            ]);

        // 15
        DB::table('amenities')->insert([
                'name' => 'Grill',
                'img' => 'img/amenities/grill.jpg'
            ]);

        // 16
        DB::table('amenities')->insert([
                'name' => 'Hiking Trail',
                'img' => 'img/amenities/hiking.jpg'
            ]);

        // 17
        DB::table('amenities')->insert([
                'name' => 'Horseshoe Pit',
                'img' => 'img/amenities/horseshoes.jpg'
            ]);

        // 18
        DB::table('amenities')->insert([
                'name' => 'Mountain Biking',
                'img' => 'img/amenities/biking.jpg'
            ]);

        // 19
        DB::table('amenities')->insert([
                'name' => 'Pavillion',
                'img' => 'img/amenities/pavillion.jpg'
            ]);

        // 20
        DB::table('amenities')->insert([
                'name' => 'Picnic Shelter',
                'img' => 'img/amenities/picnicshelter.jpg'
            ]);

        // 21
        DB::table('amenities')->insert([
                'name' => 'Picnic Tables',
                'img' => 'img/amenities/picnictables.jpg'
            ]);

        // 22
        DB::table('amenities')->insert([
                'name' => 'Playground',
                'img' => 'img/amenities/playground.jpg'
            ]);

        // 23
        DB::table('amenities')->insert([
                'name' => 'Restrooms',
                'img' => 'img/amenities/restrooms.jpg'
            ]);

        // 24
        DB::table('amenities')->insert([
                'name' => 'Skate Park',
                'img' => 'img/amenities/skate.jpg'
            ]);

        // 25
        DB::table('amenities')->insert([
                'name' => 'Soccer Field',
                'img' => 'img/amenities/soccer.jpg'
            ]);

        // 26
        DB::table('amenities')->insert([
                'name' => 'Sprayground',
                'img' => 'img/amenities/sprayground.jpg'
            ]);

        // 27
        DB::table('amenities')->insert([
                'name' => 'Swimming Pool',
                'img' => 'img/amenities/pool.jpg'
            ]);

        // 28
        DB::table('amenities')->insert([
                'name' => 'Tennis Court',
                'img' => 'img/amenities/tennis.jpg'
            ]);

        // 29
        DB::table('amenities')->insert([
                'name' => 'Volleyball Court',
                'img' => 'img/amenities/volleyball.jpg'
            ]);

        // 30
        DB::table('amenities')->insert([
        		'name' => 'Walking Path',
                'img' => 'img/amenities/walkingpath.jpg'
        	]);
    }
}
