<?php

use Illuminate\Database\Seeder;

class PlayersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Team::all()->each(function (App\Team $t){
            $t->player()->saveMany(factory(App\Player::class, 10)->make());
        });
    }
}
