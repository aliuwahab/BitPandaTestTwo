<?php

namespace App\Imports;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TransactionsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return Model|null
    */
    public function model(array $row)
    {
        return new Transaction([
            'id'     => $row['id'],
            'code'    => $row['code'],
            'amount'    => $row['amount'],
            'user_id'    => $row['user_id'],
            'created_at'    => $row['created_at'],
            'updated_at'    => $row['updated_at']
        ]);
    }
}
