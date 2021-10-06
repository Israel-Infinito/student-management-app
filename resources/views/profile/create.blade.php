@extends('layouts.app')

@section('content')

<h1 class="container text-center mt-5">Create a new student profile</h1>
<form action="{{route('profile.store')}}" method="post" class="container">
    @csrf
    <div class="form-group">
      <label for="name" >Name</label>
      <input type="text" name="name" class="form-control" placeholder="Enter your full name">
    </div>
    <div class="form-group">
      <label for="age">Age</label>
      <input type="number" name="age" min="1" max="35" class="form-control" placeholder="Enter your age">
    </div>
    <div class="form-group">
        <label>Nationality</label>
        <select class="custom-select" name="nationality">
            <option selected>Click to select your nationality</option>
            <option value="Nigeria">Nigeria</option>
            <option value="Ghana">Ghana</option>
            <option value="United States">United States</option>
          </select>
    </div>
    <div class="form-group">
        <label>Sex</label><br>
        <input type="radio" name="sex" value="male">
        <label for="html">Male</label><br>
        <input type="radio"  name="sex" value="female">
        <label for="css">Female</label><br>
    </div>
    <div class="form-group">
        <label>University</label>
        <select class="custom-select" name="university">
            <option selected>Click to select your university</option>
            <option value="OAU">OAU</option>
            <option value="UNILAG">UNILAG</option>
            <option value="UNILORIN">UNILORIN</option>
          </select>
    </div>
    <div class="form-group">
        <label>Department</label>
        <select class="custom-select" name="department">
            <option selected>Click to select your department</option>
            <option value="Accounting">Accounting</option>
            <option value="Economics">Economics</option>
            <option value="Computer Science">Computer Science</option>
          </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
 @endsection
 {{-- {!!Form::open(['action'=> 'profile', 'method' => 'POST'])!!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' =>'Enter your fullname'])}}
    </div>
    <div class="form-group">
        {{Form::label('age', 'Age')}}
        {{Form::number('age', '', ['class' => 'form-control', 'placeholder' =>'Enter your age'])}}
    </div>
    <div class="form-group">
        {{Form::label('nationality', 'Nationality')}}
        {{Form::select('nationality', [ 'class => form-control', 'L' => 'Nigeria', 'S' => 'South Africa', 'placeholder' =>'Select a country'])}};
    </div>
    <div class="form-group">
        {{Form::label('sex', 'Sex')}}
        {{Form::text('sex', ['class' => 'form-control', 'placeholder' =>''])}}
    </div>
    <div class="form-group">
        {{Form::label('university', 'University')}}
        {{Form::select('university', '', ['class' => 'form-control', 'L' => 'FUTA', 'S' => 'Unilorin', 'placeholder' =>'Select your university'])}}
    </div>
    <div class="form-group">
        {{Form::label('department', 'Department')}}
        {{Form::select('department', '', ['class' => 'form-control', 'L' => 'Accounting', 'S' => 'Economics','placeholder' =>'Select your university'])}}
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!} --}}