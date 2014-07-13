<?
/**
 *
 * Online Sudoku by Michael Jentsch
 *
 * Name: PHP Sudoku
 * Version: 1.0
 * Autor: Michael Jentsch <M.Jentsch@web.de>
 * Webseite: http://www.m-software.de/
 * Lizenz: LGPL 2.0
 *
 **/

require_once ("functions.php");

// Sudoku File
$filename = "sudoku.txt";

$prot = $_SERVER["REQUEST_SCHEME"];
$host = $_SERVER["SERVER_NAME"];
$self = $_SERVER["PHP_SELF"];

if (isset ($_REQUEST['sudoku']) && strlen ($_REQUEST['sudoku']) > 0)
{
	$sudokuid = intval ($_REQUEST['sudoku']);
	$sudokuhtml = getSudokuHTML ($sudokuid);
	$sudokulink = $prot . "://" . $host . $self . "?sudoku=" . $sudokuid;
} else {
	// Weiterleiten auf zufälliges Sudoku
	$max = getAnzSudokus ();
	$sudokuid = rand(0, $max); 
	$url = $prot . "://" . $host . $self . "?sudoku=" . $sudokuid;
	header('Location: ' . $url);
	exit;
}

?>
