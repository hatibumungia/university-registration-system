<?php

use Illuminate\Database\Seeder;
use App\User;
use App\role;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $user_role=role::where('name','user')->first();
         $admin_role=role::where('name','admin')->first();
         $burser_role=role::where('name','burser')->first();
        
       $user=new User();
       $user->name='Hatibu Mungia';
       $user->email='mungia@gmail.com';
       $user->password=bcrypt('123456');
       $user->save();
       $user->roles()->attach($user_role);
        
    $admin=new User();
    $admin->name='Michael justas';
    $admin->email='crshemu@gmail.com';
    $admin->password=bcrypt('123456');
    $admin->save();
    $admin->roles()->attach($admin_role);
        
    $burser=new User();
    $burser->name='Khadija Omary';
    $burser->email='didaomary@gmail.com';
    $burser->password=bcrypt('123456');
    $burser->save();
     $burser->roles()->attach($burser_role);
    }
}
