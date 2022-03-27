@extends('layouts.app')

@section('content')
    @php /** @var \App\Models\Blog\Article $article */@endphp

    @if($article->exists)
        <form method="POST" action="{{ route('blog.admin.articles.update', $article->id) }}">
            @method('PATCH')
    @else()
        <form method="POST" action="{{ route('blog.admin.articles.store') }}">
    @endif
        @csrf

        <div class="container">
            @php
            /** @var \Illuminate\Support\ViewErrorBag $errors */
            @endphp
            @if($errors->any())
                <div class="row justify-content-center">
                    <div class="row col-md-12">
                        <div class="alert alert-danger" role="alert">
                            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"></span>
                            </button>
                            {{ $errors->first() }}
                        </div>
                    </div>
                </div>
            @endif

            @if(session('success'))
                <div class="row justify-content-center">
                    <div class="row col-md-12">
                        <div class="alert alert-success" role="alert">
                            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"></span>
                            </button>
                            {{ session('success') }}
                        </div>
                    </div>
                </div>
            @endif
            <div class="row justify-content-center">
                {{ $article->id }}
            </div>
        </div>
    </form>
@endsection
