<?php
function print_title()
{
    if (isset($_GET['id'])) {
        echo $_GET['id'];
    } else {
        echo "Welcome";
    }
}
function print_description()
{
    if (isset($_GET['id'])) {
        echo file_get_contents("data/" . $_GET['id']);
    } else {
        echo "Hello, PHP";
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
        <!--<ol>
			<?php
            print_list();
            ?>
		</ol>-->
    </div>
    <a href="create.php">create</a>
    <h2>
        <?php
        print_title();
        ?>
    </h2>
    <?php
    print_description();
    ?>
</body>

</html>
