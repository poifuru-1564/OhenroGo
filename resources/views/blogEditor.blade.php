@extends('layout.app')

@section('content')


    <h1 class="header1">Blog Editor</h1>
    <div class="blog-listing-content">
    <div class="blog-card">
        <div class="blog-card-header">
            
        </div>
            
        
        <div class="blog-body">
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
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" placeholder="dd/mm" required>
        </div>
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
        <button class="discard-button" type="discard">Discard</button>
        <button class="post-button" type="post">Post</button>
    </form>
    </div>

<<<<<<< HEAD
@endsection
=======
</body>
<script>
document.querySelectorAll('.category-toggle-button').forEach(btn => {
  btn.addEventListener('click', async () => {
    const category = btn.dataset.category; // 'prefectures' など
    const res = await fetch(`/api/editor/categories/${category}`);
    if (!res.ok) { alert('取得に失敗しました'); return; }
    const items = await res.json();

    const ul = document.getElementById('category-list');
    ul.innerHTML = '';
    items.forEach(row => {
      const li = document.createElement('li');
      li.textContent = `${row.id}: ${row.name}`;
      ul.appendChild(li);
    });
  });
});
</script>

</html>
>>>>>>> f9f9c64 (ブログエディタにカテゴリリストを追加し、APIエンドポイントを設定)
