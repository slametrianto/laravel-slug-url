@extends('layout.master')

@section('title', 'Home')

@section('content')

<div class="row">
@foreach($articles as $article)

<div class="col-md-4">
<div class="card mb-3">
<div class="card body">

<a href="/articles/{{$article->slug}}"><p>{{$article -> title}}</p></a>
<div>{{$article ->created_at->diffForHumans()}}</div>

</div>
</div>
</div>


@endforeach


</div>

@endsection