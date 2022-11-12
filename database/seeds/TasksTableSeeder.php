<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([

            [
                'travel_id' => 1,
                'title' => '旅行代金支払い',
                'deadline' => '20220720',
                'isFinished' => 1,
                'created_at' =>  now(),
                'updated_at' => now(),
            ],

            [
                'travel_id' => 2,
                'title' => '旅行代金支払い',
                'deadline' => '20220704',
                'isFinished' => 0,
                'created_at' =>  now(),
                'updated_at' => now(),
            ],

            [
                'travel_id' => 3,
                'title' => '書類お渡し',
                'deadline' => '20220801',
                'isFinished' => 1,
                'created_at' =>  now(),
                'updated_at' => now(),
            ],

            [
                'travel_id' => 4,
                'title' => 'クーポンお渡し',
                'deadline' => '20220820',
                'isFinished' => 0,
                'created_at' =>  now(),
                'updated_at' => now(),
            ],

            [
                'travel_id' => 5,
                'title' => '申込金支払い',
                'deadline' => '20220701',
                'isFinished' => 0,
                'created_at' =>  now(),
                'updated_at' => now(),
            ],

            [
                'travel_id' => 6,
                'title' => '残金入金',
                'deadline' => '20220715',
                'isFinished' => 1,
                'created_at' =>  now(),
                'updated_at' => now(),
            ],

            [
                'travel_id' => 7,
                'title' => '旅行先決定',
                'deadline' => '20220728',
                'isFinished' => 0,
                'created_at' =>  now(),
                'updated_at' => now(),
            ],

            [
                'travel_id' => 8,
                'title' => '旅行代金支払い',
                'deadline' => '20220808',
                'isFinished' => 0,
                'created_at' =>  now(),
                'updated_at' => now(),
            ],

            [
                'travel_id' => 9,
                'title' => '申込確認書送付',
                'deadline' => '20220731',
                'isFinished' => 1,
                'created_at' =>  now(),
                'updated_at' => now(),
            ],

            [
                'travel_id' => 10,
                'title' => 'キャンセル料入金',
                'deadline' => '20220831',
                'isFinished' => 1,
                'created_at' =>  now(),
                'updated_at' => now(),
            ],


        ]);
    }
}
