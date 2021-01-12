<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'lname'=>'Pedoche',
                'fname'=>'Stephanie',
                'address'=>'Getafe, Bohol',
                'phone'=>'09952293273',
                'email'=>'Stef123@gmail.com',
                'password'=>bcrypt('password123')
            ],
            [
                'lname'=>'Dayo',
                'fname'=>'Judy Ann',
                'address'=>'Clarin,Bohol',
                'phone'=>'09051151272',
                'email'=>'Judai@gmail.com',
                'password'=>bcrypt('password123')
            ],
            [
                'lname'=>'Marcojos',
                'fname'=>'Angel Mae',
                'address'=>'Tinangnan,Tubigon,Bohol',
                'phone'=>'09061293371',
                'email'=>'Angel@gmail.com',
                'password'=>bcrypt('password123')
            ],
            [
                'lname'=>'Quibol',
                'fname'=>'Hazel Queen',
                'address'=>'Calape,Bohol',
                'phone'=>'09052553211',
                'email'=>'HazelQQ123@gmail.com',
                'password'=>bcrypt('password123')
            ],
        ];

        foreach($data as $u) {
            \App\User::create($u);
        }
    }
}
