<?php  

/* =class Mensch=
 * =__construct()= Setzen von Name und Geschlecht, sowie das Alter um 1 Jahr erhöhen
* =__destruct()= Ein Meldung, dass der Mensch gestorben ist
* =alter()= Das Alter um 1 Jahr erhöhen
* =getName()= Der Name des Menschen ausgeben
* =umbenennen()= Setzt den Namen neu des Menschen
* =geburtstagFeiern()= Erhöht das Alter um 1 Jahr und gibt eine Meldung aus
* =neueEvolutionstheorie()= Setzt den Vorfahre neu
* =getVorfahre()= Gibt den Vorfahre zurück
* Erstellen Sie eine statische Variable, um den Vorfahren als String zu speichern */
class Mensch extends Lebewesen {

	protected static $vorfahre = "Adam";

	private $name;
	private $geschlecht;

	public function __construct() {
		$this->name = "David Elsener";
		$this->geschlecht = "Männlich";
		if ($this->alter == -1) {
			$this->alter = 24;
		} else {
			$this->altern();
		}
	}
	
	public function __destruct() {
		echo '<p>'.$this->getName().' ist soeben gestorben</p>';
	}

	public function altern() {
		$this->alter++;
	}

	public function geburtstagFeiern() {
		$this->altern();
		echo $this->getName().' hat Geburtstag gefeiert und ist nun '.$this->getAlter().' Jahre alt';
	}

	public function umbenennen($name) {
		$this->name = $name;
	}

	public function neueEvolutionstheorie($vorfahre) {
		self::$vorfahre = $vorfahre;
	}

	public function getName() {
		return $this->name;
	}

	public function getVorfahre() {
		return self::$vorfahre;
	}
}