<?php

use App\Account;
use App\About;
use App\User;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
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

        $inserts = DB::table('accounts')->get()
            ->map(function ($accountData) use ($faker, $now) {

                $aboutDataHeader = "<h5>{$accountData->name} {$faker->words(mt_rand(3,6),true)} </h5>";

                $aboutDataParagraphs = collect($faker->paragraphs(mt_rand(2, 4)))
                    ->map(function($paragraph){
                        return "<p>$paragraph</p>";
                    })->implode("");

                return [
                    "about" => $aboutDataHeader.$aboutDataParagraphs,
                    "aboutable_id" => $accountData->id,
                    "aboutable_type" => Account::class,
                    "created_at" => $now,
                    "updated_at" => $now
                ];
            });

        About::insert($inserts->toArray());

        $inserts = DB::table('users')->get()
            ->map(function ($userData) use ($faker, $now) {

                $aboutDataParagraphs = collect($faker->paragraphs(mt_rand(2, 4)))
                    ->map(function($paragraph){
                        return "<p>$paragraph</p>";
                    })->implode("");

                return [
                    "about" => $aboutDataParagraphs,
                    "aboutable_id" => $userData->id,
                    "aboutable_type" => User::class,
                    "created_at" => $now,
                    "updated_at" => $now
                ];
            });

        About::insert($inserts->toArray());

    }
}
