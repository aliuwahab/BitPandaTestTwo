<?php
namespace BitPanda\Repositories\Transactions;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;

interface TransactionsRepositoryInterface
{
    public function all(int $paginateBy = 50): ?array;
}
