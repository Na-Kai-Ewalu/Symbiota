<?php
include_once('../config/symbini.php');
header("Content-Type: text/html; charset=".$CHARSET);
//if ($LANG_TAG != 'en' && file_exists($SERVER_ROOT . '/content/lang/templates/aboutproject.' . $LANG_TAG . '.php')) include_once($SERVER_ROOT . '/content/lang/templates/aboutproject.' . $LANG_TAG . '.php');
//else include_once($SERVER_ROOT . '/content/lang/templates/aboutproject.en.php');

?>
<!DOCTYPE html>
<html lang="<?php echo $LANG_TAG ?>">
	<head>
		<title><?= "Contacts"; ?></title>
		<?php

		include_once($SERVER_ROOT.'/includes/head.php');
		?>
	</head>
	<body>
		<?php
		$displayLeftMenu = false;
		include($SERVER_ROOT.'/includes/header.php');
		?>
		<div class="navpath">
			<a href="../index.php"><?= "Home" ?></a> &gt;&gt;
			<b><?= "Contacts" ?></b>
		</div>
		<!-- This is inner text! -->
		<div role="main" id="innertext">
			<h1 class="page-heading"><?= "Contacts" ?></h1>

			<p></p>

		</div>
		<?php
		include($SERVER_ROOT.'/includes/footer.php');
		?>
	</body>
</html>