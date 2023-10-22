<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public $data = [
        [
            'nama' => 'Kursi',
            'harga' => 100000,
            'stok' => 10,
        ],
        [
            'nama' => 'Meja',
            'harga' => 120000,
            'stok' => 13,
        ],
        [
            'nama' => 'Kipas Angin',
            'harga' => 50000,
            'stok' => 2,
        ],
        [
            'nama' => 'Sendok',
            'harga' => 10500,
            'stok' => 27,
        ],
        [
            'nama' => 'Garpu',
            'harga' => 11000,
            'stok' => 30,
        ],
        [
            'nama' => 'Piring',
            'harga' => 15000,
            'stok' => 20,
        ],
        [
            'nama' => 'Gelas',
            'harga' => 12000,
            'stok' => 20,
        ],
        [
            'nama' => 'Kasur',
            'harga' => 250000,
            'stok' => 3,
        ],
        [
            'nama' => 'Lampu',
            'harga' => 5000,
            'stok' => 30,
        ],
        [
            'nama' => 'Karpet',
            'harga' => 9500,
            'stok' => 23,
        ],
    ];
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'example',
        //     'email' => 'example@example.com',
        //     'password' => Hash::make('example123'),
        // ]);

        foreach ($this -> data as $item) {
            \App\Models\Inventori::factory()->create($item);
        }

    }
}
