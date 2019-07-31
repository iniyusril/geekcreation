<?php

use App\User;
use App\Admin;
use App\Toko;
use App\Produk;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'User',
            'email' => 'sfelix_martins@hotmail.com',
            'password' => bcrypt('secret'),
        ]);

        Admin::create([
            'name' => 'Admin',
            'email' => 'sfelix_martins@hotmail.com',
            'password' => bcrypt('secret'),
        ]);
        for($i =0;$i<=10;$i++){
            Toko::create([
                'nama_toko' => 'Toko'.$i,
            ]);
        Produk::create([
            'nama_produk' => 'produk'.$i,
            'harga' => '100000',
            'stok' => 100,
            'id_toko' => $i
        ]);
        }
        }
    }

