@extends('layout.master')

@section('content')

<div class="container">
<h1>{{$article->title}}</h1>

<div>
    {{$article->content}}
</div>

</div>
@endsection