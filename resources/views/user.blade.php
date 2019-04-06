@extends('layout')

@section('title', 'Users')

@section('heading')
    Users
@endsection

@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Passport No</th>
            <th scope="col">Phone No</th>
            <th scope="col">Role</th>
            <th scope="col">Posts</th>
            <th scope="col">Country</th>
        </tr>
    </thead>
    <tbody>
        @php
        $i=0
        @endphp
        @foreach ($users as $user)
        @php
        $i++
        @endphp
        <tr>
            <th scope="row">{{$i}}</th>
            <td>{{ $user->name}}</td>
            <td>{{ $user->passport->number}}</td>
            <td>
                @foreach ($user->phones as $phone)
                {{$phone->number."  "}} <br>
                @endforeach
            </td>
            <td>
                @foreach ($user->roles as $role)
                {{$role->role."  "}} <br>
                @endforeach
            </td>
            <td>
                @foreach ($user->posts as $post)
                {{$post->post."  "}} <br>
                @endforeach
            </td>
            <td>
                {{$user->country->name}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

