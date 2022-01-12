<?php

namespace BitPanda\Repositories\Transactions\MySql;

use App\Models\Transaction;
use BitPanda\Repositories\Transactions\TransactionsRepositoryInterface;

class MySqlTransactionsRepository implements TransactionsRepositoryInterface
{
    public function all(int $paginateBy = 50): array
    {
        return Transaction::all()->toArray();
    }
}
