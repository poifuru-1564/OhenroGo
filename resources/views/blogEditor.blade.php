@extends('layout.app')
@section('content')
<
<div class="content">
    <div class="filter-container">
        <!-- Categories-->
        <div class="filter-categories">
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                <div class="blog-card">
                    @csrf
                    <select name="prefecture_id" class="filter-select">
                    <option value="">---1. Select Prefecture---</option>
                    @foreach ($prefectures as $prefecture)
                        <option value="{{ $prefecture->id }}">{{ $prefecture->name}}</option>
                    @endforeach
                    </select>
                    <p style="color:red">{{ $errors->first('prefecture_id') }}</p>
                    <select name="temple_id" class="filter-select">
                        <option value="">---2. Select Temple---</option>
                        @foreach ($temples as $temple)
                            <option value="{{ $temple->id }}">{{ $temple->name}}</option>
                        @endforeach
                    </select>
                    <p style="color:red">{{ $errors->first('temple_id') }}</p>
                    <select name="status_id" class="filter-select">
                        <option value="">---3. Select Status---</option>
                        @foreach ($status as $status)
                            <option value="{{ $status->id }}">{{ $status->name}}</option>
                        @endforeach
                    </select>
                    <p style="color:red">{{ $errors->first('status_id') }}</p>
                    <select name="topic_id" class="filter-select">
                    <option value="">---4. Select Topic---</option>
                    @foreach ($topics as $topic)
                        <option value="{{ $topic->id }}">{{ $topic->name}}</option>
                    @endforeach
                    </select>
                    <p style="color:red">{{ $errors->first('topic_id') }}</p>
                    <select class="filter-select">
                    <option value="">current status: {{ auth()->user()->role->name }}</option>
                        
                    </select>
                    
                    <div class="blog-body">
                        <div class="blog-title">
                            <h2 class="textbox-3-label">Title</h2>
                            <input type="text" class="textbox-title-3"name="title" placeholder="title(dd/mm/yyyy)" value="{{ old('title') }}">
                            <p class="title__error" style="color:red">{{ $errors->first('title') }}</p>
                        </div>
                        <div class="blog-text">
                            <h2 class="textbox-3-label">Body</h2>
                            <textarea name="body" class="textbox-3" placeholder="please write your blog here">{{ old('body') }}</textarea>
                            <p class="body__error" style="color:red">{{ $errors->first('body') }}</p>
                        </div>
                            <div class="image">
                            <h2 class="textbox-3-label">Image</h2>
                            <input type="file" id="imageInput" name="image">
                            <img id="preview" style="max-width: 250px; margin-top: 10px;">
                            <p id="imageErrorJs" style="color:red"></p>
                            <p class="image__error" style="color:red">{{ $errors->first('image') }}</p>

                        </div>
                    </div>
                    <input type="submit" value="store"/>
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

    const reader = new FileReader();
    reader.onload = function(e) {
        document.getElementById('preview').src = e.target.result;
    };
    reader.readAsDataURL(file);
});
</script>

@endsection