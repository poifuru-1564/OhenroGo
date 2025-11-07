<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BlogEditor</title>
</head>
<body>

    <h1>Blog Editor</h1>
    <div>
        
    </div>
        
    <form action="/submit-blog" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="content">Content:</label>
            <textarea id="content" name="content" rows="10" required></textarea>
        </div>
        <button type="discard">Discard</button>
        <button type="post">Post</button>

</body>
</html>