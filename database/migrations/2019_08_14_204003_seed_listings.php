<?php

use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Migrations\Migration;

class SeedListings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $faker = Factory::create();
        $now = Carbon::now()->toDateTimeString();

        $inserts = collect([
            "Rock",
            "Pop",
            "Weddings",
            "Bar"
        ])->reduce(function ($reduction, $listingName) use ($faker, $now) {

            return array_merge($reduction, [
                [
                    "name" => $listingName,
                    "description" => $faker->text,
                    "created_at" => $now,
                    "updated_at" => $now
                ]
            ]);

        }, []);

        DB::table('listings')->insert($inserts);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
