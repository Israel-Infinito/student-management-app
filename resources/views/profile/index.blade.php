@extends('layouts.app')

@section('content')
<div class="text-center mt-3">
    <h1 >Students Profile</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">S/No</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Nationality</th>
            <th scope="col">Sex</th>
            <th scope="col">University</th>
            <th scope="col">Department</th>
          </tr>
        </thead>
        @if(count($profile)> 0)
        @foreach ($profile as $profile)
            <div class="well">
                <tbody>
                    <tr>
                    <th scope="row">{{$profile->id}}</th>
                    <td>{{$profile->name}}</td>
                    <td>{{$profile->age}}</td>
                    <td>{{$profile->nationality}}</td>
                    <td>{{$profile->sex}}</td>
                    <td>{{$profile->university}}</td>
                    <td>{{$profile->department}}</td>
                    <td>
                    <form action="{{ route('profile.destroy',$profile->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('profile.edit',$profile->id) }}" >Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                    </tr>   
            </div>
        @endforeach
        {{-- {{$posts->links()}} --}}
        {{-- <h3><a href ="/profile/{{$profile->id}}"> {{$profile->title}}</h3>
            <small>Updated on {{$profile->created_at}}</small> --}}
    @else
        <p>No Profiles Found </p>
    @endif
</div>
@endsection