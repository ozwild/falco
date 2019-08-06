<?php

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Faker\Factory;
use Illuminate\Database\Seeder;

class AccountManagersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $now = Carbon::now()->toDateTimeString();

        $userIds = DB::table('users')->pluck('id');

        $accountIds = DB::table('accounts')
            ->pluck('id');

        $inserts = $accountIds
            ->reduce(function ($reduction, $accountId) use ($userIds, $now) {

                $userIds->random(mt_rand(1, 6))
                    ->each(function ($userId) use ($accountId, $now, &$reduction) {

                        array_push($reduction, [
                            "user_id" => $userId,
                            "account_id" => $accountId,
                            "created_at" => $now,
                            "updated_at" => $now
                        ]);

                    });

                return $reduction;

            }, []);

        DB::table('account_managers')->insert($inserts);

    }
}
