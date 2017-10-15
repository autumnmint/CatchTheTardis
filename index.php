<!DOCTYPE html>
<html>
<head>
	<title>CATCH THE TARDIS</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<body class="body-with-image">
		<nav class="top-menu">
		<a class="top-menu__logo" href="index.php"><p>CATCH THE TARDIS</p></a>
            <?php
                require ('php/menu.php');
                echo Menu::getMenu($_GET['page']);
            ?>
		</nav>
        <?php
            require ('php/content.php');
            echo Content::getPage($_GET['page']);
        ?>
		</body>
		</html>
