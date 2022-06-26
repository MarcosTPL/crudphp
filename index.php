<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="css/style-index.css">
</head>
<style>
body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(to right, rgb(20, 147, 228), rgb(17, 54, 71));
    text-align: center;
    color: white;
}
.box{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(0, 0, 0, 0.6);
    padding: 30px;
    border-radius: 10px;
}
a{
    text-decoration: none;
    color: white;
    border: 3px solid dodgerblue;
    border-radius: 10px;
    padding: 10px;
}
a:hover{
    background-color: dodgerblue;
}
</style>
<body>
    <h1>Index</h1>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    </div>
</body>
<script src="js/index.js"></script>
</html>