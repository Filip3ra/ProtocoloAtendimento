<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Consulta de Protocolo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js']) {{-- Se estiver usando Vite --}}
</head>
<body class="bg-gray-100">

    <div class="min-h-screen py-6">
        <div class="mx-auto max-w-3xl sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <h2 class="text-xl font-semibold leading-tight text-gray-800 mb-6">
                    Consulta de Protocolo
                </h2>

                @if(session('erro'))
                    <div class="mb-4 text-red-600">
                        {{ session('erro') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('consulta.resultado') }}">
                    @csrf
                    <div class="mb-4">
                        <label class="block font-medium text-sm text-gray-700" for="numero_protocolo">
                            Número do Protocolo:
                        </label>
                        <input type="text" name="numero_protocolo" required
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <button type="submit"
                                style="background-color: #2563eb; color: white; padding: 10px 20px; border: none; border-radius: 6px;">
                            Consultar
                        </button>

                        <div class="ml-auto flex space-x-8">
                            @auth
                            <a href="{{ route('dashboard') }}"
                            class="text-blue-600 hover:underline text-sm">
                                Dashboard
                            </a> 
                            @endauth

                            <a href="{{ route('protocolo.create') }}"
                            class="text-blue-600 hover:underline text-sm">
                                Criar nova solicitação
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
