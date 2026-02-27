<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get transactions for the authenticated user
        $transactions = Transaction::with('category')
            ->where('user_id', Auth::id())
            ->orderBy('id', 'DESC')
            ->get();

        return sendSuccessResponse($transactions, 'Transactions retrieved successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'amount' => 'required|numeric',
            'date' => 'required|date',
            'type' => 'required|in:income,expense',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return sendErrorResponse('Validation error', 422, $validator->errors());
        }
        Log::info($request->date);
        $transaction = Transaction::create([
            'amount' => $request->amount,
            'date' => $request->date,
            'type' => $request->type,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'user_id' => Auth::id(),
        ]);

        return sendSuccessResponse($transaction->load('category'), 'Transaction created successfully', 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transaction = Transaction::with('category')
            ->where('user_id', Auth::id())
            ->find($id);

        if (!$transaction) {
            return sendErrorResponse('Transaction not found', 404);
        }

        return sendSuccessResponse($transaction, 'Transaction retrieved successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $transaction = Transaction::where('user_id', Auth::id())->find($id);

        if (!$transaction) {
            return sendErrorResponse('Transaction not found', 404);
        }

        $validator = Validator::make($request->all(), [
            'amount' => 'sometimes|required|numeric',
            'date' => 'sometimes|required|date',
            'type' => 'sometimes|required|in:income,expense',
            'category_id' => 'sometimes|required|exists:categories,id',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return sendErrorResponse('Validation error', 422, $validator->errors());
        }

        $transaction->update($request->all());

        return sendSuccessResponse($transaction->load('category'), 'Transaction updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaction = Transaction::where('user_id', Auth::id())->find($id);

        if (!$transaction) {
            return sendErrorResponse('Transaction not found', 404);
        }

        $transaction->delete();

        return sendSuccessResponse(null, 'Transaction deleted successfully');
    }
}
