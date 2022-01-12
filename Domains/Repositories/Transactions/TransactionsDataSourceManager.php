<?php

namespace BitPanda\Repositories\Transactions;

use BitPanda\Repositories\Transactions\Csv\CSVTransactionsRepository;
use BitPanda\Repositories\Transactions\MySql\MySqlTransactionsRepository;
use Illuminate\Support\Manager;


class TransactionsDataSourceManager extends Manager
{
    public function getDefaultDriver()
    {
        return 'mysql';
    }

    public function createMysqlDriver(): TransactionsRepositoryInterface
    {
        return resolve(MySqlTransactionsRepository::class);
    }

    public function createCsvDriver(): TransactionsRepositoryInterface
    {
        return resolve(CSVTransactionsRepository::class);
    }
}
