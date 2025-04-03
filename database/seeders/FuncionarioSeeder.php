<?php

namespace Database\Seeders;

use App\Models\Administrador;
use App\Models\Funcionario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Funcionario::create([
            'nome' => 'matheus',
            'cpf' => '12345678901',
            'email'=> 'matheus@gmail.com',
            'password' => Hash::make('123456')
        ]);
    }
}
