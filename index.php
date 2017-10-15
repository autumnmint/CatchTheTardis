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
            $page_number = isset($_GET['page']) ? $_GET['page'] : 0;
            echo Menu::getMenu($page_number);
            ?>
		</nav>
        <?php
            require ('php/content.php');
            $page_number = isset($_GET['page']) ? $_GET['page'] : 0;
            Content::getPage($page_number);
        ?>
		</body>
		</html>
