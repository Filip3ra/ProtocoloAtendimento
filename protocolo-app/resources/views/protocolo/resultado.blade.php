<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Consulta</title>
</head>
<body>
    <h1>Resultado da Consulta</h1>

    <p><strong>Número do Protocolo:</strong> {{ $protocolo->numero_protocolo }}</p>
    <p><strong>Nome:</strong> {{ $protocolo->nome }}</p>
    <p><strong>CPF:</strong> {{ $protocolo->cpf }}</p>
    <p><strong>Assunto:</strong> {{ $protocolo->assunto }}</p>
    <p><strong>Descrição:</strong> {{ $protocolo->descricao }}</p>
    <p><strong>Status:</strong> {{ $protocolo->status }}</p>

    <a href="{{ route('consulta.form') }}">Fazer nova consulta</a>
</body>
</html>
