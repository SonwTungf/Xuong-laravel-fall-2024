<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\Financial_Report;
use App\Models\Sale;
use App\Models\Tax;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Financial_ReportController extends Controller
{
    public function generateFinancialReport()
    {
        $month = 9;
        $year = 2024;


        $totalSales = Sale::whereMonth('sale_date', $month)
            ->whereYear('sale_date', $year)
            ->sum('total');


        $totalExpenses = Expense::whereMonth('expense_date', $month)
            ->whereYear('expense_date', $year)
            ->sum('amount');


        $profitBeforeTax = $totalSales - $totalExpenses;

        // VAT
        $vatRate = Tax::where('tax_name', 'VAT')->first()->rate;
        $taxAmount = $profitBeforeTax * ($vatRate / 100);


        $profitAfterTax = $profitBeforeTax - $taxAmount;


        Financial_Report::updateOrCreate(
            ['month' => $month, 'year' => $year],
            [
                'total_sales' => $totalSales,
                'total_expenses' => $totalExpenses,
                'profit_before_tax' => $profitBeforeTax,
                'tax_amount' => $taxAmount,
                'profit_after_tax' => $profitAfterTax,
            ]
        );

        return response()->json(['message' => 'Financial report generated successfully!']);;
    }
}
