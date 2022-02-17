@extends('layouts.app')

@section('content')
    @php /** @var \App\Models\Blog\Category $category */@endphp
    <form method="POST" action="{{ route('blog.admin.categories.update', $category->id) }}">
        @method('PATCH')
        @csrf
        <div class="container">
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
