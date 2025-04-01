<div>
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>{{ $title ?? 'Lanchonete' }}</title>


    @livewireStyles
</head>

<body>
   
    <div class="container">
        

    </div>

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
    <div class="max-w-2xl mx-auto p-4">
       
    
        <!-- Exibe a mensagem de sucesso -->
        @if (session()->has('message'))
            <div class="bg-green-500 text-white p-2 rounded mb-4">
                {{ session('message') }}
            </div>
        @endif
    
        <form wire:submit.prevent="store" class="space-y-4">
            <div class="container mt-5">
                <h2 class="text-center mb-4">Cadastro de Cliente</h2>
            
                <!-- Mensagem de sucesso após cadastro -->
                @if (session()->has('message'))
                    <div class="alert alert-success mb-4" role="alert">
                        {{ session('message') }}
                    </div>
                @endif
            
                <!-- Formulário de Cadastro -->
                <form wire:submit.prevent="store">
                    <div class="row">
                        <!-- Nome -->
                        <div class="col-md-6 mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" id="nome" wire:model="nome" class="form-control" required>
                            @error('nome') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
            
                        <!-- Endereço -->
                        <div class="col-md-6 mb-3">
                            <label for="endereco" class="form-label">Endereço</label>
                            <input type="text" id="endereco" wire:model="endereco" class="form-control" required>
                            @error('endereco') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
            
                        <!-- Telefone -->
                        <div class="col-md-6 mb-3">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" id="telefone" wire:model="telefone" class="form-control" required>
                            @error('telefone') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
            
                        <!-- CPF -->
                        <div class="col-md-6 mb-3">
                            <label for="cpf" class="form-label">CPF</label>
                            <input type="text" id="cpf" wire:model="cpf" class="form-control" required>
                            @error('cpf') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
            
                        <!-- E-mail -->
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" id="email" wire:model="email" class="form-control" required>
                            @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
            
                        <!-- Senha -->
                        <div class="col-md-6 mb-3">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" id="senha" wire:model="senha" class="form-control" required>
                            @error('senha') <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>
            
                    <!-- Botão de Enviar -->
                    <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
                </form>
            </div>