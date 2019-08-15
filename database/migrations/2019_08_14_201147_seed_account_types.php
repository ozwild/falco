<?php

use App\AccountType;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedAccountTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
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
