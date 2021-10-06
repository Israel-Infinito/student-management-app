@extends('layouts.app')

@section('content')

<h1 class="container text-center mt-5">Create a new student profile</h1>
<form action="{{route('profile.update', $profile->id)}}" method="post" class="container">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="name" >Name</label>
      <input type="text" name="name" value="{{ $profile->name }}"  class="form-control" placeholder="Enter your full name">
    </div>
    <div class="form-group">
      <label for="age">Age</label>
      <input type="number" name="age"  value="{{ $profile->age }}" min="1" max="35" class="form-control" placeholder="Enter your age">
    </div>
    <div class="form-group">
        <label>Nationality</label>
        <select class="custom-select" name="nationality"  value="{{ $profile->university }}">
            <option selected>Click to select your nationality</option>
            <option value="Nigeria">Nigeria</option>
            <option value="Ghana">Ghana</option>
            <option value="United States">United States</option>
          </select>
    </div>
    <div class="form-group">
        <label>Sex</label><br>
        <input type="radio" name="sex"  value="{{ $profile->sex }}">
        <label for="html">Male</label><br>
        <input type="radio"  name="sex"  value="{{ $profile->sex }}">
        <label for="css">Female</label><br>
    </div>
    <div class="form-group">
        <label>University</label>
        <select class="custom-select" name="university"  value="{{ $profile->university }}">
            <option selected>Click to select your university</option>
            <option value="OAU">OAU</option>
            <option value="UNILAG">UNILAG</option>
            <option value="UNILORIN">UNILORIN</option>
          </select>
    </div>
    <div class="form-group">
        <label>Department</label>
        <select class="custom-select" name="department"  value="{{ $profile->department}}">
            <option selected>Click to select your department</option>
            <option value="Accounting">Accounting</option>
            <option value="Economics">Economics</option>
            <option value="Computer Science">Computer Science</option>
          </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
 @endsection