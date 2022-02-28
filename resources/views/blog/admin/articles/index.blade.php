@extends('layouts.app')

@section('content')
    <div class="container">
        <button type="submit" class="btn btn-info">
            <a href="{{ route('blog.admin.articles.create') }}">Создать</a>
        </button>
        <table class="table table-hover">
            <thead>
            <th>ID</th>
            <th>Заголовок</th>
            <th>Содержание</th>
            <th>Идентификатор</th>
            <th>Рейтинг</th>
            <th>Просмотры</th>
            </thead>
            <tbody>
            @foreach($paginator as $item)
                @php /** @var \App\Models\Blog\Article $item */ @endphp
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>
                        <a href="{{ route('blog.admin.articles.edit', $item->id) }}">{{ $item->title }}</a>
                    </td>
                    <td>
                        <a href="{{ route('blog.admin.articles.edit', $item->id) }}">{{ $item->text }}</a>
                    </td>
                    <td>
                        <a href="{{ route('blog.admin.articles.edit', $item->id) }}">{{ $item->slug }}</a>
                    </td>
                    <td>{{ $item->rating }}</td>
                    <td>{{ $item->views }}</td>
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
