<?php

namespace Tests\Feature;

use App\Models\Transaction;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TransactionControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_can_get_transactions()
    {
        $transactions = Transaction::factory()->count(5)->create();
        $response = $this->getJson(route('api.transactions'));

        $response->assertStatus(200)->assertJsonCount($transactions->count(), 'data');
    }

    public function test_it_can_pass_data_source_to_use()
    {
        //NB:: reading csv from path: storage_path("app/files/transactions.csv") with rows 100
        $response = $this->getJson(route('api.transactions', ['source' => 'csv']));

        $response->assertStatus(200)->assertJsonCount(100, 'data');
    }

    public function test_an_invalid_source_will_return_un_processable_error_with_message()
    {
        $response = $this->getJson(route('api.transactions', ['source' => 'invalid']));

        $response->assertStatus(422);
    }
}
