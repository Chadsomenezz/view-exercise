<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mprep</title>
</head>
<body>

<h1>User Name: <?=$name;?></h1>
<h2>User Age: <?=$age;?>, Location: <?=$location;?></h2>
<h3> <?= count($hobbies); ?> Hobbies</h3>
<ul>

    <?php foreach ($hobbies as $hobby):?>

        <li><?=$hobby;?></li>

    <?php endforeach;?>

</ul>


</body>
</html>