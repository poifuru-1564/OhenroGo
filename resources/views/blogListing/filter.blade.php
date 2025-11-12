@extends('blogListing')
@section('posts-content')

{{-- <div class="content">


  <div class="category-container">
    <!-- Categories-->
    <div class="categories">
      <form method="post" class="filter-form" action="{{ route('post.filter') }}">

        <select name="prefecture_id" onchange="this.form.submit()">
          <option value="">---Select Prefecture---</option>
          @foreach ($prefectures as $prefecture)
              <option value="{{ $prefecture->id }}">{{ $prefecture->name}}</option>
          @endforeach
        </select>

        <select name="temple_id" id="temple">
            <option value="">---Select Temple---</option>
            @foreach ($temples as $temple)
                <option value="{{ $temple->id }}">{{ $temple->name}}</option>
            @endforeach
        </select>


        <select name="status_id" id="">
            <option value="">---Select Status---</option>
            @foreach ($status as $status)
                <option value="{{ $status->id }}">{{ $status->name}}</option>
            @endforeach
        </select>


        <select name="topic_id" id="">
          <option value="">---Select Topic---</option>
          @foreach ($topics as $topic)
              <option value="{{ $topic->id }}">{{ $topic->name}}</option>
          @endforeach
        </select>


        <select name="role_id" id="">
          <option value="">---Select Role---</option>
          @foreach ($roles as $role)
              <option value="{{ $role->id }}">{{ $role->name}}</option>
          @endforeach
        </select>

      </form>
    </div>
  </div>

  <div class="post-container">
    <!-- Page content--> --}}
    <div class="blog-listing-content">
      <!-- Blog entries-->
      <!-- Blog post cards-->

      @foreach ($posts as $post)
        
        <div class="blog-card">
          <div class="blog-card-header">
            <div class="userID">{{ $post->user }}</div>
            <div class="date">{{ $post->created_at }}</div>
          </div>

          <div class="blog-body">
            <h2 class="blog-title">{{ $post->title }}</h2>
            <div class="post-categories" type="box">
              <box class="post-category" type="box">{{ $post->temple }}</box>
              <box class="post-category" type="box">{{ $post->prefecture }}</box>
              <box class="post-category" type="box">{{ $post->status }}</box>
              <box class="post-category" type="box">{{ $post->topic }}</box>
              <box class="post-category" type="box">{{ $post->user->role }}</box>
            </div>
            <p class="blog-text">{{$post->body}}</p>
            <img
              class="card-img-top"
              src="{{ asset( $post->photo_path ) }}"
              alt="..."
            />
          </div>
          {{-- <div class="likes">Liked by</div> --}}
        </div>
      @endforeach
      
    </div>
  {{-- </div>


</div> --}}

@endsection