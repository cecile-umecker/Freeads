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
    @if (session()->has('success.message'))
        <p class="alert alert-success">{{ session('success.message')}}</p>
    @endif
    @foreach($errors->all() as $error)
        <p class="alert alert-danger">{{ $error }}</p>
    @endforeach
    <h3>Modifier mes données</h3>
    <form class="container" action="{{ route('accountUpdate', $user->id) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email :</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Nouvel Email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Mot de passe :</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Nouveau Mot de passe">
            </div>
        </div>
        <div class="form-group">
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>
        </div>
    </form>

    <h3>Mes annonces :</h3>
    <div class="card-container">
        @foreach($ads as $ad)
            <div class="ad-card">
                <p class="title-card"><a href="/adPage">{{$ad->title}}</a></p>
                <p class="info-card"><strong>{{$ad->price}} €</strong>  &nbsp&nbsp&nbsp&nbsp{{$ad->location}}</p>
                <p class="description-card">{{$ad->description}}</p>
            </div>
        @endforeach
    </div>
@stop
