<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Faker\Factory;
use App\User;

class UserSeeder extends Seeder
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
        $commonPassword = Hash::make('123456789');

        $inserts = collect()
            ->pad(250, null)
            ->reduce(function ($reduction) use ($faker, $now, $commonPassword) {

                return array_merge($reduction, [
                    [
                        "first_name" => $faker->firstName,
                        "last_name" => $faker->lastName,
                        "email" => $faker->email,
                        "password" => $commonPassword,
                        "created_at" => $now,
                        "updated_at" => $now
                    ]
                ]);

            }, []);

        DB::table('users')->insert($inserts);

    }
}
