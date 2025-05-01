<!DOCTYPE html>
<html>
<head>
    <title>Consulta de Protocolo</title>
</head>
<body>
    <h1>Consulta de Protocolo</h1>

    @if(session('erro'))
        <p style="color: red;">{{ session('erro') }}</p>
    @endif

    <form method="POST" action="{{ route('consulta.resultado') }}">
        @csrf
        <label for="numero_protocolo">Número do Protocolo:</label>
        <input type="text" name="numero_protocolo" required>
        <button type="submit">Consultar</button>
    </form>

    <a href="{{ route('protocolo.create') }}">Criar Formulário</a>
</body>
</html>
