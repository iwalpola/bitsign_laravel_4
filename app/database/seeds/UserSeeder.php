<?php
 
class UserSeeder
  extends DatabaseSeeder
{
  public function run()
  {
    $users = [
      [
        "username" => "iwalpola",
        "f_name" => "Isuru",
        "l_name" => "Walpola",
        "password" => Hash::make("pussy"),
        "email"    => "iwalpola@gmail.com"
      ]
    ];
  
    foreach ($users as $user) {
      User::create($user);
    }
  }
}