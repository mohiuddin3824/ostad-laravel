<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a New Person</h1>
    <form action="/persons" method="post" enctype="multipart/form-data">
        @csrf
        <label for="name">Name:</label> <br> <br>
        <input type="text" name="name" value="mohiuddin"> <br> <br>

        <label for="name">E-mail:</label> <br> <br>
        <input type="mail" name="email" value="mohi@gmail.com"> <br> <br>
        
        <label for="image">Image:</label> <br> <br>
        <input type="file" name="image"> <br> <br>

        <input type="submit" value="submit" >
    </form>
</body>
</html>