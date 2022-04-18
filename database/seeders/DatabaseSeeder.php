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
        App\Models\Project::create([
            'title' => 'Iglesia Vertical Barranquilla',
            'url' => 'iglesia_vertical_barranquilla',
            'description' => 'Iglesia vertical barranquilla es un proyecto creado plenamente en HTML5,CSS3,JS, PHP, Bootstrap'
        ]);
        App\Models\Project::create([
            'title' => 'Intranet Montechelo',
            'url' => 'intranet_montechelo',
            'description' => 'Intranet Montechelo es una plataforma hecha para la empresa Montechelo, blah blah'
        ]);

        App\Models\User::create([
            'name' => 'Kevin Ceferino',
            'email' => 'kevin@test.com',
            'password' => bcrypt('159753')
        ]);
    }
}
