<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //Membuat role Admin
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        //Membuat role Member
        $memberRole = new Role();
        $memberRole->name = "member";
        $memberRole->display_name = "Member";
        $memberRole->save();

        //Membuat sample Admin
        $admin = new User();
        $admin->name = 'Admin Larapus';
        $admin->email = 'admin@email.com';
        $admin->password = bcrypt('rahasia');
        $admin->save();
        $admin->attachRole($adminRole);

        //Membuat sample Member
        $member = new User();
        $member->name = 'Sample Member';
        $member->email = 'member@email.com';
        $member->password = bcrypt('rahasia');
        $member->save();
        $member->attachRole($memberRole);
    }
}
