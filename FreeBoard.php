<?php
function print_title()
{
    if (isset($_GET['id'])) {
        echo $_GET['id'];
    } else {
        echo "Welcome";
    }
}
function print_list()
{

    $list = scandir('./data');
    $i = 0;
    while ($i < count($list)) {
        if ($list[$i] != '.') {
            if ($list[$i] != '..') {
                echo "<li><a href=\"View.php?id=$list[$i]\">$list[$i]</a></li>";
            }
        }
        $i = $i + 1;
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
        <ol>
            <?php
            print_list();
            ?>
        </ol>
    </div>
    <h1 id="create">
        <a href="create.php">글 작성</a>
    </h1>
</body>

</html>