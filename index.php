<?php include "include/server-info.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class = "test">
        <h1>Server Info</h1>
        <ul>
            <?php foreach ($server as $name => $info): ?>
                <li> 
                    <strong><?php echo $name;?></strong>
                </li>
                <li> 
                    <strong> <?php echo $info;?></strong>
                </li>
            <?php endforeach  ?>
        </ul>
    </div>
</body>
</html>