<!doctype html>
<html>
<head>
<title>File upload</title>
</head>
<body>

    <form method="POST" action="/upload" enctype="multipart/form-data">
    @csrf
  
   upload file: <input type="file" name="fname"><br>

   <input type="submit" name="send" value="upload">

    </form>
</body>
</html>
