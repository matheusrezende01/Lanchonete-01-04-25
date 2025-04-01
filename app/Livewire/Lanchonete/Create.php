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
    

