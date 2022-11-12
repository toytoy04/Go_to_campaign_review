<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ShopsTableSeeder::class);
        $this->call(BudgetsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(TravelTableSeeder::class);
        $this->call(MessagesTableSeeder::class);
        $this->call(MemosTableSeeder::class);
        $this->call(TasksTableSeeder::class);
    }
}
