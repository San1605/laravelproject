
@extends('layout')

@section('content')
<h1>user page</h1>
<div><ul>
    @foreach ($user as $item)
        <li><span>{{$item->name}}</span> <span>{{$item->email}}</span></li>
        @endforeach
</ul></div>

<? print_r($user)?>
@endsection
