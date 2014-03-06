<html>
<head>
<title>All Event</title>
</head>
<body>
	<h2>All Event</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<p>Found <strong><?php echo count($objects); ?></strong> objects</p>
	<table border="1" class="datatable">
	<tr><th>Sr.</th><th>Event Name</th><th>Event Description</th><th>Event DateTime</th><th>Action</th></tr>
	<?php
		$i = 1;
		foreach($objects as $obj){
			$editurl = site_url('core/c_event/edit/'.$obj->event_id);
			$deleteurl = site_url('core/c_event/delete/'.$obj->event_id);
			echo "<tr><td>{$i}</td><td>{$obj->event_name}</td><td>{$obj->event_description}</td><td>{$obj->event_datetime}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
			$i = $i+1;
		}
	?>
	</table>
</body>
</html>