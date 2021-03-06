<fieldset class="personalblock" id="migration-settings-block">
	<h2><?php p($l->t('Account Export/Import'));?></h2>
	<?php if(isset($_['error'])) { ?>
		<h3><?php p($_['error']['error']); ?></h3>
		<p><?php p($_['error']['hint']); ?></p>
		<?php } ?>
	<button id="exportbtn">Export<img class="loadingexport" src="<?php print_unescaped(OCP\Util::imagePath('core', 'loading.gif')); ?>" /></button><br/>
	<form id="import" action="#" method="post" enctype="multipart/form-data">
		<input type="hidden" name="requesttoken" value="<?php p($_['requesttoken']) ?>" id="requesttoken">
		<input type="file" id="import_input" name="owncloud_import">
	</form>
	<button id="importbtn">Import<img class="loadingimport" src="<?php print_unescaped(OCP\Util::imagePath('core', 'loading.gif')); ?>" /></button>
</fieldset>

