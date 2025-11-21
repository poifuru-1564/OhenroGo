@extends('layout.filter_layout')
@section('posts-content')

<style>

  .userProfilebtn-icon{
    max-height: 100%;
    max-width: 100%;
    padding-right: 10px;
  }

  .userProfilebtn{
    height: 40px;
  }
</style>

<div class="post-container">
    <div class="blog-listing-content">

      @foreach ($posts as $post)
        
        <div class="blog-card">
          <div class="blog-card-header">
            <div class="userID">
              <a href="{{ route('profile', $post->user) }}">
                <button class="userProfilebtn">
                  @if ($post->user->role->name == 'Pilgrims')
                    <img src="{{ asset('img/pilgrim_icon.png') }}" alt="" class="userProfilebtn-icon">
                  @elseif ($post->user->role->name == 'Locals')
                    <img src="{{ asset('img/local_icon.png') }}" alt="" class="userProfilebtn-icon">
                  @else
                    <img src="{{ asset('img/hotel_icon.png') }}" alt="" class="userProfilebtn-icon">
                  @endif
                  
                  {{ $post->user->name }}
                </button>
              </a>
            </div>

            <div class="date">{{ $post->created_at }}</div>
          </div>

          <div class="blog-body">
            <h2 class="blog-title">{{ $post->title }}</h2>
            <ul class="post-category-container">
              <li class="post-category">{{ $post->temple->name}}</li>
              <il class="post-category">{{ $post->prefecture->name }}</il>
              <li class="post-category">{{ $post->status->name }}</li>
              <li class="post-category">{{ $post->topic->name }}</li>
              <li class="post-category">{{ $post->user->role->name }}</li>
            </ul>
            <p class="blog-text">{{$post->body}}</p>

            @if ($post->photo_path != null)
            <img
              class="card-img-top"
              src="{{ asset($post->photo_path) }}"
              alt="Image"
            />
            @endif
          </div>
        </div>
      @endforeach
  </div>
</div>
@endsection