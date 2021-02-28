<?php
function print_title()
{
    if (isset($_GET['id'])) {
        echo $_GET['id'];
    } else {
        echo "Welcome";
    }
}

?>


<!doctype html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="Css.css" />
    <title>
        <?php
        print_title();
        ?>
    </title>
</head>

<body>
    <div class="top">
        <h1>
            <a href="index.php">홈</a>
            <a href="FreeBoard.php">자유게시판</a>
        </h1>
    </div>
    <div class="middle">
        <form action="create_process.php" method="post" form>
            <input type="text" name="title"><br>
            <textarea name="description"></textarea><br>
            <input type="submit">
        </form>
    </div>
    <h1 id="create">
        <a href="create.php">글 작성</a>
    </h1>
</body>

</html>