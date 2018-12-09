<!DOCTYPE html>
<html>
<head>
    <!-- Layout básico com os menus que serão apresentados em todas as páginas  -->
    <title>SME - @yield('pagina_titulo')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Bootstrap e jQuery -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



    <link href="/css/styles.css" rel="stylesheet">

</head>
<body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand"  href="#">SME</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a href="#"  class="nav-link">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Área Geral
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">
                  Relatório de Manutenções
                </a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Área Administrativa
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">
                    Cadastro de Equipamentos
                </a>
                <a class="dropdown-item" href="#">
                    Cadastro de Manutenções
                </a>
                <a class="dropdown-item" href="#">
                    Relatório de Equipamentos
                </a>
                <a class="dropdown-item" href="#">
                    Pesquisa
                </a>
              </div>
            </li>
          </ul>

        </div>
      </nav>

    </header>
    <main>
      <div class="container">
        <div>&nbsp;</div>
    	  <div>&nbsp;</div>
        @if (Session::has('mensagem-sucesso'))
            <div class="alert alert-success" role="alert">{{ Session::get('mensagem-sucesso') }}</div>
        @endif
        @if (Session::has('mensagem-erro'))
          <div class="alert alert-danger" role="alert">{{ Session::get('mensagem-erro') }}</div>
        @endif
        @yield('conteudo')

      </div>
    </main>
