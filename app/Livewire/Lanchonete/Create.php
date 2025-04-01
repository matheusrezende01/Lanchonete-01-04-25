<?php

namespace App\Livewire\Lanchonete;

use App\Models\Cliente;
use Livewire\Component;
use Spatie\FlareClient\Http\Client;

class Create extends Component
{

    public $nome;
    public $endereco;
    public $telefone;
    public $cpf;
    public $email;
    public $password;


    protected $rules = [
        'nome' => 'required|string|max:80',
        'endereco' => 'required|string|max:60',
        'telefone' => 'required|string|max:20',
        'cpf' => 'required|cpf|unique:clientes,cpf',
        'email' => 'required|email|unique:clientes,email',
        'password' => 'required|min:6',
    ];
    
    
    public function render()
    {
        return view('livewire.lanchonete.create');
    }
    


    public function store(){

        Cliente::create([
        'nome' => $this->nome,
        'endereco' => $this->endereco,
        'telefone' => $this->telefone,
        'cpf' => $this->cpf,
        'email' => $this->email,
        'password' => $this->password
        ]);     
    }

    
}
    

