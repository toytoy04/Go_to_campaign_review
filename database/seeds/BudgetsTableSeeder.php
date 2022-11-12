<?php

use Illuminate\Database\Seeder;

class BudgetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('budgets')->insert([
            [
                'shop_id' => 1,
                'amount' => '10000',
                'period_start' => '2022-08-14',
                'period_end' => '2022-08-15',
                'created_at' =>  now(),
                'updated_at' => now(),
            ],
            [
                'shop_id' => 2,
                'amount' => '20000',
                'period_start' => '2022-08-1',
                'period_end' => '2022-08-31',
                'created_at' =>  now(),
                'updated_at' => now(),
            ],
            [
                'shop_id' => 3,
                'amount' => '30000',
                'period_start' => '2022-07-01',
                'period_end' => '2022-07-30',
                'created_at' =>  now(),
                'updated_at' => now(),
            ],
            [
                'shop_id' => 4,
                'amount' => '4000',
                'period_start' => '2022-08-11',
                'period_end' => '2022-08-20',
                'created_at' =>  now(),
                'updated_at' => now(),
            ],
            [
                'shop_id' => 5,
                'amount' => '5000',
                'period_start' => '2022-01-01',
                'period_end' => '2022-06-30',
                'created_at' =>  now(),
                'updated_at' => now(),
            ],
            [
                'shop_id' => 6,
                'amount' => '15000',
                'period_start' => '2022-02-15',
                'period_end' => '2022-08-15',
                'created_at' =>  now(),
                'updated_at' => now(),
            ],
            [
                'shop_id' => 7,
                'amount' => '7000',
                'period_start' => '2021-01-01',
                'period_end' => '2021-12-31',
                'created_at' =>  now(),
                'updated_at' => now(),
            ],
            [
                'shop_id' => 8,
                'amount' => '1000',
                'period_start' => '2022-04-01',
                'period_end' => '2022-04-30',
                'created_at' =>  now(),
                'updated_at' => now(),
            ],
            [
                'shop_id' => 9,
                'amount' => '5000',
                'period_start' => '2022-05-01',
                'period_end' => '2022-05-15',
                'created_at' =>  now(),
                'updated_at' => now(),
            ],
            [
                'shop_id' => 10,
                'amount' => '50000',
                'period_start' => '2022-07-01',
                'period_end' => '2022-07-15',
                'created_at' =>  now(),
                'updated_at' => now(),
            ],
        ]);
    }
}