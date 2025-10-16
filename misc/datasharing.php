<?php
include_once('../config/symbini.php');
header("Content-Type: text/html; charset=".$CHARSET);
//if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/misc/aboutproject.' . $LANG_TAG . '.php'))
//include_once($SERVER_ROOT . '/content/lang/misc/aboutproject.en.php');
//else include_once($SERVER_ROOT . '/content/lang/misc/aboutproject.' . $LANG_TAG . '.php');
?>
<!DOCTYPE html>
<html lang="<?= $LANG_TAG ?>">
	<head>
		<title><?= "Data Sharing" ?></title>
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
			<b><?= "Data Sharing" ?></b>
		</div>
		<!-- This is inner text! -->
		<div role="main" id="innertext">
			<h1 class="page-heading"><?= "Data Sharing" ?></h1>

			<p>
				Electronic Supplementary Materials for our research article titled "Co-creating intergenerational knowledge about Hawaiian moi 
				(<i>Polydactylus sexfilis</i>) reproductive cycles in a changing climate" (doi: 10.1098/rspb.2025.2028) are available below:
			</p>
			<div id="innertext">
				<li>
					<a href="<?= $CLIENT_ROOT . '/content/docs/Poepoe_et_al_2025_Electronic_Supplementary_Materials.pdf'?>" target="_blank" >Tables and Figures #1-10</a>
				</li>
				<li>
					<a href="<?= $CLIENT_ROOT . '/content/docs/Supplementary_10ab_Data-Tables.xlsx'?>" target="_blank" >Raw data</a>
				</li>
				<li>
					<a href="<?= $CLIENT_ROOT . '/content/docs/FINAL_Supplementary_9_Rmarkdown.Rmd'?>" target="_blank" >R-Markdown file</a>
				</li>
			</div>

		</div>
		<?php
		include($SERVER_ROOT.'/includes/footer.php');
		?>
	</body>
</html>