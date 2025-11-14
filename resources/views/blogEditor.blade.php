@extends('layout.app')
@section('content')


    <h1 class="header1">Blog Editor</h1>
    <form action="/posts" method="POST" enctype="multipart/form-data">
        @csrf
        <select name="prefecture_id" class="filter-select">
          <option value="">---Select Prefecture---</option>
          @foreach ($prefectures as $prefecture)
              <option value="{{ $prefecture->id }}">{{ $prefecture->name}}</option>
          @endforeach
        </select>

        <select name="temple_id" class="filter-select">
            <option value="">---Select Temple---</option>
            @foreach ($temples as $temple)
                <option value="{{ $temple->id }}">{{ $temple->name}}</option>
            @endforeach
        </select>


        <select name="status_id" class="filter-select">
            <option value="">---Select Status---</option>
            @foreach ($status as $status)
                <option value="{{ $status->id }}">{{ $status->name}}</option>
            @endforeach
        </select>


        <select name="topic_id" class="filter-select">
          <option value="">---Select Topic---</option>
          @foreach ($topics as $topic)
              <option value="{{ $topic->id }}">{{ $topic->name}}</option>
          @endforeach
        </select>


        <select name="role_id" class="filter-select">
          <option value="">---Select Role---</option>
          @foreach ($roles as $role)
              <option value="{{ $role->id }}">{{ $role->name }}</option>
          @endforeach
        </select>

        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" placeholder="dd/mm" required>
        </div>

        <div>
            <label for="body">Content:</label>
            <textarea id="body" name="body" placeholder="text here" rows="10" required></textarea>
        </div>

        <input type="file" id="image" name="image" accept="image/*" required>
        <button class="discard-button" type="discard">Discard</button>
        <button class="post-button" type="post">Post</button>
    </form>
        {{-- <div class="blog-body">
            <div class="editor-categories">
                <button class="category-toggle-button" type="button" >Prefectures</button>
                <button class="category-toggle-button" type="button" >Location</button>
                <button class="category-toggle-button" type="button" >Status</button>
                <button class="category-toggle-button" type="button" >Topic</button>
                <button class="category-toggle-button" type="button" >User Role</button>
            </div>
            <ul id="category-list"></ul>
            <form action="title/content" method="POST">
        @csrf

        <div>
            <label for="content">Content:</label>
            <textarea id="content" name="content" placeholder="text here" rows="10" required></textarea>
        </div>
        
            <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                                
        </div>
        
    </div>
    <form action="addImage" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="image">Upload Image:</label>
            <input type="file" id="image" name="image" accept="image/*" required>
        </div>
        <button class="add-image-button" type="submit">Click here to add Image</button>
    </form>
</div>
</div>
    <div class="likes">
    <form action="/submit-blog" method="POST">
        @csrf

    </form>
    </div> --}}

@endsection
