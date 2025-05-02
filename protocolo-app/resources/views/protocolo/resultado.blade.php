<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Consulta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js']) {{-- Se estiver usando Vite --}}
</head>
<body class="bg-gray-100">

    <div class="min-h-screen py-6">
        <div class="mx-auto max-w-3xl sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <h2 class="text-xl font-semibold leading-tight text-gray-800 mb-6">
                    Resultado da Consulta
                </h2>

                <div class="space-y-3">
                    <p><strong class="text-gray-700">Número do Protocolo:</strong> {{ $protocolo->numero_protocolo }}</p>
                    <p><strong class="text-gray-700">Nome:</strong> {{ $protocolo->nome }}</p>
                    <p><strong class="text-gray-700">CPF:</strong> {{ $protocolo->cpf }}</p>
                    <p><strong class="text-gray-700">Assunto:</strong> {{ $protocolo->assunto }}</p>
                    <p><strong class="text-gray-700">Descrição:</strong> {{ $protocolo->descricao }}</p>
                    <p><strong class="text-gray-700">Status:</strong> {{ $protocolo->status }}</p>
                </div>

                <div class="mt-6">
                    <a href="{{ route('consulta.form') }}"
                        style="background-color: #2563eb; color: white; padding: 10px 20px; border: none; border-radius: 6px; text-decoration: none; display: inline-block;">
                        Fazer nova consulta
                    </a>                
                </div>

            </div>
        </div>
    </div>

</body>
</html>
