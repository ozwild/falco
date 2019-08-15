<?php

use App\Account;
use App\Listing;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;

class AccountListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $now = Carbon::now()->toDateTimeString();

        Listing::all()
            ->map(function (Listing $listing) use ($now) {

                collect()
                    ->pad(mt_rand(10, 20), null)
                    ->map(function () use ($listing, $now) {

                        $account_id = DB::table("accounts")
                            ->inRandomOrder()->first()->id;

                        DB::table('account_listings')->updateOrInsert([
                            "listing_id" => $listing->id,
                            "account_id" => $account_id,
                            "created_at" => $now,
                            "updated_at" => $now
                        ]);

                    });

            });

    }
}
