@extends('layouts.app')

@section('content')
    @foreach($paginator as $item)
        {{ $item->title }}
    @endforeach
@endsection
