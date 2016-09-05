<?php

use Illuminate\Database\Seeder;
use App\role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user_role=new role();
      $user_role->name='user';
      $user_role->description='A normal user';
      $user_role->save();
        
        $admin_role=new role();
        $admin_role->name='admin';
        $admin_role->description='A system Administrator';
        $admin_role->save();
        
        $burser_role=new role();
        $burser_role->name='burser';
        $burser_role->description='A college burser';
        $burser_role->save();
    }
}
