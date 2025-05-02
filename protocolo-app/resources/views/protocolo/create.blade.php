{{-- resources/views/protocolo/create.blade.php --}}
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Nova Solicitação</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js']) {{-- Se estiver usando Vite --}}
</head>
<body class="bg-gray-100">

    <div class="min-h-screen py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <h2 class="text-xl font-semibold leading-tight text-gray-800 mb-6">
                    Nova Solicitação
                </h2>

                @if(session('success'))
                    <div class="mb-4 text-green-600">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('protocolo.store') }}">
                    @csrf

                    <div class="mb-4">
                        <label class="block font-medium text-sm text-gray-700">Nome</label>
                        <input type="text" name="nome" required
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium text-sm text-gray-700">CPF</label>
                        <input type="text" name="cpf" required
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium text-sm text-gray-700">Assunto</label>
                        <input type="text" name="assunto" required
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium text-sm text-gray-700">Descrição</label>
                        <textarea name="descricao" required rows="4"
                                  class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <button type="submit"
                                style="background-color: #2563eb; color: white; padding: 10px 20px; border: none; border-radius: 6px;">
                            Enviar
                        </button>

                        
                        <div class="ml-auto flex space-x-8">
                        
                            @auth
                            <a href="{{ route('dashboard') }}"
                            class="text-blue-600 hover:underline text-sm">
                                Dashboard
                            </a> 
                            @endauth

                            <a href="{{ route('consulta.form') }}"
                            class="text-blue-600 hover:underline text-sm">
                                Consultar
                            </a>    
                        
                            <a href="{{ url('/') }}"
                            class="text-blue-600 hover:underline text-sm">
                                Início
                            </a>

                        </div>
                    </div>


                </form>

            </div>
        </div>
    </div>

</body>
</html>
