<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        // ... Some Truncate Query
        DB::table('permissions')->truncate();
        Schema::enableForeignKeyConstraints();

        $permissions = array(
            array('name' => 'dashboard','guard_name' => 'web'),
            array('name' => 'users.index','guard_name' => 'web'),
            array('name' => 'users.show','guard_name' => 'web'),
            array('name' => 'users.edit','guard_name' => 'web'),
            array('name' => 'users.create','guard_name' => 'web'),
            array('name' => 'users.store','guard_name' => 'web'),
            array('name' => 'users.update','guard_name' => 'web',),
            array('name' => 'users.destroy','guard_name' => 'web'),

            array('name' => 'roles.index','guard_name' => 'web'),
            array('name' => 'roles.edit','guard_name' => 'web'),
            array('name' => 'roles.create','guard_name' => 'web'),
            array('name' => 'roles.show','guard_name' => 'web'),
            array('name' => 'roles.store','guard_name' => 'web'),
            array('name' => 'roles.update','guard_name' => 'web'),
            array('name' => 'roles.destroy','guard_name' => 'web'),

            array('name' => 'permissions.index','guard_name' => 'web'),
            array('name' => 'permissions.edit','guard_name' => 'web'),
            array('name' => 'permissions.create','guard_name' => 'web'),
            array('name' => 'permissions.show','guard_name' => 'web'),
            array('name' => 'permissions.store','guard_name' => 'web'),
            array('name' => 'permissions.update','guard_name' => 'web'),
            array('name' => 'permissions.destroy','guard_name' => 'web'),

        );

        DB::table('permissions')->insert($permissions);
    }
}
