<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <title>Cadastro de Produtos</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <nav class="navbar navbar-dark bg-primary">
            <a class="navbar-brand">Sistema de cadastro de produtos</a>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Procurar" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </nav>
        
        <div class="container">
            <main role="main">
                @hasSection('body')
                    @yield('body')
                @endif
            </main>
        </div>

        <footer id="myFooter">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h2 class="logo"><a href=""> LOGO </a></h2>
                    </div>
                    <div class="col-sm-2">
                        <h5>Inicio</h5>
                        <ul>
                            <li><a href="">Home</a></li>
                            
                        </ul>
                    </div>
                    <div class="col-sm-2">
                        <h5>Sobre-nós</h5>
                        <ul>
                            <li><a href="">Sobre a Empresa</a></li>
                            <li><a href="">Contato</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2">
                        <h5>Suporte</h5>
                        <ul>
                            <li><a href="">FAQ</a></li>
                            <li><a href="">Telefones</a></li>
                            <li><a href="">Chat</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <div class="social-networks">
                            <a href="" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="" class="instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                        <a href="">
                            <button type="button" class="btn btn-default">Contato</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <p>© 2020 Copyright</p>
            </div>
        </footer>
        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>