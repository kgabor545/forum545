<?php
    $fileName = 'data.json';
    if (file_exists($fileName)) {
        $jsonString = file_get_contents($fileName);
        $topics = json_decode($jsonString);
    } else {
        $topics = [];
    }
    $szoveg = '';
    if (isset($_POST['topic'])) {
        array_push($topics, $_POST['topic']);
        $JsonString = json_encode($topics);
        $szoveg = $JsonString;
        file_put_contents($fileName,$JsonString);
    }

?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
</head>
<body>
    <?php
    echo $szoveg;
    ?>
    <h1>Témák:</h1>
    <form method="POST">
        <input type="text" name="topic">
        <input type="submit" value="Add">
    </form>
</body>
</html>