<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderTransactionController extends Controller
{
    //

    public function index()
    {
        return Order::all();
    }
    public function store()
    {
        // request()->get('order_id');
        $order = Order::updateOrCreate(
            ['order_id' => request()->get('order_id')],
            ['transaction_id' => request()->get('transaction_id'), 'status' => request()->get('status')]
        );

        return $order;
    }
}
