@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('post.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Post</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Название поста">
            </div>
            <div class="mb-3">
                <label for="post_content" class="form-label">Content</label>
                <textarea type="text" name="post_content" class="form-control" id="post_content"
                          placeholder="Введите содержимое поста"></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">image</label>
                <input type="text" name="image" class="form-control" id="image" placeholder="Фото">
            </div>
            <div class="mb-3">
                <label for="categories" class="form-label">categories</label>
                <select name="category_id" class="form-select" aria-label="categories">
                    @foreach( $categories as $category)
                        <option value="{{ $category->id }}"> {{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection

