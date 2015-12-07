<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Appointment;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
      
        $this->call(UserSeeder::class);
        $this->call(AppointmentSeeder::class);

        Model::reguard();
    }
}
class UserSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
       
        User::create([
            'id' => 1,
            'user_id' => "700633145",
            'name' => "Swathi",
            'email' => "swathi@gmail.com",
            'password' => bcrypt("123456"),

            ]);

        User::create([
            'id' => 2,
            'user_id' => "700621234",
            'name' => "Praneeth Prasad",
            'email' => "praneeth531@gmail.com",
            'password' => bcrypt("123456"),
            ]);
    }

}

class AppointmentSeeder extends Seeder {

    public function run()
    {
        DB::table('appointments')->delete();
       
        Appointment::create([
            'id' => 1,
            'date' => "9/3/2015",
            'time' => "8:00-10:00AM",
            'location' => "Warrensburg",

            ]);

        Appointment::create([
            'id' => 2,
            'date' => "4/3/2015",
            'time' => "9:00-10:00AM",
            'location' => "Lee Summit",

            ]);
    }

}


