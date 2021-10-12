<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>
<body>
    <h1>Keiji Ban</h1>
    <form action="bbs.php" method="post">
        <?php if (count($errors)): ?>
            <ul class="error_list">
                <?php foreach($errors as $error): ?>
                    <li>
                        <?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?>
                    </li>
                <?php endforeach; ?>    
            </ul>
        <?php endif; ?>    
        Name: <input type="text" name="name"><br />
        Comment: <input type="text" name="comment" size="60"><br />
        <input type="submit" name="submit" value="submit">
    </form>
    
    <?php if(count($posts) > 0 ): ?>
        <ul>
            <?php foreach($posts as $post): ?>
                <li>
                    <?php echo htmlspecialchars($post['name'], ENT_QUOTES, 'UTF-8'); ?>
                    <?php echo htmlspecialchars($post['comment'], ENT_QUOTES, 'UTF-8'); ?>
                    <?php echo htmlspecialchars($post['created_at'], ENT_QUOTES, 'UTF-8'); ?>
                </li>
            <?php endforeach; ?>    
        </ul>
    <?php endif; ?>
    <?php
    
    //header('Location:http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUET_URI']);
    ?>
</body>
</html>