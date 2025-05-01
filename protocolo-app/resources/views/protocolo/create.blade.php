<!-- resources/views/protocolo/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Nova Solicitação</title>
</head>
<body>
    <h1>Cadastro de Solicitação</h1>

    <form method="POST" action="{{ route('protocolo.store') }}">
        @csrf
        <label>Nome:</label>
        <input type="text" name="nome" required><br>

        <label>CPF:</label>
        <input type="text" name="cpf" required><br>

        <label>Assunto:</label>
        <input type="text" name="assunto" required><br>

        <label>Descrição:</label><br>
        <textarea name="descricao" required></textarea><br>

        <button type="submit">Enviar</button>
    </form>

    <a href="{{ route('consulta.form') }}">Fazer nova consulta</a>
</body>
</html>
