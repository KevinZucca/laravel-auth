@extends('layouts/app')

@section('content')

<div class="container mt-5 text-center">
    <h1>Dashboard di {{$user[0]->name}}</h1>
    <hr>
    <h3>Progetti</h3>
    <a href="{{route('admin.projects.index')}}">Vai alla lista</a>
</div>

@endsection