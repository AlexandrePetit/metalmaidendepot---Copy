<section class="edit_metal_maiden">
<?php
if (isset($tank) && $method != 'POST')
{
	?>
	<form class="form-horizontal" action="<?php echo link_to_route("edit_metal_maiden"); ?>" method="post" enctype="multipart/form-data">
		<?php
		require_once("forms/profile.php");
		require_once("forms/statistics.php");
		require_once("forms/lifestyle.php");
		require_once("forms/equipment.php");
		require_once("forms/quote.php");
		?>
		<input type="hidden" name="edit_tank" value="<?php echo $tank->getTank_slug(); ?>" />
		
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<button type="submit" class="btn btn-primary">Update Metal Maiden</button>
			</div>
		</div>
	</form>
	<?php
}
?>
</section>