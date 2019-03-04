<?php

use Illuminate\Database\Seeder;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = ['Los Angeles Lakers', 'Chicago Bulls','Atlanta Hawks','Indiana Pacers','Boston Celtics'];
        foreach($teams as $team){
            factory(App\Team::class,1)->create([
                'name'=>$team
            ]);
        }
    }
}
