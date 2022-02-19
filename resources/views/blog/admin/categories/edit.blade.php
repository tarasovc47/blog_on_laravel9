@extends('layouts.app')

@section('content')
    @php /** @var \App\Models\Blog\Category $category */@endphp

    @if($category->exists)
        <form method="POST" action="{{ route('blog.admin.categories.update', $category->id) }}">
            @method('PATCH')
    @else()
        <form method="POST" action="{{ route('blog.admin.categories.store') }}">
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
                <div class="col-md-8">
                    @include('blog.admin.categories.includes.item_edit_main_col')
                </div>
                <div class="col-md-3">
                    @include('blog.admin.categories.includes.item_edit_main_add')
                </div>
            </div>
        </div>
    </form>
@endsection
