<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Member;
use App\Models\Products;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(8)->create();

        Member::factory(9)->create();

        Products::create([
            'nama_produk' => 'Minyak_Goreng',
            'harga' => '23000',
            'jumlah_produk' => '10'
        ]);

        Products::create([
            'nama_produk' => 'Gula',
            'harga' => '23000',
            'jumlah_produk' => '10'
        ]);

        Products::create([
            'nama_produk' => 'Mie Goreng (Sedaap)',
            'harga' => '3000',
            'jumlah_produk' => '330'
        ]);

        Products::create([
            'nama_produk' => 'Mie Goreng (Indomie)',
            'harga' => '3000',
            'jumlah_produk' => '330'
        ]);

        Products::create([
            'nama_produk' => 'Floridina',
            'harga' => '3000',
            'jumlah_produk' => '30'
        ]);

        Products::create([
            'nama_produk' => 'Teh Kotak (250 ml)',
            'harga' => '5000',
            'jumlah_produk' => '50'
        ]);

        Products::create([
            'nama_produk' => 'Pocari Sweat (300 ml)',
            'harga' => '3000',
            'jumlah_produk' => '100'
        ]);
    }
}
