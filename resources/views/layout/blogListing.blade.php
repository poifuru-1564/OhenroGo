@extends('layout.app')
@section('content')

<div class="content">
  <div class="filter-container">
    <!-- Categories-->
    <div class="filter-categories">
      <form method="post" class="filter-form" action="{{ route('post.filter') }}">
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

        <button type="submit" class="filterbtn">Filter</button>

      </form>
    </div>
  </div>

    <!-- Page content-->
    @yield('posts-content')
    @yield('welcome-content')



</div>

@endsection
