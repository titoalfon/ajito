<?php 
include 'functions.php';
$jsonString = file_get_contents('data.json');
$data = json_decode($jsonString, true);
krsort($data);

switch($_GET['mode']) {
	
	case "remove":
		$id = $_GET['id'];
		$data[$id]['status'] = 2;
		save($data);
		break;
	
	case "stop":
		$id = $_GET['id'];
		$data[$id]['date_end'] = time();
		save($data);
		break;
	
	case "new":
		$time = time();
		$data[$time]['id'] = $time;
		$data[$time]['name'] = $_GET['name'];
		$data[$time]['date_start'] = $time;
		$data[$time]['date_end'] = '';
		$data[$time]['status'] = 1;
		save($data);
		break;
	
	case "tally":
		$count = 0;
		foreach($data as $task) {
			$count  += $task['date_end'] - $task['date_start'];
		}
		echo time_nice($count);
		break;
	
	case "build":
		foreach($data as $task) {
			if($task['status'] == 1) {
			
			 ?>
	
		<tr>
			<td><?php echo $task['name'] ;?></td>
			<td><?php echo date_nice($task['date_start']) ;?></td>
			<td><?php if($task['date_end'] != "") echo date_nice($task['date_end']) ;?></td>
			<td>
				<?php
					if($task['date_end'] == "") {
						echo time_nice(time() - $task['date_start']);	
					} else {
						echo time_nice($task['date_end'] - $task['date_start']);	
					}
				?>
			</td>
			<td><button type="submit" data-id="<?=$task['id']?>" class="btn btn-primary btn-stop"><?php echo i('stop'); ?></button></td>
			<td><button type="submit" data-id="<?=$task['id']?>" class="btn btn-danger btn-remove"><?php echo i('times'); ?></button></td>
		</tr>
	<?php } } 
		break;
	
	
	}
    ?>
	
		

