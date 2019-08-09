<?php

use App\Account;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ScoresSeeder extends Seeder
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

        collect()
            ->pad(250, null)
            ->map(function () use ($faker, $now) {

                $account = Account::inRandomOrder()->first();
                $account_id = $account->id;

                $reviewer_id = DB::table('users')
                    ->inRandomOrder()->first()->id;

                DB::table('scores')->updateOrInsert([
                    "reviewer_id" => $reviewer_id,
                    "account_id" => $account_id
                ], [
                    "score" => mt_rand(1, 10),
                    "created_at" => $now,
                    "updated_at" => $now
                ]);

                if (mt_rand(0, 1)) {

                    DB::table('reviews')->updateOrInsert([
                        "reviewer_id" => $reviewer_id,
                        "account_id" => $account_id
                    ], [
                        "review" => $faker->paragraphs(3, true),
                        "created_at" => $now,
                        "updated_at" => $now
                    ]);

                }

                $account->updateRating();

            });

    }
}
