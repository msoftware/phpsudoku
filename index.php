<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
require_once "sudoku.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html" />

<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">


<link href="style.css" rel="stylesheet" type="text/css" />
<link href="stopwatch.css" rel="stylesheet" type="text/css">

<script language="JavaScript" src="sudoku.js" type="text/javascript"></script>
</head>
<body id="sudokubody">

<div id="container">

<!-- Start GITHUB -->
<a href="https://github.com/msoftware/phpsudoku"><img style="position: absolute; top: 0; right: 0; border: 0;" src="github.png" alt="Fork me on GitHub"></a>
<!-- End GITHUB -->

<div class="menu">
<a class="copyright" href="http://dieletztedomain.de/phpsudoku/" target="_new">
<span>&copy; by Michael Jentsch</span>
</a>
</div>

<div class="bubble">
	<div class="rectangle"><h2>PHP Sudoku V2.1</h2></div>
<div class="triangle-l"></div>
<div class="triangle-r"></div>
<div class="info">

<!-- Start PHP Sudoku Code -->
<div id="sudoku"><center>



<!-- stopwatch  start -->
<div class="watchcontainer">
	<input id="start" name="controls" type="radio" checked>
	<input id="stop" name="controls" type="radio">
	<input id="reset" name="controls" type="radio">
	<div class="timer">
		<div class="watchcell">
			<div class="numbers tenhour moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
		<div class="watchcell">
u   		<div class="numbers hour moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
		<div class="watchcell divider"><div class="numbers">:</div></div>
		<div class="watchcell">
			<div class="numbers tenminute movesix">0 1 2 3 4 5 6</div>
		</div>
		<div class="watchcell">
			<div class="numbers minute moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
		<div class="watchcell divider"><div class="numbers">:</div></div>
		<div class="watchcell">
			<div class="numbers tensecond movesix">0 1 2 3 4 5 6</div>
		</div>
		<div class="watchcell">
			<div class="numbers second moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
		<div class="watchcell divider"><div class="numbers">:</div></div>
		<div class="watchcell">
			<div class="numbers milisecond moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
		<div class="watchcell">
			<div class="numbers tenmilisecond moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
		<div class="watchcell">
			<div class="numbers hundredmilisecond moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
	</div>
	<div id="timer_controls">
		<label for="start">Start</label>
		<label for="stop">Stop</label>
		<label for="reset">Reset</label>
	</div>
</div>
<script src="prefixfree.js" type="text/javascript"></script>
<!-- end stopwatch -->
<table border="0"><tbody>
<tr><td>
<?php echo $sudokuhtml; ?>
</td></tr>
<tr><td height="28" valign="bottom">
<center><form method="post"><nobr>
<input type="hidden" name="sudoku" value="">
<input class="sudokubutton" id="button1" type="button" value="L&ouml;sung zeigen" onclick="solveMySudoku()">
<input class="sudokubutton" id="button2"  type="button" value="Pr&uuml;fung" onclick="checkMySudoku()">
<input class="sudokubutton" id="button3"  type="submit" value="Neues Sudoku">
<input class="sudokubutton" id="button4"  type="button" value="Fertig" onclick="checkMySudoku2()">
</nobr></form></center>
</td></tr>
</tbody></table>

</div>
</div>
</div>
</div>

<div id="footer"><center> <a href="<?php echo $sudokulink; ?>">Sudoku Nr. <?php echo number_format($sudokuid, 0, '', '.'); ?></a> </center></div>

</body>
</html>
