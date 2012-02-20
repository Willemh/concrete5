<? defined('C5_EXECUTE') or die("Access Denied."); ?>
<?
if (!$accessType) {
	$accessType = PermissionKey::ACCESS_TYPE_INCLUDE;
}
?>
<table class="zebra-striped ccm-permission-access-list">
<tr>
	<th colspan="3">
		<a href="<?=REL_DIR_FILES_TOOLS_REQUIRED?>/permissions/access_entity?accessType=<?=$accessType?>" dialog-width="500" dialog-height="500" dialog-title="<?=t('Add Access Entity')?>" class="ccm-advanced-search-add-field dialog-launch"><span class="ccm-menu-icon ccm-icon-view"></span><?=t('Add')?></a>

	<?=t('User/Group')?></th>
</tr>
<? if (count($list) > 0) { ?>

<? foreach($list as $pa) {
	$pae = $pa->getAccessEntityObject(); 
	?>
<tr>
	<td width="100%"><?=$pae->getAccessEntityLabel()?></td>
	<td><a href="javascript:void(0)" onclick=""><img src="<?=ASSETS_URL_IMAGES?>/icons/clock<? if (is_object($pa->getPermissionDurationObject())) { ?>_active<? } ?>.png" width="16" height="16" /><a/></td>
	<td><a href="javascript:void(0)" onclick="ccm_deleteAccessEntityAssignment(<?=$pae->getAccessEntityID()?>)"><img src="<?=ASSETS_URL_IMAGES?>/icons/delete_small.png" width="16" height="16" /><a/></td>
</tr>

<? } ?>

<? } else { ?>
	<tr>
	<td colspan="3"><?=t('None')?></td>
	</tr>
<? } ?>

</table>
