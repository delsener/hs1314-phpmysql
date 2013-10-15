<?php

# Error level
ini_set('display_errors', 1);
error_reporting(E_ALL);

# DB settings
define("DB_CONNECTION", "mysql:host=localhost;dbname=buchheim");
define("DB_USER", "murch");
define("DB_PASSWORD", "buchheim");

# debug mode
define("DEBUGGING", false);

function openDBConnection() {
	try {
		$pdo =  new PDO(DB_CONNECTION, DB_USER, DB_PASSWORD);
		if (DEBUGGING == true && $pdo != null) {
			echo 'Connection to DB established ..';
		}
		return $pdo;
	} catch(PDOException $e) {
		die ('Could not open connection to '.DB_CONNECTION);
	}
}

function validateForm() {
	return isset($_POST['title']) && isset($_POST['date']) && isset($_POST['description']);
}

function updateTaskStatus() {
	$id = $_GET['update_task_id'];
	
	$db = openDBConnection();
	
	$sql = "UPDATE TASK SET STATUS =:status WHERE ID=:id";
	$pquery = $db->prepare($sql);
	$pquery->execute(array(':status'=>1, ':id'=>$id));
	
	if (DEBUGGING == true) {
		$pquery->debugDumpParams();
		echo var_dump($db->errorinfo());
	}
}

function deleteTask() {
	$id = $_GET['delete_task_id'];

	$db = openDBConnection();

	$sql = "DELETE FROM TASK  WHERE ID=:id";
	$pquery = $db->prepare($sql);
	$pquery->execute(array(':id'=>$id));
}

function saveTask() {
	$title = $_POST['title'];
	$date = $_POST['date'];
	$description = $_POST['description'];

	$db = openDBConnection();

	if (isset($_POST['task_id'])) {
		$sql = "UPDATE TASK SET TITLE = :title, DATE = :date, DESCRIPTION = :description, STATUS = :status where ID = :id";
		$pquery = $db->prepare($sql);
		$pquery->execute(array(':title'=>$title, ':date'=>$date, ':description'=>$description, ':status'=>0, ':id'=>$_POST['task_id']));
	} else {
		$sql = "INSERT INTO TASK (TITLE, DATE, DESCRIPTION, STATUS) VALUES (:title, :date, :description, :status)";
		$pquery = $db->prepare($sql);
		$pquery->execute(array(':title'=>$title, ':date'=>$date, ':description'=>$description, ':status'=>0));
	}

	if (DEBUGGING == true) {
		$pquery->debugDumpParams();
		echo var_dump($db->errorinfo());
	}
}

function fetchTask($id) {
	$db = openDBConnection();
	
	$sql = "SELECT * FROM TASK WHERE ID = :id";
	$pquery = $db->prepare($sql);
	$pquery->execute(array(':id'=>$id));
	
	$result = $pquery->fetch(PDO::FETCH_ASSOC);
	if (DEBUGGING == true) {
		echo "task id $id";
		$pquery->debugDumpParams();
		echo var_dump($result);
		echo var_dump($db->errorinfo());
	}
	return $result;
}

function printTasks($status) {
	
	$db = openDBConnection();
	
	$sql = "SELECT * FROM TASK WHERE STATUS = :status ORDER BY DATE";
	$pquery = $db->prepare($sql);
	$pquery->execute(array(':status'=>$status));
	
	$result = $pquery->fetchAll(PDO::FETCH_ASSOC);
	if (DEBUGGING == true) {
		$pquery->debugDumpParams();
		echo var_dump($result);
		echo var_dump($db->errorinfo());
	}
	
	echo '<table id="tasklist">';
	
	$index = 0;
	foreach ($result as $row) {
		echo '<tr class="task_row'.($index % 2).'">';
		
		if ($status == 0) {
			echo '<td width="50"><a class="set_checked_link" href="index.php?update_task_id='.$row['ID'].'&checked=true"><img src="rsc/done_icon.png" alt="Done" /></a></td>';
		}
		
		echo '<td width="200px"><b>'.$row['TITLE'].'</b></td>';
		echo '<td width="100px">'.$row['DATE'].'</td>';
		
		$colspan = 2;
		if ($status == 0) {
			echo '<td><a class="modify_link" href="index.php?task_id='.$row['ID'].'">Modify</a>&nbsp;|&nbsp;<a class="modify_link" href="index.php?delete_task_id='.$row['ID'].'">Delete</a></td>';
			$colspan = 3;
		}
		
		echo '</tr><tr class="task_row'.($index % 2).'">';
		
		if ($status == 0) {
			echo '<td></td>';
		}
		
		echo '<td colspan="'.$colspan.'">'.$row['DESCRIPTION'].'</td>';
		echo '</tr>';
		$index++;
	}
	echo '</table>';
}

?>