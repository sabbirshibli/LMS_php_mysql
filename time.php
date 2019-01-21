<div class="pull-right">
	<i class="icon-calendar icon-large"></i>
	<?php
		$Today = date('y:m:d');
		$new = date('l, F d, Y', strtotime($Today));
		echo $new;
	?>
</div>