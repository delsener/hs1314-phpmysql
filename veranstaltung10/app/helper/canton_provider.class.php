<?php
// singleton instance for the canton provider
class CantonProvider {
	
	// singleton stuff
	private static $instance;
	
	public static function getInstance() {
		if (self::$instance == null) {
			self::$instance = new CantonProvider;
		}
		return self::$instance;
	}
	
	private function __construct(){}
	private function __clone(){}
	
	// static canton array
	private static $cantons = array (
			0 =>
			array (
					'ID' => 'ZH',
					'Kanton' => 'Zürich',
					'Standesstimme' => '1',
					'Beitritt' => 1351,
					'Hauptort' => 'Zürich',
					'Einwohner' => '1392396',
					'Ausländer 2' => '24,9 %',
					'Fläche 3' => '1729',
					'Dichte 4' => '805',
					'Gemeinden 6' => 171,
					'Amtssprache' => 'deutsch',
			),
			1 =>
			array (
					'ID' => 'BE',
					'Kanton' => 'Bern',
					'Standesstimme' => '1',
					'Beitritt' => 1353,
					'Hauptort' => 'Bern',
					'Einwohner' => '985046',
					'Ausländer 2' => '13,7 %',
					'Fläche 3' => '5959',
					'Dichte 4' => '165',
					'Gemeinden 6' => 382,
					'Amtssprache' => 'deutsch, französisch',
			),
			2 =>
			array (
					'ID' => 'LU',
					'Kanton' => 'Luzern ',
					'Standesstimme' => '1',
					'Beitritt' => 1332,
					'Hauptort' => 'Luzern',
					'Einwohner' => '381966',
					'Ausländer 2' => '16,8 %',
					'Fläche 3' => '1493',
					'Dichte 4' => '256',
					'Gemeinden 6' => 87,
					'Amtssprache' => 'deutsch',
			),
			3 =>
			array (
					'ID' => 'UR',
					'Kanton' => 'Uri ',
					'Standesstimme' => '1',
					'Beitritt' => 12917,
					'Hauptort' => 'Altdorf',
					'Einwohner' => '35382',
					'Ausländer 2' => '10,6 %',
					'Fläche 3' => '1077',
					'Dichte 4' => '33',
					'Gemeinden 6' => 20,
					'Amtssprache' => 'deutsch',
			),
			4 =>
			array (
					'ID' => 'SZ',
					'Kanton' => 'Schwyz ',
					'Standesstimme' => '1',
					'Beitritt' => 12917,
					'Hauptort' => 'Schwyz',
					'Einwohner' => '147904',
					'Ausländer 2' => '19,3 %',
					'Fläche 3' => '908',
					'Dichte 4' => '163',
					'Gemeinden 6' => 30,
					'Amtssprache' => 'deutsch',
			),
			5 =>
			array (
					'ID' => 'OW',
					'Kanton' => 'Obwalden',
					'Standesstimme' => '0,5',
					'Beitritt' => 12917,
					'Hauptort' => 'Sarnen',
					'Einwohner' => '35878',
					'Ausländer 2' => '13,8 %',
					'Fläche 3' => '491',
					'Dichte 4' => '73',
					'Gemeinden 6' => 7,
					'Amtssprache' => 'deutsch',
			),
			6 =>
			array (
					'ID' => 'NW',
					'Kanton' => 'Nidwalden ',
					'Standesstimme' => '0,5',
					'Beitritt' => 12917,
					'Hauptort' => 'Stans',
					'Einwohner' => '41311',
					'Ausländer 2' => '12,4 %',
					'Fläche 3' => '276',
					'Dichte 4' => '150',
					'Gemeinden 6' => 11,
					'Amtssprache' => 'deutsch',
			),
			7 =>
			array (
					'ID' => 'GL',
					'Kanton' => 'Glarus ',
					'Standesstimme' => '1',
					'Beitritt' => 1352,
					'Hauptort' => 'Glarus',
					'Einwohner' => '39217',
					'Ausländer 2' => '21,6 %',
					'Fläche 3' => '685',
					'Dichte 4' => '57',
					'Gemeinden 6' => 3,
					'Amtssprache' => 'deutsch',
			),
			8 =>
			array (
					'ID' => 'ZG',
					'Kanton' => 'Zug ',
					'Standesstimme' => '1',
					'Beitritt' => 1352,
					'Hauptort' => 'Zug',
					'Einwohner' => '115104',
					'Ausländer 2' => '25,5 %',
					'Fläche 3' => '239',
					'Dichte 4' => '482',
					'Gemeinden 6' => 11,
					'Amtssprache' => 'deutsch',
			),
			9 =>
			array (
					'ID' => 'FR',
					'Kanton' => 'Freiburg ',
					'Standesstimme' => '1',
					'Beitritt' => 1481,
					'Hauptort' => 'Freiburg',
					'Einwohner' => '284668',
					'Ausländer 2' => '20,5 %',
					'Fläche 3' => '1671',
					'Dichte 4' => '170',
					'Gemeinden 6' => 165,
					'Amtssprache' => 'französisch, deutsch',
			),
			10 =>
			array (
					'ID' => 'SO',
					'Kanton' => 'Solothurn ',
					'Standesstimme' => '1',
					'Beitritt' => 1481,
					'Hauptort' => 'Solothurn',
					'Einwohner' => '257393',
					'Ausländer 2' => '20,0 %',
					'Fläche 3' => '791',
					'Dichte 4' => '325',
					'Gemeinden 6' => 120,
					'Amtssprache' => 'deutsch',
			),
			11 =>
			array (
					'ID' => 'BS',
					'Kanton' => 'Basel-Stadt ',
					'Standesstimme' => '0,5',
					'Beitritt' => 1501,
					'Hauptort' => 'Basel',
					'Einwohner' => '194661',
					'Ausländer 2' => '34,1 %',
					'Fläche 3' => '37',
					'Dichte 4' => '5034',
					'Gemeinden 6' => 3,
					'Amtssprache' => 'deutsch',
			),
			12 =>
			array (
					'ID' => 'BL',
					'Kanton' => 'Basel-Landschaft',
					'Standesstimme' => '0,5',
					'Beitritt' => 1501,
					'Hauptort' => 'Liestal',
					'Einwohner' => '277614',
					'Ausländer 2' => '19,9 %',
					'Fläche 3' => '518',
					'Dichte 4' => '532',
					'Gemeinden 6' => 86,
					'Amtssprache' => 'deutsch',
			),
			13 =>
			array (
					'ID' => 'SH',
					'Kanton' => 'Schaffhausen ',
					'Standesstimme' => '1',
					'Beitritt' => 1501,
					'Hauptort' => 'Schaffhausen',
					'Einwohner' => '77139',
					'Ausländer 2' => '24,2 %',
					'Fläche 3' => '298',
					'Dichte 4' => '259',
					'Gemeinden 6' => 27,
					'Amtssprache' => 'deutsch',
			),
			14 =>
			array (
					'ID' => 'AR',
					'Kanton' => 'Appenzell Ausserrhoden',
					'Standesstimme' => '0,5',
					'Beitritt' => 1513,
					'Hauptort' => 'Herisau, Trogen5',
					'Einwohner' => '53313',
					'Ausländer 2' => '14,5 %',
					'Fläche 3' => '243',
					'Dichte 4' => '219',
					'Gemeinden 6' => 20,
					'Amtssprache' => 'deutsch',
			),
			15 =>
			array (
					'ID' => 'AI',
					'Kanton' => 'Appenzell Innerrhoden',
					'Standesstimme' => '0,5',
					'Beitritt' => 1513,
					'Hauptort' => 'Appenzell',
					'Einwohner' => '15789',
					'Ausländer 2' => '9,9 %',
					'Fläche 3' => '173',
					'Dichte 4' => '91',
					'Gemeinden 6' => 6,
					'Amtssprache' => 'deutsch',
			),
			16 =>
			array (
					'ID' => 'SG',
					'Kanton' => 'St. Gallen',
					'Standesstimme' => '1',
					'Beitritt' => 1803,
					'Hauptort' => 'St. Gallen',
					'Einwohner' => '483156',
					'Ausländer 2' => '22,6 %',
					'Fläche 3' => '2026',
					'Dichte 4' => '239',
					'Gemeinden 6' => 85,
					'Amtssprache' => 'deutsch',
			),
			17 =>
			array (
					'ID' => 'GR',
					'Kanton' => 'Graubünden',
					'Standesstimme' => '1',
					'Beitritt' => 1803,
					'Hauptort' => 'Chur',
					'Einwohner' => '193388',
					'Ausländer 2' => '17,1 %',
					'Fläche 3' => '7105',
					'Dichte 4' => '27',
					'Gemeinden 6' => 176,
					'Amtssprache' => 'deutsch, rätoromanisch, italienisch',
			),
			18 =>
			array (
					'ID' => 'AG',
					'Kanton' => 'Aargau',
					'Standesstimme' => '1',
					'Beitritt' => 1803,
					'Hauptort' => 'Aarau',
					'Einwohner' => '627893',
					'Ausländer 2' => '22,9 %',
					'Fläche 3' => '1404',
					'Dichte 4' => '440',
					'Gemeinden 6' => 219,
					'Amtssprache' => 'deutsch',
			),
			19 =>
			array (
					'ID' => 'TG',
					'Kanton' => 'Thurgau',
					'Standesstimme' => '1',
					'Beitritt' => 1803,
					'Hauptort' => 'Frauenfeld',
					'Einwohner' => '251973',
					'Ausländer 2' => '23,0 %',
					'Fläche 3' => '991',
					'Dichte 4' => '254',
					'Gemeinden 6' => 80,
					'Amtssprache' => 'deutsch',
			),
			20 =>
			array (
					'ID' => 'TI',
					'Kanton' => 'Tessin',
					'Standesstimme' => '1',
					'Beitritt' => 1803,
					'Hauptort' => 'Bellinzona',
					'Einwohner' => '336943',
					'Ausländer 2' => '27,3 %',
					'Fläche 3' => '2812',
					'Dichte 4' => '120',
					'Gemeinden 6' => 147,
					'Amtssprache' => 'italienisch',
			),
			21 =>
			array (
					'ID' => 'VD',
					'Kanton' => 'Waadt',
					'Standesstimme' => '1',
					'Beitritt' => 1803,
					'Hauptort' => 'Lausanne',
					'Einwohner' => '729971',
					'Ausländer 2' => '32,2 %',
					'Fläche 3' => '3212',
					'Dichte 4' => '226',
					'Gemeinden 6' => 326,
					'Amtssprache' => 'französisch',
			),
			22 =>
			array (
					'ID' => 'VS',
					'Kanton' => 'Wallis',
					'Standesstimme' => '1',
					'Beitritt' => 1815,
					'Hauptort' => 'Sitten',
					'Einwohner' => '317022',
					'Ausländer 2' => '22,0 %',
					'Fläche 3' => '5224',
					'Dichte 4' => '61',
					'Gemeinden 6' => 141,
					'Amtssprache' => 'französisch, deutsch',
			),
			23 =>
			array (
					'ID' => 'NE',
					'Kanton' => 'Neuenburg ',
					'Standesstimme' => '1',
					'Beitritt' => 1815,
					'Hauptort' => 'Neuenburg',
					'Einwohner' => '173183',
					'Ausländer 2' => '24,4 %',
					'Fläche 3' => '803',
					'Dichte 4' => '216',
					'Gemeinden 6' => 53,
					'Amtssprache' => 'französisch',
			),
			24 =>
			array (
					'ID' => 'GE',
					'Kanton' => 'Genf',
					'Standesstimme' => '1',
					'Beitritt' => 1815,
					'Hauptort' => 'Genf',
					'Einwohner' => '473941',
					'Ausländer 2' => '37,0 %',
					'Fläche 3' => '282',
					'Dichte 4' => '1633',
					'Gemeinden 6' => 45,
					'Amtssprache' => 'französisch',
			),
			25 =>
			array (
					'ID' => 'JU',
					'Kanton' => 'Jura ',
					'Standesstimme' => '1',
					'Beitritt' => 1979,
					'Hauptort' => 'Delsberg',
					'Einwohner' => '70542',
					'Ausländer 2' => '13,0 %',
					'Fläche 3' => '838',
					'Dichte 4' => '84',
					'Gemeinden 6' => 64,
					'Amtssprache' => 'französisch',
			),
	);
	
	public function getAllCantons() {
		return self::$cantons;
	}
	
	public function getById($id) {
		foreach (self::$cantons as $canton) {
		    if ($canton['ID'] == $id) {
		    	return $canton;
		    }
		}
		return null;
	}
	
}	
?>