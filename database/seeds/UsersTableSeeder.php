<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = new User;
      $user->name='Birute';
      $user->email='Birute@gmail.lt';
      $user->password= Hash::make('birute123');

      $user->save();
    }
}
