<html>
<head>
<title>

</title>
</head>
<body>
<div class="container">
    <form action="/posts/insert" method="POST">
        <div class="mt-5">
            <label class="form-label">Title</label>
            <input name="title" type="text" class="form-control" >
        </div>
        <div class="mt-3">
            <label for="exampleFormControlTextarea1" class="form-label">Content</label>
            <textarea name="content" class="form-control" rows="3"></textarea>
        </div>
        <div class="mt-3">
            <input class="btn btn-primary" type="submit" value="Создать">
        </div>
    </form>
</div>
</body>
</html>