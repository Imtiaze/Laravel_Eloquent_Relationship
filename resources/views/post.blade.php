@extends('layout')

@section('title', 'Posts')
    
@section('heading')
    Posts
@endsection

@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Post</th>
            <th scope="col">Country</th>
            <th scope="col">User</th>
        </tr>
    </thead>
    <tbody>
        @php
        $i=0
        @endphp
        @foreach ($posts as $post)
        @php
        $i++
        @endphp
        <tr>
            <th scope="row">{{$i}}</th>
            <td>{{ $post->post}}</td>
            <td>
                {{ $post->user->country->name }}
            </td>
            <td>
                {{ $post->user->name}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection