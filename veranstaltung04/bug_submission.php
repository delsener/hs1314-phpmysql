<!DOCTYPE html>
<html>
<head>
	<title>Submit us your Bug!</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="styles/style.css" type="text/css" media="all" />
</head>
<body>
	<h2>Bitte melde deinen Bug mit diesem Formular</h2>
	
	<?php 
		require 'filebug.php';
		
		# handle form submission
		if (isset($_POST["form_submitted"])) {
			$errors = array();
			
			# validate form data
			$validation = validatePassword();
			if ($validation == false) {
				echo '<p class="error">Das eingegebene Passwort ist ungültig.</p>';
			} else {
				sendBugReport();
			}
		}
	?>
	
	<form class="form" action="#" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="form_submitted" id="form_submitted" value="form_submitted" />
		
		<p class="name">
			<input type="text" name="name" id="name" placeholder="John Doe"  required="required" />
			<label for="name">Name</label>
		</p>
		
		<p class="email">
			<input type="email" name="email" id="email" placeholder="mail@example.com"   required="required" />
			<label for="email">Email</label>
		</p>
		
		<p class="web">
			<input type="text" name="web" id="web" placeholder="www.example.com"   required="required"/>
			<label for="web">Betreffende Website</label>
		</p>		
	
		<p class="text">
			<textarea name="text" placeholder="Fehlerreport"  required="required" /></textarea>
		</p>
		
		<p class="slider">
			<input type="range"  name="priority" id="priority" min="1" max="5" required="required"  />
			<label for="priority">Priorität</label>
		</p>
		
		<p class="dropdown">
			<select name="bugtype" id="bugtype" onChange="combo(this, 'bugtype')">
			  <option>Connection/Availablity</option>
			  <option>Design</option>
			  <option>Usability</option>
			</select>
			<label for="bugtype">Bug-Typ</label>
		</p>
		
		<p class="checkbox">
			<input type="checkbox" name="callback" id="callback" value="callback_needed" />
			<label for="callback">Rückruf erforderlich</label>
		</p>
		
		<p class="radiobutton">
			<input type="radio" name="repro" value="NOT_REPRODUCABLE">
			<label for="repro">Nicht reproduzierbar</label>
		</p>
		<p class="radiobutton">
    		<input type="radio" name="repro" value="RANDOM">
    		<label for="repro">Fehler tritt zufällig auf</label>
    	</p>
    	
    	<p class="radiobutton">
    		<input type="radio" name="repro" value="REPRODUCABLE">
    		<label for="repro">Kann in jedem Fall reproduziert werden</label>
		</p>
		
		<p class="file">
			<input type="file" name="file" id="file"  required="required" />
			<label for="file">File-Upload</label>
		</p>
		
		<p class="password">
			<input type="password" name="password" id="password" required="required" />
			<label for="password">Passwort</label>
		</p>
		
		<p class="submit">
			<input type="submit" value="Senden" />
		</p>
	</form>

</body>
</html>