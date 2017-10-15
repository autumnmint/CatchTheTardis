<?php
$page_number = isset($_GET['page']) ? $_GET['page'] : 0;
?>
<!DOCTYPE html>
<html>
<head>
	<title>CATCH THE TARDIS</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
<?php
if($page_number == 1) {
    echo '<body class="body-without-image">';
}
else {
    echo '<body class="body-with-image">';
}
?>
		<nav class="top-menu">
		<a class="top-menu__logo" href="index.php"><p>CATCH THE TARDIS</p></a>
            <ul class="menu-main">
            <?php
                require ('php/menu.php');
            echo Menu::getMenu($page_number);
            ?>
            </ul>
		</nav>
        <?php
            require ('php/content.php');
            Content::getPage($page_number);
        ?>
		</body>
		</html>
