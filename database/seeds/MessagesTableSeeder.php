<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            [
                'user_id' => 1,
                'sent_date' => '2022-01-18',
                'title' => 'お問い合わせいただいた件に関する回答',
                'email' => 'customer1@gmail.com',
                'messages' => 'この度はH.R.Iをご利用いただきましてありがとうございます。テスト1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'sent_date' => '2022-2-18',
                'title' => 'ご予約されている旅行が近づいております。',
                'email' => 'customer2@gmail.com',
                'messages' => 'この度はH.R.Iをご利用いただきましてありがとうございます。テスト2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'sent_date' => '2022-12-18',
                'title' => 'お問い合わせいただいた件に関する回答',
                'email' => 'customer3@gmail.com',
                'messages' => 'この度はH.R.Iをご利用いただきましてありがとうございます。テスト3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4,
                'sent_date' => '2022-5-18',
                'title' => 'お問い合わせいただいた件に関する回答',
                'email' => 'customer4@gmail.com',
                'messages' => 'この度はH.R.Iをご利用いただきましてありがとうございます。テスト4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 5,
                'sent_date' => '2022-8-18',
                'title' => 'お問い合わせいただいた件に関する回答',
                'email' => 'customer5@gmail.com',
                'messages' => 'この度はH.R.Iをご利用いただきましてありがとうございます。テスト5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 6,
                'sent_date' => '2022-7-18',
                'title' => 'お問い合わせいただいた件に関する回答',
                'email' => 'customer6@gmail.com',
                'messages' => 'この度はH.R.Iをご利用いただきましてありがとうございます。テスト6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 7,
                'sent_date' => '2022-2-18',
                'title' => 'お問い合わせいただいた件に関する回答',
                'email' => 'customer7@gmail.com',
                'messages' => 'この度はH.R.Iをご利用いただきましてありがとうございます。テスト7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 8,
                'sent_date' => '2022-7-18',
                'title' => 'お問い合わせいただいた件に関する回答',
                'email' => 'customer8@gmail.com',
                'messages' => 'この度はH.R.Iをご利用いただきましてありがとうございます。テスト8',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 9,
                'sent_date' => '2022-12-18',
                'title' => 'お問い合わせいただいた件に関する回答',
                'email' => 'customer9@gmail.com',
                'messages' => 'この度はH.R.Iをご利用いただきましてありがとうございます。テスト9',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 10,
                'sent_date' => '2022-8-18',
                'title' => 'お問い合わせいただいた件に関する回答',
                'email' => 'customer10@gmail.com',
                'messages' => 'この度はH.R.Iをご利用いただきましてありがとうございます。テスト10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
