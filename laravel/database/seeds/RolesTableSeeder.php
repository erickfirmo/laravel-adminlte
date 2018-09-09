<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['nome' => 'Super Admin', 'slug' => 'super-admin', 'descricao' => 'You have total access.'],
            ['nome' => 'Employee', 'slug' => 'employee', 'descricao' => 'You have restrict access.'],
            ['nome' => 'Marketing', 'slug' => 'marketing', 'descricao' => 'You can send email marketing and preview the newslatters.'],
            ['nome' => 'Financial', 'slug' => 'financial', 'descricao' => 'You can get access to main operational sector business finances.'],
        ];

        foreach ($roles as $role)
        {
            App\Role::create($role);
        }
    }
}
