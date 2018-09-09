<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default = new App\Admin;
        $default->name = 'Rafael';
        $default->lastname = 'Cardoso';
        $default->email = 'rafael@rafaelweb.com.br';
        $default->password = bcrypt('secret');
        $default->remember_token = str_random(10);
        $default->save();

        $default = new App\Admin;
        $default->name = 'Erick';
        $default->lastname = 'Firmo';
        $default->email = 'erick.firmo@rafaelweb.com.br';
        $default->password = bcrypt('secret');
        $default->remember_token = str_random(10);
        $default->save();

        $default = new App\Admin;
        $default->name = 'Richard';
        $default->lastname = 'Manzoli';
        $default->email = 'richard@rafaelweb.com.br';
        $default->password = bcrypt('secret');
        $default->remember_token = str_random(10);
        $default->save();

        factory(App\Admin::class, rand(5, 15))->create();
    }
}
