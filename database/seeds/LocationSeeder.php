<?php

use Carbon\Carbon;
use Faker\Factory;
use App\Account;
use App\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regionsJSONString = file_get_contents(base_path('public/assets/cities.json'));
        $regions =  collect(json_decode($regionsJSONString, true));

        $now = Carbon::now()->toDateTimeString();

        $inserts = DB::table('accounts')->pluck('id')
            ->map(function ($id) use ($now, $regions) {

                $longitude = mt_rand(892169, 905869) / 10000 * -1;
                $latitude = mt_rand(136949, 148349) / 10000;

                $coordinates = json_encode([$longitude, $latitude]);
                $region = $regions->random(1)->first();

                return [
                    "description" => "{$region["City"]}, {$region["State"]}",
                    "work_radius" => mt_rand(1, 12),
                    "travel_radius" => mt_rand(12, 60),
                    "account_id" => $id,
                    "coordinates" => $coordinates,
                    "created_at" => $now,
                    "updated_at" => $now
                ];

            });

        Location::insert($inserts->toArray());

    }
}
