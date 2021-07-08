@extends('layout')
@section('navbar')
    <div class="container-fluid">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="#" style="color:white; font-weight: bold; font-size: 30px;">LeBonAngle</a>
                </div>

                <!-- Les lien de la navbnar -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="/home" style="color:white;" disabled="disabled">Home</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li><a href="/account" style="color:white;">Mon Compte</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li><a href="/post" style="color:white;">Poster</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li><a href="/searchAdd" style="color:white;">Recherche</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li><a href="/message" style="color:white;">Messagerie</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ url('logout') }}" style="color:white;">Déconnexion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
@stop

@section('content')
    <p>Page en construction ...</p>
@stop
