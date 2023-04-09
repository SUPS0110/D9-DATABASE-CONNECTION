<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./add.css">
</head>
<body>
    <form method="get" action="create.php">
<div class="title"><label>Title:</label><input type="text" name="title" placeholder="enter the title" required></div>
<div class="rating"><label>Rating:</label><input type="number" min="1" max="5" name="rating" required></div>
<div class="desc"><label>Description:</label><textarea type="text" name="description" placeholder="description" required></textarea></div>
<div class="submit"><button type="submit">ADD</button></div>
</form>
</body>
</html>