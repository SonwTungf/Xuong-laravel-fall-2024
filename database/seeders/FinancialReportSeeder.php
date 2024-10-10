<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FinancialReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('financial_reports')->insert([
            'month' => 9,
            'year' => 2024,
            'total_sales' => DB::table('sales')
                ->whereMonth('sale_date', 9)
                ->whereYear('sale_date', 2024)
                ->sum('total'),
            'total_expenses' => DB::table('expenses')
                ->whereMonth('expense_date', 9)
                ->whereYear('expense_date', 2024)
                ->sum('amount'),
            'profit_before_tax' => DB::raw('total_sales - total_expenses'),
            'tax_amount' => DB::raw('total_sales * (SELECT rate FROM taxes WHERE tax_name = "VAT")'),
            'profit_after_tax' => DB::raw('profit_before_tax - tax_amount'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
