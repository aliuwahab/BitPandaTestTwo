<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {

        if (is_array($this->resource)) {
            return $this->buildResponseFromArray();
        }

        return $this->buildResponseFromObject();
    }

    private function buildResponseFromArray(): array
    {
        return [
            'id' => $this['id'],
            'userId' => $this['user_id'],
            'code' => $this['code'],
            'amount' => $this['amount'],
            'created_at' => $this['created_at'],
            'updated_at' => $this['updated_at'],
        ];
    }

    private function buildResponseFromObject(): array
    {
        return [
            'id' => $this->id,
            'userId' => $this->user_id,
            'code' => $this->code,
            'amount' => $this->amount,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
