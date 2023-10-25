<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <div>
                <a href="./exercise.blade.php">Exercise</a>

                <a aria-current="page" href="./home.blade.php">Home</a>


            </div>
        </nav>
    </header>
    <h1>{{$title}}</h1>
    <p>{{$text}}</p>
    <p><small>{{$bonus}}</small></p>
</body>

</html>