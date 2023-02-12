<?php

namespace Database\Seeders;
use App\Models\Adminuser;
//  use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        $user = [
            [
                'full_name'=>'anoopk',
                'username'=>'akc',
                'phone'=>'9797979797',
                'otp'=>'4546',
               'email'=>'admin@gmail.com',
               'passkey'=> bcrypt('123456'),
            ],


        ];
        foreach ($user as $key => $value) {
            Adminuser::create($value);
        }
    }
}
