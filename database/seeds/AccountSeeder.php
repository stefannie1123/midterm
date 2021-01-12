<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
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
                'user_id'=> 1,
                'acct_name'=>'Pedoche S. Regular Account',
                'init_invest'=> 225000,
                'start_date'=>'2020-10-21',
                'remarks'=>'Done with normal transaction',
               
            ],
            [
                'user_id'=> 2,
                'acct_name'=>'Dayo J.A. Regular Account',
                'init_invest'=> 151500,
                'start_date'=>'2020-10-19',
                'remarks'=>'Done with normal transaction',
            ],
            [
                'user_id'=> 3,
                'acct_name'=>'Marcojos A.M. Regular Account',
                'init_invest'=> 100001,
                'start_date'=>'2020-10-22',
                'remarks'=>'Done with normal transaction',
            ],
            [
                'user_id'=> 4,
                'acct_name'=>'Quibol H.Q. Regular Account',
                'init_invest'=> 455000,
                'start_date'=>'2020-10-25',
                'remarks'=>'Done with normal transaction',
            ],
        ];

        foreach($data as $acc) {
            \App\Accounts::create($acc);
        }
    }
}
