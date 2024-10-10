<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TransactionController extends Controller
{
    // Khởi tạo phiên giao dịch
    public function startTransaction(Request $request)
    {

        $transactionId = uniqid('txn_', true);


        Session::put('transaction_id', $transactionId);
        Session::put('amount', $request->input('amount'));
        Session::put('target_account', $request->input('target_account'));
        Session::put('status', 'in_progress');

        return response()->json([
            'message' => 'Transaction started',
            'transaction_id' => $transactionId,
        ]);
    }

    public function processTransaction(Request $request)
    {
        if (Session::has('transaction_id')) {
            Session::put('step', $request->input('step'));

            return response()->json([
                'message' => 'Transaction step saved',
                'step' => $request->input('step'),
            ]);
        }

        return response()->json(['message' => 'No active transaction'], 400);
    }

    // Hoàn thành giao dịch
    public function completeTransaction()
    {
        if (Session::has('transaction_id')) {
            $transactionId = Session::get('transaction_id');
            $amount = Session::get('amount');
            $targetAccount = Session::get('target_account');



            Session::forget('transaction_id');
            Session::forget('amount');
            Session::forget('target_account');
            Session::forget('status');
            Session::forget('step');

            return response()->json(['message' => 'Transaction completed successfully']);
        }

        return response()->json(['message' => 'No active transaction'], 400);
    }

    // Hủy giao dịch
    public function cancelTransaction()
    {
        if (Session::has('transaction_id')) {
            Session::forget('transaction_id');
            Session::forget('amount');
            Session::forget('target_account');
            Session::forget('status');
            Session::forget('step');

            return response()->json(['message' => 'Transaction cancelled']);
        }

        return response()->json(['message' => 'No active transaction'], 400);
    }

    // Khôi phục phiên giao dịch
    public function resumeTransaction()
    {
        // Kiểm tra nếu có phiên giao dịch trong Session
        if (Session::has('transaction_id')) {
            $transactionData = [
                'transaction_id' => Session::get('transaction_id'),
                'amount' => Session::get('amount'),
                'target_account' => Session::get('target_account'),
                'step' => Session::get('step'),
                'status' => Session::get('status'),
            ];

            return response()->json([
                'message' => 'Transaction resumed',
                'data' => $transactionData
            ]);
        }

        return response()->json(['message' => 'No active transaction'], 400);
    }
}
