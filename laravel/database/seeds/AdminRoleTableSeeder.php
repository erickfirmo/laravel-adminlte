<?php

use Illuminate\Database\Seeder;

class AdminRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add Super Admin to default admin
        $default = App\Admin::first();
        $default->roles()->sync(1);
    
        $admins = App\Admin::where('id', '>', 1)->get();

        foreach ($admins as $admin)
        {
            $admin->roles()->sync(App\Role::inRandomOrder()->first()->id);
        }
    }
}
