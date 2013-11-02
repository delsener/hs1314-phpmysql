<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ZHAW Mysql/PHP Modul - Veranstaltung 08">
    <meta name="author" content="delsener">

    <title>ZHAW Mysql/PHP - Selbststudium 08</title>
  </head>

  <body>
	<?php 
		require 'php/db_config.php';
		require 'php-classes/Lebewesen.php';
		require 'php-classes/Mensch.php';
		require 'php-classes/Schweizer.php';
		require 'php-classes/PostTableGateway.php';
		require 'php-classes/Post.php';
		
		echo '<h1>Aufgabe 3: Anweisungen ausführen</h1>';
		
		$mensch = new Mensch();
		echo '<p>Name von Mensch: '.$mensch->getName().' </p>';
		$mensch->umbenennen('John Wayne');
		echo '<p>Neuer Name von Mensch: '.$mensch->getName().' </p>';
		echo '<p>'.$mensch->getName().' ist '.$mensch->getAlter().' Jahre alt</p>';
		if ("Mensch" == get_class($mensch)) {
			echo '<p>'.$mensch->getName().' ist ein Mensch</p>';
		} else {
			echo '<p>'.$mensch->getName().' ist kein Mensch</p>';
		}
		echo '<p>Der Vorfahre von '.$mensch->getName().' heisst '.$mensch->getVorfahre().'</p>';
		$mensch->neueEvolutionstheorie("Alien");	
		echo '<p>Der Vorfahre von '.$mensch->getName().' heisst '.$mensch->getVorfahre().'</p>';
		
		$bankangestellter = new Schweizer();
		try {
			$bankangestellter->umbenennen("neuer name");
		} catch (Exception $e) {
			echo '<p>Exception abgefangen: ',  $e->getMessage(), "</p>";
		}
		
		echo '<h1>Aufgabe 4: RowDataGateway-Pattern erweitern: Isolation ohne Transaktionen gegeben sind</h1>';
		
		# create new post entries with table gateway
		$tableGateway = new PostTableGateway;
		
		# clear all rows first
		foreach ($tableGateway->findAll() as $post) {
			$tableGateway->delete($post);
		}
		
		$entry1 = new Post;
		$entry1->setCreated("2013-10-24");
		$entry1->setTitle("Entry 1 created with row gateway.");
		$entry1->setContent("Some content of entry 1.");
		
		$entry1->create();
		
		# print all rows
		echo '<p>Current entries in database: </p>';
		echo '<table border="1">';
		echo '<tr><th>Created</th><th>Title</th><th>Content</th><th>Current Version</th></tr>';
		foreach ($tableGateway->findAll() as $post) {
			echo '<tr>';
			echo '<td>'.$post->getCreated().'</td>';
			echo '<td>'.$post->getTitle().'</td>';
			echo '<td>'.$post->getContent().'</td>';
			echo '<td>'.$post->getCurrentVersion().'</td>';
			echo '</tr>';
		}
		echo '</table>';
		
		$entry1_2 = new Post();
		$entry1_2->findById($entry1->getId());
		
		# update entry 1 with first ref, and then try the same with entry 1 with the second ref
		$entry1->setTitle("I am the new title.");
		$entry1_2->setTitle("No, I am the right new title.");
		
		$entry1->update();
		
		try {
			$entry1_2->update();
		} catch (Exception $e) {
			echo '<p>Exception abgefangen: ',  $e->getMessage(), "</p>";
		}
		
		# print all rows
		echo '<p>Current entries in database: </p>';
		echo '<table border="1">';
		echo '<tr><th>Created</th><th>Title</th><th>Content</th><th>Current Version</th></tr>';
		foreach ($tableGateway->findAll() as $post) {
			echo '<tr>';
			echo '<td>'.$post->getCreated().'</td>';
			echo '<td>'.$post->getTitle().'</td>';
			echo '<td>'.$post->getContent().'</td>';
			echo '<td>'.$post->getCurrentVersion().'</td>';
			echo '</tr>';
		}
		echo '</table>';
		
	?>
  </body>
</html>
