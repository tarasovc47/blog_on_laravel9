@extends('layouts.app')

@section('content')
    <table class="table">
    @foreach($items as $item)
        <tr>
            <td>{{$item->title}}</td>
            <td>{{$item->text}}</td>
        </tr>
    @endforeach
    </table>
@endsection
