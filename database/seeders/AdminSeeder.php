<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
     
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'SMB',
            'email' => 'smb@giantinflatables.in',
            'password' => Hash::make('SmbGIadmin1!'),
        ]);

        DB::table('admins')->insert([
            'name' => 'GIA Admin',
            'email' => 'admin@giantinflatables.in',
            'password' => Hash::make('KayP@1121!'),
        ]);

    }
}
