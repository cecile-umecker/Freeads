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

    <h3>Poster</h3>
    @foreach($errors->all() as $error)
        <p class="alert alert-danger">{{ $error }}</p>
    @endforeach
    @if (session()->has('success.message'))
        <p class="alert alert-success">{{ session('success.message')}}</p>
    @endif
    <form id='form-register' class="container" action="/post" method="post">
        @csrf
        <div class="form-group">
            <label for="titre" class="col-sm-2 control-label">Que postez-vous ?</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="title" id="titre" placeholder="Titre">
            </div>
        </div>
        <div class="form-group">
            <label for="inputLocation" class="col-sm-2 control-label">Où est-ce ?</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputLocation" name="location" placeholder="Localisation">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPrice" class="col-sm-2 control-label">Et votre prix ?</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPrice" name="price" placeholder="Prix">
            </div>
        </div>
        <div class="form-group">
            <label for="inputDescription" class="col-sm-2 control-label">Racontez-nous</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputDescription" name="description" placeholder="Description">
            </div>
        </div>
        <div class="form-group">
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Poster</button>
            </div>
        </div>
    </form>

    @stop
