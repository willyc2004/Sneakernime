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
            'id_extra' => 3,
        ]);

        TransactionExtra::create([
            'id_transaction' => 2,
            'id_extra' => 2,
        ]);

        TransactionExtra::create([
            'id_transaction' => 2,
            'id_extra' => 4,
        ]);

        TransactionExtra::create([
            'id_transaction' => 5,
            'id_extra' => 3,
        ]);

        TransactionExtra::create([
            'id_transaction' => 6,
            'id_extra' => 3,
        ]);

        TransactionExtra::create([
            'id_transaction' => 7,
            'id_extra' => 4,
        ]);

        TransactionExtra::create([
            'id_transaction' => 8,
            'id_extra' => 4,
        ]);

        TransactionExtra::create([
            'id_transaction' => 9,
            'id_extra' => 3,
        ]);

        TransactionExtra::create([
            'id_transaction' => 11,
            'id_extra' => 4,
        ]);

        TransactionExtra::create([
            'id_transaction' => 12,
            'id_extra' => 3,
        ]);

        TransactionExtra::create([
            'id_transaction' => 13,
            'id_extra' => 4,
        ]);
    }
}
