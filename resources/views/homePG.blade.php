

@extends('jela')

@section('title', 'HomePC')

@section('ingredients')

<body>
    @foreach($meals as $meal)
    <h1>{{$meal->title}} - {{$meal->ingredients}} </h1>
    @endforeach
</body>

@endsection

