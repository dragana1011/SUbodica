<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new User();
        $user1->name = "Pekara Muki";
        $user1->email = "mukipekara@gmail.com";
        $user1->password = "muki123";
        $user1->phone = "38165338574";
        $user1->bpg = "121110987654321";
        $user1->img = "images/user1.png";
        $user1->save();

        $user2 = new User();
        $user2->name = "Mlekara Stanic";
        $user2->email = "stanicmlekara@gmail.com";
        $user2->password = "stanic123";
        $user2->phone = "3816648769";
        $user2->bpg = "123456789101112";
        $user2->img = "images/user2.png";
        $user2->save();
    }
}
