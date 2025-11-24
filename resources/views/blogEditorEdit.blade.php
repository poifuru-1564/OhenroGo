@extends('layout.app')
@section('content')

{{-- Edit Post --}}

<div class="content">
    <div class="editPost-container">
        <!-- Categories-->
        <h1 class="createNew-header">Edit</h1>
            <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="blog-card">
                    <div class="select-container">
                        <h5 class="select-container-header">Select All</h5>

                        {{-- Prefecture --}}
                        <select name="prefecture_id" class="filter-select">
                            <option value="">---1. Select Prefecture---</option>
                            @foreach ($prefectures as $prefecture)
                                <option value="{{ $prefecture->id }}"
                                    @selected(old('prefecture_id', $post->prefecture_id) == $prefecture->id)>
                                    {{ $prefecture->name }}
                                </option>
                            @endforeach
                        </select>

                        {{-- Temple --}}
                        <select name="temple_id" class="filter-select">
                            <option value="">---2. Select Temple---</option>
                            @foreach ($temples as $temple)
                                <option value="{{ $temple->id }}"
                                    @selected(old('temple_id', $post->temple_id) == $temple->id)>
                                    {{ $temple->name }}
                                </option>
                            @endforeach
                        </select>

                        {{-- Status --}}
                        <select name="status_id" class="filter-select">
                            <option value="">---3. Select Status---</option>
                            @foreach ($status as $sts)
                                <option value="{{ $sts->id }}"
                                    @selected(old('status_id', $post->status_id) == $sts->id)>
                                    {{ $sts->name }}
                                </option>
                            @endforeach
                        </select>
                        {{-- Topic --}}
                        <select name="topic_id" class="filter-select">
                            <option value="">---4. Select Topic---</option>
                            @foreach ($topics as $topic)
                                <option value="{{ $topic->id }}"
                                    @selected(old('topic_id', $post->topic_id) == $topic->id)>
                                    {{ $topic->name }}
                                </option>
                            @endforeach
                        </select>
                        <select class="filter-select" disabled>
                            <option value="">current status: {{ auth()->user()->role->name }}</option>
                        </select>
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <p class="errorMessage" style="margin: 0.5rem;">{{ $error }}</p> 
                            @endforeach      
                        @endif
                
                </div>

                {{-- Blog body --}}
                <div class="blog-body">

                    {{-- Title --}}
                    <div class="blog-title">
                        <h2 class="textbox-3-label">Title</h2>
                        <input type="text"
                               class="textbox-title-3"
                               name="title"
                               value="{{ old('title', $post->title) }}">
                        <p class="title__error" style="color:red">
                            {{ $errors->first('title') }}
                        </p>
                    </div>

                    {{-- Body --}}
                    <div class="blog-text newPost-body">
                        <h2 class="textbox-3-label">Body</h2>
                        <textarea name="body" class="textbox-3" rows="10">{{ old('body', $post->body) }}</textarea>
                        <p class="body__error" style="color:red">
                            {{ $errors->first('body') }}
                        </p>
                    </div>

                    {{-- Image --}}
                    <div class="image">
                        <h2 class="textbox-3-label">Image</h2>

                        {{-- 既存画像があれば表示 --}}
                        @if ($post->photo_path)
                            <img id="oldImage" class="card-img-top" src="{{ asset($post->photo_path) }}" alt="Image"/>
                        @endif

                        {{-- 新しい画像をアップロード --}}
                        <input type="file" id="imageInput" name="image">
                        <img id="preview" style="max-width: 250px; margin-top: 10px;">

                        <p id="imageErrorJs" style="color:red"></p>
                    
                        <p class="image__error" style="color:red">
                            {{ $errors->first('image') }}
                        </p>
                    </div>
                </div>

                <input type="submit" value="Update" class="btn" style="margin-top: 20px;"/>
            </div>
        </form>
    </div>
</div>

<script>
const MAX_IMAGE_SIZE = 4 * 1024 * 1024; // 4MB

document.getElementById('imageInput').addEventListener('change', function(event) {
    const errorEl = document.getElementById('imageErrorJs');
    const previewEl = document.getElementById('preview');
    const oldImageEl = document.getElementById('oldImage');

    if (errorEl) {
        errorEl.textContent = '';
    }

    const file = event.target.files[0];
    if (!file) {
        // ファイル選択をキャンセルしたときなど
        if (previewEl) previewEl.src = '';
        if (oldImageEl) oldImageEl.style.display = '';
        return;
    }

    // サイズチェック（前者のJSロジック）
    if (file.size > MAX_IMAGE_SIZE) {
        if (errorEl) {
            errorEl.textContent = 'the image size is too large (maximum 4MB).';
        }
        event.target.value = '';
        if (previewEl) previewEl.src = '';
        if (oldImageEl) oldImageEl.style.display = '';
        return;
    }

    const reader = new FileReader();
    reader.onload = function(e) {
        if (previewEl) {
            previewEl.src = e.target.result;
        }
        // 有効な新しい画像を選んだら古い画像は隠す（後者の挙動を引き継ぎ）
        if (oldImageEl) {
            oldImageEl.style.display = 'none';
        }
    };
    reader.readAsDataURL(file);
});
</script>

@endsection
