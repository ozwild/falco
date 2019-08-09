<?php

use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\QueryException;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $now = Carbon::now()->toDateTimeString();

        $accountTitles = collect([
            "Music Band",
            "Rock Band",
            "Guitarist and Singer",
            "String Quartet",
            "Cover Band",
            "Amazing Duo",
            "Hype-man & DJ",
            "Classical Band",
            "Magician",
            "Entertainers",
            "The Entertainer"
        ]);

        StartOver:

        $inserts = collect()
            ->pad(30, null)
            ->reduce(function ($reduction) use ($faker, $now, $accountTitles) {

                $type_id = DB::table("account_types")
                    ->inRandomOrder()->first()->id;

                return array_merge($reduction, [
                    [
                        "name" => $faker->company,
                        "description" => $faker->paragraphs(mt_rand(2, 3), true),
                        "title" => $accountTitles->random(1)->first(),
                        "email" => $faker->companyEmail,
                        "type_id" => $type_id,
                        "active" => mt_rand(0, 1),
                        "published" => mt_rand(0, 1),
                        "views" => random_int(0, 5000),
                        "created_at" => $now,
                        "updated_at" => $now
                    ]
                ]);

            }, []);

        try {
            DB::table('accounts')->insert($inserts);
        } catch (QueryException $exception) {
            if (Str::contains($exception->getMessage(), "Integrity constraint violation")) {
                goto StartOver;
            }
        }


    }
}
