@extends('layouts.app')

@section('content')
    <div class="container">
        <button type="submit" class="btn btn-info">
            <a href="{{ route('blog.admin.categories.create') }}">Создать</a>
        </button>
        <table class="table table-hover">
            <thead>
            <th>ID</th>
            <th>Категория</th>
            </thead>
            <tbody>
            @foreach($paginator as $item)
                @php /** @var \App\Models\Blog\Category $item */ @endphp
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>
                        <a href="{{ route('blog.admin.categories.edit', $item->id) }}">{{ $item->title }}</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @if($paginator->total() > $paginator->count())
            <br>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            {{ $paginator->links() }}
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
