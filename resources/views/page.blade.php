@extends('layouts.app')
@section('menu')

    <body class="site-menubar-fold" data-auto-menubar="false">

        <!-- menu topo -->
        <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
        
            <div class="navbar-header">

                <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
                    data-toggle="menubar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="hamburger-bar"></span>
                </button>

                <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
                    data-toggle="collapse">
                    <i class="icon wb-more-horizontal" aria-hidden="true"></i>
                </button>

                <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
                    data-toggle="collapse">
                    <span class="sr-only">Toggle Search</span>
                    <i class="icon wb-search" aria-hidden="true"></i>
                </button>

                <div class="navbar-brand navbar-brand-center">
                    <!--<img class="navbar-brand-logo" src="https://estacionamento.huufma.br/static/assets/images/logo_black.png" title="Serviço Residencial">-->
                    <span class="icon fa-car fa-3x"></span>
                    <span class="navbar-brand-text">Menu do Site</span>
                </div>

            </div>
      
        </nav>
        
    </body> 
@endsection
