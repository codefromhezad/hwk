Here is a list of locations: <br>

<ul>
<?php foreach($locations as $location): ?>
	<li><?php echo e($location->name); ?></li>
<?php endforeach; ?>
</ul>