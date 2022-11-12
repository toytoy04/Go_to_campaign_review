<?php

use Illuminate\Database\Seeder;

class MemosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('memos')->insert([
            [
                'text' => 'テスト',
                'travel_id' => 1,
                'user_id' => 1,
                'created_at' =>  now(),
                'updated_at' => now(),
            ],
            [
                'text' => 'テスト2',
                'travel_id' => 2,
                'user_id' => 1,
                'created_at' =>  now(),
                'updated_at' => now(),
            ],
            [
                'text' => 'テスト',
                'travel_id' => 1,
                'user_id' => 2,
                'created_at' =>  now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
