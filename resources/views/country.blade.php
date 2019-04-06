@extends('layout')

@section('title', 'Countries')

@section('heading')
Countries
@endsection

@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Country</th>
            <th scope="col">Posts</th>
            <th scope="col">Users</th>
        </tr>
    </thead>
    <tbody>
        @php
        $i=0
        @endphp
        @foreach ($countries as $country)
        @php
        $i++
        @endphp
        <tr>
            <th scope="row">{{$i}}</th>
            <td>{{ $country->name}}</td>
            <td>
                @foreach ($country->posts as $post)
                    {{ $post->post}} <br>
                @endforeach
            </td>
            <td>
                @foreach ($country->users as $user)
                    {{ $user->name}} <br>
                @endforeach
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

