<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create([
            'nome' => 'Matheus',
            'endereco' => 'Rua Y',
            'telefone'=> '189987455',
            'cpf' => '12345678901',
            'email'=> 'matheus@gmail.com',
            'password' => Hash::make('123456')
        ]);
    }
}
