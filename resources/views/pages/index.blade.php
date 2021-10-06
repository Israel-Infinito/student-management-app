@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center container mt-5 pt-5 ">
        <center><h1 class="container mt-5 mx-auto">This is a Student Management Application </h1></center>
    <p>This is a student management application that centralize student data to make it more accessible for teacher, administrators, parental guardians, and students themselves.</p>
    <p> <a class ="btn btn-primary btn-lg" href="/profile/create" role="button">Create new profile</a> 
        <a class ="btn btn-success btn-lg" href="/profile" role="button"> View all profiles </a> </p>
    </div>
    
@endsection

{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'StudentApp')}}</title>
    
    </head>
    <body>
        <center><h1 class="container mt-5 mx-auto jumbotron">This is a Student Management Application </h1></center>
    </body>
    {!! Form::open(['action'=> '', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' =>'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' =>'Body Text'])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    <p> <a class ="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class ="btn btn-success btn-lg" href="/register" role="button">Register</a> </p>
</html> --}}
