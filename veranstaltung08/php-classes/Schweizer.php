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
class Schweizer extends Mensch {

	public function umbenennen($name) {
		$this->behoerdengang();
	}

	public function behoerdengang() {
		// geduldsfaden immer gerissen
		throw new Exception('Sorry, Geduldsfaden gerissen!');
	}
}