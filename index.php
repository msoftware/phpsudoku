<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?
require_once "sudoku.php";

// echo $sudokuhtml
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
<!-- 
<ul>
<li class="l1"><a href="#">Reset</a></li>
<li class="l2"><a href="#">Doku</a></li>
<li class="l3"><a href="#">Lizenz</a></li>
</ul>
 -->
<a class="copyright" href="http://dieletztedomain.de/phpsudoku/" target="_new">
<span>&copy; by Michael Jentsch</span>
</a>
</div>

<div class="bubble">
	<div class="rectangle"><h2>PHP Sudoku V2.0</h2></div>
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
			<div class="numbers hour moveten">0 1 2 3 4 5 6 7 8 9</div>
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

<!--
<table id="sudoku" cellspacing="0" cellpadding="0" border="0">
<tbody><tr><td><div class="cell">
<input valign="middle" type="text" id="i0" name="i0" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i1" name="i1" value="1" readonly="" style="background:#DDDDDD; " size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i2" name="i2" value="2" readonly="" style="background:#DDDDDD; border-right:2px solid #000000;" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i3" name="i3" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i4" name="i4" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i5" name="i5" value="8" readonly="" style="background:#DDDDDD; border-right:2px solid #000000;" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i6" name="i6" value="9" readonly="" style="background:#DDDDDD; " size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i7" name="i7" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i8" name="i8" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td></tr><tr><td><div class="cell">
<input valign="middle" type="text" id="i9" name="i9" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i10" name="i10" value="6" readonly="" style="background:#DDDDDD; " size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i11" name="i11" value="4" readonly="" style="background:#DDDDDD; border-right:2px solid #000000;" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i12" name="i12" value="9" readonly="" style="background:#DDDDDD; " size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i13" name="i13" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i14" name="i14" value="2" readonly="" style="background:#DDDDDD; border-right:2px solid #000000;" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i15" name="i15" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i16" name="i16" value="8" readonly="" style="background:#DDDDDD; " size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i17" name="i17" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td></tr><tr><td><div class="cell">
<input valign="middle" type="text" id="i18" name="i18" value="9" readonly="" style="background:#DDDDDD; border-bottom:2px solid #000000;" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i19" name="i19" value="5" readonly="" style="background:#DDDDDD; border-bottom:2px solid #000000;" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i20" name="i20" style="border-right:2px solid #000000;border-bottom:2px solid #000000;" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i21" name="i21" value="6" readonly="" style="background:#DDDDDD; border-bottom:2px solid #000000;" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i22" name="i22" style="border-bottom:2px solid #000000;" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i23" name="i23" value="3" readonly="" style="background:#DDDDDD; border-right:2px solid #000000;border-bottom:2px solid #000000;" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i24" name="i24" value="7" readonly="" style="background:#DDDDDD; border-bottom:2px solid #000000;" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i25" name="i25" value="4" readonly="" style="background:#DDDDDD; border-bottom:2px solid #000000;" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i26" name="i26" style="border-bottom:2px solid #000000;" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td></tr><tr><td><div class="cell">
<input valign="middle" type="text" id="i27" name="i27" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i28" name="i28" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i29" name="i29" style="border-right:2px solid #000000;" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i30" name="i30" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i31" name="i31" value="5" readonly="" style="background:#DDDDDD; " size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i32" name="i32" style="border-right:2px solid #000000;" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i33" name="i33" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i34" name="i34" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i35" name="i35" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td></tr><tr><td><div class="cell">
<input valign="middle" type="text" id="i36" name="i36" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i37" name="i37" value="2" readonly="" style="background:#DDDDDD; " size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i38" name="i38" style="border-right:2px solid #000000;" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i39" name="i39" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i40" name="i40" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i41" name="i41" style="border-right:2px solid #000000;" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i42" name="i42" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i43" name="i43" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i44" name="i44" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td></tr><tr><td><div class="cell">
<input valign="middle" type="text" id="i45" name="i45" value="6" readonly="" style="background:#DDDDDD; border-bottom:2px solid #000000;" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i46" name="i46" style="border-bottom:2px solid #000000;" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i47" name="i47" style="border-right:2px solid #000000;border-bottom:2px solid #000000;" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i48" name="i48" style="border-bottom:2px solid #000000;" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i49" name="i49" value="3" readonly="" style="background:#DDDDDD; border-bottom:2px solid #000000;" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i50" name="i50" style="border-right:2px solid #000000;border-bottom:2px solid #000000;" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i51" name="i51" style="border-bottom:2px solid #000000;" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i52" name="i52" value="1" readonly="" style="background:#DDDDDD; border-bottom:2px solid #000000;" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i53" name="i53" style="border-bottom:2px solid #000000;" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td></tr><tr><td><div class="cell">
<input valign="middle" type="text" id="i54" name="i54" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i55" name="i55" value="9" readonly="" style="background:#DDDDDD; " size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i56" name="i56" value="3" readonly="" style="background:#DDDDDD; border-right:2px solid #000000;" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i57" name="i57" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i58" name="i58" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i59" name="i59" value="1" readonly="" style="background:#DDDDDD; border-right:2px solid #000000;" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i60" name="i60" value="8" readonly="" style="background:#DDDDDD; " size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i61" name="i61" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i62" name="i62" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td></tr><tr><td><div class="cell">
<input valign="middle" type="text" id="i63" name="i63" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i64" name="i64" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i65" name="i65" value="1" readonly="" style="background:#DDDDDD; border-right:2px solid #000000;" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i66" name="i66" value="3" readonly="" style="background:#DDDDDD; " size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i67" name="i67" value="6" readonly="" style="background:#DDDDDD; " size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i68" name="i68" style="border-right:2px solid #000000;" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i69" name="i69" value="2" readonly="" style="background:#DDDDDD; " size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i70" name="i70" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i71" name="i71" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td></tr><tr><td><div class="cell">
<input valign="middle" type="text" id="i72" name="i72" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i73" name="i73" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i74" name="i74" value="6" readonly="" style="background:#DDDDDD; border-right:2px solid #000000;" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i75" name="i75" value="7" readonly="" style="background:#DDDDDD; " size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i76" name="i76" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i77" name="i77" value="9" readonly="" style="background:#DDDDDD; border-right:2px solid #000000;" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i78" name="i78" value="1" readonly="" style="background:#DDDDDD; " size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i79" name="i79" value="5" readonly="" style="background:#DDDDDD; " size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td><td><div class="cell">
<input valign="middle" type="text" id="i80" name="i80" style="" size="5" maxlength="5" class="cell" onkeyup="fontsize(this, this.value)">
</div></td></tr></tbody></table>

 -->

</td></tr><tr><td height="28" valign="bottom">
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
<!-- End PHP Sudoku Code -->


</div>
</div>

</div>


<div id="footer"><center>
		<a href="<?php echo $sudokulink; ?>">Sudoku Nr. <?php echo number_format($sudokuid, 0, '', '.'); ?></a>
</center></div>

</body>
</html>
