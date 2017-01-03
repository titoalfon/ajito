<?php 
include 'functions.php';
$jsonString = file_get_contents('data.json');
$data = json_decode($jsonString, true);

	foreach($data as $task) {
?>
    <tr>
        <td><?php echo $task['name'] ;?></td>
        <td><?php echo date_nice($task['date_start']) ;?></td>
        <td><?php echo $task['date_end'] ;?></td>
        <td>
        	<?php
				if($task['date_end'] == "") {
					echo time_nice(time() - $task['date_start']);	
				} else {
					echo time_nice($task['date_end'] - $task['date_start']);	
				}
			?>
        </td>
        <td><button type="submit" class="btn btn-primary"><?php echo i('stop'); ?></button></td>
        <td><button type="submit" class="btn btn-danger"><?php echo i('times'); ?></button></td>
    </tr>
<?php  } ?>
