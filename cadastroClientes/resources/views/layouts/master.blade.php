<!doctype html>
<html lang="pt_BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Desafio Prático</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a href="{{ url('/') }}" class="navbar-brand">meu_app</a>
    </div>
    <div class="nav navbar-nav navbar-right">
      <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('clientes') }}">Clientes</a></li>
        <li><a href="{{ url('contatos') }}">Contatos</a></li>
    </div>
  </div>
</nav>

<main>
    <div class="container">
        @yield('content')
    </div>
</main>

</body>
</html>