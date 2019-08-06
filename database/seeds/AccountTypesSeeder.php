<?php

use App\AccountType;
use Illuminate\Database\Seeder;

class AccountTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        collect([
            "Performer",
            "Band",
            "Musician",
            "Singer"
        ])->map(function ($type) {
            return AccountType::create([
                "type"=>$type
            ]);
        });
    }
}
