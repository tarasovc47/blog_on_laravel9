@php
/** @var \App\Models\Blog\Category $item */
@endphp
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title"></div>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#maindata" role="tab">Основные данные</a>
                    </li>
                </ul>
                <br>
                <div class="tab-content">
                    <div class="tab-pane active" id="maindata" role="tabpanel">
                        <div class="form-group">
                            <label for="title">Заголовок</label>
                            <input name="title" value="{{ $category->title }}" id="title" type="text" class="form-control" minlength="3" required>
                            <br>
                            <label for="title">Идентификатор</label>
                            <input name="slug" value="{{ $category->slug }}" id="slug" type="text" class="form-control" minlength="3" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
