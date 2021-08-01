<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'user1', 
            'email' => 'user1@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    

     
        $permissions = Permission::pluck('id','id')->all();
   
        $user->givePermissionTo($permissions);
    }
}
