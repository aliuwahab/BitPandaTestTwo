<?php

namespace App\Http\Controllers;

use App\Http\Resources\TransactionsResource;
use App\Http\Traits\RespondsWithHttpStatus;
use BitPanda\Repositories\DataSourceFactoryResolver;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    use RespondsWithHttpStatus;

    public function index(Request $request)
    {
        $transactions = resolve(DataSourceFactoryResolver::class)->make($request->get('source', 'mysql'))->all();

        return $this->success(TransactionsResource::collection($transactions), 200, 'Transactions retrieved successfully');
    }
}
