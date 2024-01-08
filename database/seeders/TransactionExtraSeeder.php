<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TransactionExtra;
class TransactionExtraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TransactionExtra::create([
            'id_transaction' => 1,
            'id_extra' => 1,
        ]);

        TransactionExtra::create([
            'id_transaction' => 1,
            'id_extra' => 2,
        ]);

        TransactionExtra::create([
            'id_transaction' => 1,
            'id_extra' => 3,
        ]);
    }
}
