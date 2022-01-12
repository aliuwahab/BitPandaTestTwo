<?php

namespace BitPanda\Repositories\Transactions\Csv;

use App\Imports\TransactionsImport;
use BitPanda\Repositories\Transactions\TransactionsRepositoryInterface;
use Maatwebsite\Excel\Facades\Excel;

class CSVTransactionsRepository implements TransactionsRepositoryInterface
{
    public function all(int $paginateBy = 50): array
    {
        $results = Excel::toCollection(new TransactionsImport, storage_path("app/files/transactions.csv"));

        return $results->first()->toArray();
    }
}
