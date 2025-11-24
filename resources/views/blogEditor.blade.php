@extends('layout.app')
@section('content')

{{-- Create new Post --}}

<div class="content">
    <div class="filter-container">
        <!-- Categories-->
        <div class="filter-categories">
            <h2 class="createNew-header">Create New Post</h2>
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="newPostForm">
                <div class="blog-card">
                    <div class="select-container">
                        <h5 class="select-container-header">Select All</h5>
                        @csrf
                        <select name="prefecture_id" class="filter-select">
                            <option value="">---1. Select Prefecture---</option>
                            @foreach ($prefectures as $prefecture)
                                <option value="{{ $prefecture->id }}" 
                                    {{ old('prefecture_id') == $prefecture->id ? 'selected' : '' }}>
                                    {{ $prefecture->name }}
                                </option>
                            @endforeach
                        </select>

                        <select name="temple_id" class="filter-select">
                            <option value="">---2. Select Temple---</option>
                            @foreach ($temples as $temple)
                                <option value="{{ $temple->id }}"
                                    {{ old('temple_id') == $temple->id ? 'selected' : '' }}>
                                    {{ $temple->name }}
                                </option>
                            @endforeach
                        </select>
                        <select name="status_id" class="filter-select">
                            <option value="">---3. Select Status---</option>
                            @foreach ($status as $s)
                                <option value="{{ $s->id }}"
                                    {{ old('status_id') == $s->id ? 'selected' : '' }}>
                                    {{ $s->name }}
                                </option>
                            @endforeach
                        </select>
                        <select name="topic_id" class="filter-select">
                            <option value="">---4. Select Topic---</option>
                            @foreach ($topics as $topic)
                                <option value="{{ $topic->id }}"
                                    {{ old('topic_id') == $topic->id ? 'selected' : '' }}>
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
                    
                    <div class="blog-body">
                        <div class="blog-title">
                            <h2 class="textbox-3-label">Title</h2>
                            <input
                                type="text"
                                class="textbox-title-3"
                                name="title"
                                placeholder="Title (dd/mm/yyyy)"
                                value="{{ old('title') }}"
                            >
                            <p class="errorMessage" style="color:red; margin-top: 0.5rem;">
                                {{ $errors->first('title') }}
                            </p>
                        </div>

                        {{-- Body --}}
                        <div class="blog-text newPost-body">
                            <h2 class="textbox-3-label">Body</h2>
                            <textarea
                                name="body"
                                class="textbox-3"
                                placeholder="please write your blog here"
                                rows="6"
                            >{{ old('body') }}</textarea>
                            <p class="errorMessage" style="color:red; margin-top: 0.5rem;">
                                {{ $errors->first('body') }}
                            </p>
                        </div>

                        {{-- Image --}}
                        <div class="image">
                            <h2 class="textbox-3-label">Image</h2>
                            <input type="file" id="imageInput" name="image">
                            <img id="preview" style="max-width: 250px; margin-top: 10px;">

                            {{-- JS 用エラー表示（前者のやり方） --}}
                            <p id="imageErrorJs" style="color:red"></p>
                            {{-- バリデーションエラー（前者のやり方） --}}
                            <p class="image__error" style="color:red">
                                {{ $errors->first('image') }}
                            </p>
                        </div>
                    </div>

                    <input type="submit" value="Share" class="btn" style="margin-top: 10px"/>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
const MAX_IMAGE_SIZE = 4 * 1024 * 1024; // 4MB

document.getElementById('imageInput').addEventListener('change', function(event) {
    const errorEl = document.getElementById('imageErrorJs');
    if (errorEl) {
        errorEl.textContent = '';
    }

    const file = event.target.files[0];
    if (!file) {
        return;
    }

    // サイズチェック（前者JS）
    if (file.size > MAX_IMAGE_SIZE) {
        if (errorEl) {
            errorEl.textContent = 'the image size is too large (maximum 4MB).';
        }
        event.target.value = '';
        const previewEl = document.getElementById('preview');
        if (previewEl) {
            previewEl.src = '';
        }
        return;
    }

    // プレビュー表示（後者の見た目そのまま＋前者ロジック）
    const reader = new FileReader();
    reader.onload = function(e) {
        const previewEl = document.getElementById('preview');
        if (previewEl) {
            previewEl.src = e.target.result;
        }
    };
    reader.readAsDataURL(file);
});
</script>

@endsection
