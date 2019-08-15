<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this
            ->call(RootUserSeeder::class)
            ->call(UserSeeder::class)
            ->call(AccountSeeder::class)
            ->call(ScoresSeeder::class)
            ->call(AccountManagersSeeder::class)
            ->call(LocationSeeder::class)
            ->call(AboutSeeder::class)
            ->call(AccountListingSeeder::class);
    }
}
