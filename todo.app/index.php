<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ZHAW Mysql/PHP Modul - Todo App">
    <meta name="author" content="delsener">
    <link rel="shortcut icon" href="bootstrap/assets/ico/favicon.png">

    <title>ZHAW Mysql/PHP - Todo App</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this bootstrap template -->
    <link href="css/todoapp.css" rel="stylesheet">
    
	<?php 
		require 'php/todo.php';
		
		if (isset($_POST['form_create_submitted'])) {
			if (validateForm() == true) {
				saveTask();
			}
		}
		
		if (isset($_GET['checked']) && isset($_GET['update_task_id'])) {
			updateTaskStatus();
		}
		
		if (isset($_GET['delete_task_id'])) {
			deleteTask();
		}
	?>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <span class="navbar-brand">ZHAW Mysql/PHP - Selbststudium</span>
        </div>
        <div class="navbar-collapse collapse navbar-right">
            <span class="navbar-author">delsener</span>
         </div>
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Todo App</h1>
        <p>A small todo app written in PHP using a MySql database to store the todos.</p>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h2>Todo</h2>
          <?php printTasks(0) ?>
        </div>
        <div class="col-lg-5">
          <h2>Done</h2>
           <?php printTasks(1) ?>
       </div>
      </div>
      <div class="row">
        <div class="col-lg-5">
          
          
          <?php 
          	$id = null;
          	$title = null;
          	$date = null;
          	$description = null;
          	if (isset($_GET['task_id'])) {
          		$task = fetchTask($_GET['task_id']);
          		$id = $task['ID'];
          		$title = $task['TITLE'];
          		$date = $task['DATE'];
          		$description = $task['DESCRIPTION'];
          		$status = $task['STATUS'];
          		
          		echo "<h2>Modify task $id</h2>";
          	} else {
          		echo "<h2>Create new task</h2>";
          	}
          ?>
          
          <form action="index.php?modify" method="POST">
          	<input type="hidden" name="form_create_submitted" id="form_create_submitted" value="create" />
          	<input type="hidden" name="task_id" id="task_id" value="<?php echo $id ?>" />
          
          	<label for="title">Title</label>
          	<input type="text" maxlength="100" name="title" id="title" value="<?php echo $title ?>" placeholder="Some tasks title" required="required" />
          	<br>
          	<label for="date">Date</label>
          	<input type="date" name="date" id="date" value="<?php echo $date ?>" placeholder="14.10.2013" required="required" />
          	<br>
          	<label for="description">Description</label>
          	<textarea rows="5" cols="50" type="description" name="description" id="description" placeholder="Some details describing the task ..." required="required"><?php echo $description ?></textarea>
          	
          	<br>
          	<input type="submit" class="btn btn-default" value="Save task" name="submit" id="submit" />
          </form>
        </div>
      </div>

      <hr>

      <footer>
        <small>ZHAW - delsener</small>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/assets/js/jquery.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
