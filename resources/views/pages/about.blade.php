<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js'></script>
    <title>Document</title>
    <style>
        .selector{
            width: 100px;
            height: 100px;
            background-color: blueviolet;
            margin: 10px;
        }
    </style>

</head>
<body>
<div class="selector"></div>
    <div class="selector"></div>

    <script > 
        gsap.fromTo('.selector',{x:0,y:1},{x:1000});
    </script>
    <h1>About page</h1>
</body>
</html>