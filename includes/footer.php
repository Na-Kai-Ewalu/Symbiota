<footer>
	<div class="logo-gallery">
		<?php
		//include($SERVER_ROOT . '/accessibility/module.php');
		?>
		<a href="https://kuahawaii.org/" target="_blank" title="<?= "KUA" ?>" aria-label="<?= "KUA" ?>">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/kua-logo.png"  alt="<?= "KUA Logo" ?>" />
		</a>
		<!--
		<a href="https://www.hawaii.edu/" target="_blank" title="<?= "University of Hawaii" ?>" aria-label="<?= "University of Hawaii" ?>">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/uni-hawaii.png"  alt="<?= "University of Hawaii Seal" ?>" />
		</a>
		<a href="https://www.stanford.edu/" target="_blank" title="<?= "Stanford University" ?>" aria-label="<?= "Stanford University" ?>">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/stanford.png"  alt="<?= "Stanford University Logo" ?>" />
		</a>
		<a href="https://www.berkeley.edu/" target="_blank" title="<?= "University of California, Berkeley" ?>" aria-label="<?= "University of California, Berkeley" ?>">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/berkeley.png"  alt="<?= "UC Berkeley Logo" ?>" />
		</a>
		-->
		<img />
		<a href="https://biodiversity.ku.edu" target="_blank" title="<?= $LANG['F_KU-BI'] ?>" aria-label="<?= $LANG['F_KU-BI'] ?>">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/ku-bi_logo.png"  alt="<?= $LANG['F_KU-BI_LOGO'] ?>" />
		</a>
		<a href="https://symbiota.org/" target="_blank" title="<?= $LANG['F_SSH'] ?>" aria-label="<?= $LANG['F_SSH'] ?>">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/SSH.png"  alt="<?= $LANG['F_SSH_LOGO'] ?>" />
		</a>
	</div>
	<p>
		<?= $LANG['F_POWERED_BY'] ?> <a href="https://symbiota.org/" target="_blank">Symbiota</a>.
	</p>
</footer>
