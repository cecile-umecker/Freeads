@extends('layout')

@section('navbar')
<nav>
    <div class="container-fluid">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="/" style="color:white; font-weight: bold; font-size: 30px;">LeBonAngle</a>
                </div>
            </div>
        </nav>
@stop

@section('content')
    @foreach($errors->all() as $error)
        <p class="alert alert-danger">{{$error}}</p>
    @endforeach
    <h3 id=s-titre-register>Inscrivez-vous :</h3>
    <form id='form-register' class="container" action="/register" method="post">
        @csrf
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email :</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Mot de passe :</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Confirmation :</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" name="password_confirmation" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Inscription</button>
            </div>
        </div>
    </form>

@stop
