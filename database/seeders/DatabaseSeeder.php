<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\phone;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {

        // $userIDs = User::pluck('id')->all();

        // foreach ($userIDs as $userID) {
        //     phone::query()->create([
        //         'user_id' => $userID,
        //         'value' => fake()->unique()->phoneNumber(),
        //     ]);
        // }

        // DB::table('products')->insert([
        //     ['name' => 'Bàn gỗ', 'price' => 2000000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        //     ['name' => 'Ghế xoay', 'price' => 1500000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        //     ['name' => 'Tủ quần áo', 'price' => 5000000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        //     ['name' => 'Giường ngủ', 'price' => 8000000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        // ]);

        // DB::table('sales')->insert([
        //     ['product_id' => 1, 'quantity' => 3, 'price' => 2000000, 'tax' => 660000, 'total' => 6600000, 'sale_date' => '2024-09-15', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        //     ['product_id' => 2, 'quantity' => 5, 'price' => 1500000, 'tax' => 330000, 'total' => 7500000, 'sale_date' => '2024-09-16', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        //     ['product_id' => 3, 'quantity' => 3, 'price' => 2000000, 'tax' => 660000, 'total' => 6600000, 'sale_date' => '2024-09-15', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        //     ['product_id' => 4, 'quantity' => 4, 'price' => 1500000, 'tax' => 330000, 'total' => 7500000, 'sale_date' => '2024-09-16', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        // ]);

        // DB::table('expenses')->insert([
        //     ['description' => 'Nhập hàng tháng 9', 'amount' => 5000000, 'expense_date' => '2024-09-05', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        //     ['description' => 'Chi phí vận chuyển', 'amount' => 1000000, 'expense_date' => '2024-09-06', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        //     ['description' => 'Nhập hàng tháng 9', 'amount' => 5000000, 'expense_date' => '2024-09-05', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        //     ['description' => 'Chi phí vận chuyển', 'amount' => 1000000, 'expense_date' => '2024-09-06', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        // ]);

        // DB::table('financial_reports')->insert([
        //     'month' => 9,
        //     'year' => 2024,
        //     'total_sales' => 22080000,
        //     'total_expenses' => 18800000,
        //     'profit_before_tax' => 13200000,
        //     'tax_amount' => 2208000,
        //     'profit_after_tax' => 11000000,
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);

        // DB::table('taxes')->insert([
        //     ['tax_name' => 'VAT', 'rate' => 10, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        // ]);


    }
}
