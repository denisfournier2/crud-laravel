<?php

namespace Database\Seeders;

use App\Models\ModelBook;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(ModelBook $book): void
    {
        $book->create([
            'title'=>'Lovecraft',
            'pages'=>'500',
            'price'=>'100.11',
            'id_user'=>'1'
        ]);
        $book->create([
            'title'=>'Senhor dos aneis',
            'pages'=>'3123',
            'price'=>'346.11',
            'id_user'=>'1'
        ]);
    }
}
