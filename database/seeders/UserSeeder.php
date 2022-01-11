<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create ([
            'name' => 'admin',
            'display_name' => 'Izin Admin',
        ]);
        $pengguna = Role::create ([
            'name' => 'pengguna',
            'display_name' => 'Izin Pengguna',
        ]);


        $kasir = Role::create([
            'name' => 'kasir',
            'display_name' => 'Izin kasir',
        ]);
        $useradmin = new User();
        $useradmin->name = 'Sila Ramadina';
        $useradmin->email = 'sila@gmail.com';
        $useradmin->password = Hash::make('12345678');
        $useradmin->save();
        $useradmin->attachRole($admin);

        $userPengguna = new User();
        $userPengguna->name = 'adzura';
        $userPengguna->email = 'adzura@gmail.com';
        $userPengguna->password = Hash::make('12345678');
        $userPengguna->save();
        $userPengguna->attachRole($pengguna);

        $userKasir1 = new User();
        $userKasir1->name = 'riva';
        $userKasir1->email = 'riva@gmail.com';
        $userKasir1->password = Hash::make('12345678');
        $userKasir1->save();
        $userKasir1->attachRole($kasir);

        $userKasir2 = new User();
        $userKasir2->name = 'aldi';
        $userKasir2->email = 'aldi@gmail.com';
        $userKasir2->password = Hash::make('12345678');
        $userKasir2->save();
        $userKasir2->attachRole($kasir);
    }
}
