<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'shop_id' => 1,
                'name' => 'テスト1',
                'email' => 'test@gmail.com',
                'password' => Hash::make('testtest'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shop_id' => 2,
                'name' => 'テスト2',
                'email' => 'test2@gmail.com',
                'password' => Hash::make('testtest2'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shop_id' => 3,
                'name' => 'テスト3',
                'email' => 'test3@gmail.com',
                'password' => Hash::make('testtest3'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shop_id' => 4,
                'name' => 'テスト4',
                'email' => 'test4@gmail.com',
                'password' => Hash::make('testtest4'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shop_id' => 5,
                'name' => 'テスト5',
                'email' => 'test5@gmail.com',
                'password' => Hash::make('testtest5'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shop_id' => 6,
                'name' => 'テスト6',
                'email' => 'test6@gmail.com',
                'password' => Hash::make('testtest6'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shop_id' => 7,
                'name' => 'テスト7',
                'email' => 'test7@gmail.com',
                'password' => Hash::make('testtest7'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shop_id' => 8,
                'name' => 'テスト8',
                'email' => 'test8@gmail.com',
                'password' => Hash::make('testtest8'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shop_id' => 9,
                'name' => 'テスト9',
                'email' => 'test9@gmail.com',
                'password' => Hash::make('testtest9'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'shop_id' => 10,
                'name' => 'テスト10',
                'email' => 'test10@gmail.com',
                'password' => Hash::make('testtest10'),
                'created_at' => now(),
                'updated_at' => now(),
            ], 
        ]);         
    }
}
