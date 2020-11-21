<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
</head>
<body>
   <p>My name is {{$name}}</p>
    <p>My Age is {{$age}}</p>

    <form action="send" method="post">
    @crsf
    Name
    <input type="text" name="myname" id="myname">
    Age
    <input type="number" name="myage" id="myage">
    <input type="submit" value="send">
    </form> 
  


</body>
</html>