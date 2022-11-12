<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'user_id' => 1,
                'name' => 'customers1',
                'phone_number' => '11111111111',
                'email' => 'customer1@gmail.com',
                'covid_document' => 0,
                'created_at' =>  now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'name' => 'customers2',
                'phone_number' => '22222222222',
                'email' => 'customer2@gmail.com',
                'covid_document' => 0,
                'created_at' =>  now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'name' => 'customers3',
                'phone_number' => '3333333333',
                'email' => 'customer3@gmail.com',
                'covid_document' => 1,
                'created_at' =>  now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4,
                'name' => 'customers4',
                'phone_number' => '4444444444',
                'email' => 'customer4@gmail.com',
                'covid_document' => 0,
                'created_at' =>  now(),
                'updated_at' => now(),
            ],
            [
                'user_id' =>5 ,
                'name' => 'customers5',
                'phone_number' => '55555555555',
                'email' => 'customer5@gmail.com',
                'covid_document' => 0,
                'created_at' =>  now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 6,
                'name' => 'customers6',
                'phone_number' => '66666666666',
                'email' => 'customer6@gmail.com',
                'covid_document' => 0,
                'created_at' =>  now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 7,
                'name' => 'customers7',
                'phone_number' => '77777777777',
                'email' => 'customer7@gmail.com',
                'covid_document' => 0,
                'created_at' =>  now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 8,
                'name' => 'customers8',
                'phone_number' => '8888888888',
                'email' => 'customer8@gmail.com',
                'covid_document' => 1,
                'created_at' =>  now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 9,
                'name' => 'customers9',
                'phone_number' => '99999999999',
                'email' => 'customer9@gmail.com',
                'covid_document' => 0,
                'created_at' =>  now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 10,
                'name' => 'customers10',
                'phone_number' => '10101010101',
                'email' => 'customer10@gmail.com',
                'covid_document' => 1,
                'created_at' =>  now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
