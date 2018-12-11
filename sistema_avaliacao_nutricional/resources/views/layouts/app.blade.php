<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SGE</title>

    <!-- Scripts -->
    <!--script src="/js/jquery-3.3.1.js"></script-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="/js/jquery.mask.js"></script>
    <script src="/js/imc.js"></script>
    <!--script src="{{ asset('js/app.js') }}" defer></script-->
    <!--Load the AJAX API-->
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="/css/home.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--link href="{{ asset('css/app.css') }}" rel="stylesheet"-->

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark" >
                <a class="navbar-brand" href="/home">
                    SGE
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @if(!Auth::guest())
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Turmas
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/turmas/create">
                                Cadastrar
                            <a class="dropdown-item" href="/turmas">
                              Consultar/Editar/Excluir
                            </a>
                            <a class="dropdown-item" href="/turma_alunos">
                              Inserir/Excluir Alunos
                            </a>

                          </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Alunos
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="/alunos/create">
                                  Cadastrar
                              </a>
                              <a class="dropdown-item" href="/alunos">
                                Consultar/Editar/Excluir
                              </a>

                            </div>
                          </li>
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Avaliações
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/avaliacoes">
                                    Cadastrar
                                </a>
                                <a class="dropdown-item" href="/show2">
                                  Consultar/Excluir
                                </a>

                              </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Relatórios
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="/countAll">
                                      Relatório por Estado Nutricional
                                  </a>
                                  <a class="dropdown-item" href="/show3">
                                    Relatório por Turma
                                  </a>

                                </div>
                              </li>
                          </ul>
                          @endif
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>

                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div>&nbsp;</div>
        	  <div>&nbsp;</div>

            @if(!Auth::guest())
            <div class="row">

                <div class="col col-md-3">

                  <div class="nav-side-menu">
                    <div>&nbsp;</div>
                    <div>&nbsp;</div>
                    <div>&nbsp;</div>
                    <div>&nbsp;</div>
                    <div>&nbsp;</div>
                    <div>&nbsp;</div>
                    <div class="brand">Sistema de Gerenciamento Escolar</div>
                    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

                        <div class="menu-list">

                            <ul id="menu-content" class="menu-content collapse out">

                                <li  data-toggle="collapse" data-target="#turmas" class="collapsed">
                                  <a href="#"><i class="fa fa-graduation-cap"></i> Turmas</a>
                                </li>
                                <ul class="collapse" id="turmas">
                                    <li><a href="/turmas/create">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cadastrar</a></li>
                                    <li><a href="/turmas">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Consultar / Editar / Excluir</a></li>
                                    <li><a href="/turma_alunos">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Inserir / Excluir Alunos</a></li>
                                </ul>


                                <li data-toggle="collapse" data-target="#alunos" class="collapsed">
                                  <a href="#"><i class="fa fa-users fa-lg"></i> Alunos </a>
                                </li>
                                <ul class="collapse" id="alunos">
                                  <li><a href="/alunos/create">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cadastrar</a></li>
                                  <li><a href="/alunos">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Consultar / Editar / Excluir</a></li>
                                </ul>


                                <li data-toggle="collapse" data-target="#avaliacoes" class="collapsed">
                                  <a href="#"><i class="	fas fa-edit"></i> Avaliações </a>
                                </li>
                                <ul class="collapse" id="avaliacoes">
                                  <li><a href="/avaliacoes">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cadastrar</a></li>
                                  <li><a href="/show2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Consultar / Excluir</a></li>
                                </ul>

                                <li data-toggle="collapse" data-target="#relatorios" class="collapsed">
                                  <a href="#"><i class="fas fa-chart-pie"></i> Relatórios</a>
                                </li>
                                <ul class="collapse" id="relatorios">
                                  <li><a href="/countAll">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Relatório por Estado Nutricional </a></li>
                                  <li><a href="/show3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Relatório por Turma</a></li>
                                </ul>



                            </ul>
                     </div>
                  </div>
                </div>
                <div class="col col-md-8">
                  @if($errors->any())</p>
                    <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach($errors->all() as $error)</p>
                    <li>{{ $error }}</li>
                    <p>@endforeach</ul>
                    </div>
                    <p>@elseif(session()->has('success'))</p>
                    <div class="alert alert-success" role="alert">
                          {{ session('success') }}</div>
                    <p>@endif</p>
                    @if (Session::has('mensagem-sucesso'))
                        <div class="alert alert-success" role="alert">{{ Session::get('mensagem-sucesso') }}</div>
                    @endif
                    @if (Session::has('mensagem-erro'))
                      <div class="alert alert-danger" role="alert">{{ Session::get('mensagem-erro') }}</div>
                    @endif
                    @yield('content')
                </div>

          </div>
          @else
            <div>
                @if (Session::has('mensagem-sucesso'))
                    <div class="alert alert-success" role="alert">{{ Session::get('mensagem-sucesso') }}</div>
                @endif
                @if (Session::has('mensagem-erro'))
                  <div class="alert alert-danger" role="alert">{{ Session::get('mensagem-erro') }}</div>
                @endif
                @yield('content')
            </div>
          @endif
          <div>&nbsp;</div>
          <div>&nbsp;</div>

        </main>
    <nav class="navbar navbar-dark fixed-bottom navbar-expand-md  bg-dark text-light" >
        <div class="container">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <a class="nav-link toggle">
            Desenvolvido para Disciplina  CSI477 - SISTEMAS WEB I 2018
            </a>
        </div>
      </div>
    </nav>
</body>

</html>
