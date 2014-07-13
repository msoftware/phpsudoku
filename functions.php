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

function getSudokuHTML ($sudokuid)
{
	$ret = "";
	$sudokustr = getSudoku ($sudokuid);
	$sudoku    = explode(";", $sudokustr);

	$ret .= "<table id=sudoku cellspacing=0 cellpadding=0 border=0>";
	$count = 0;
	for ($x = 0; $x < 9; $x++)
	{
		$ret .= "<tr>";
		for ($y = 0; $y < 9; $y++)
		{
			$ret .= "<td><div class=cell>";
			$data = "";
			if ($y == 2 || $y == 5)
			{
				$border = "border-right:2px solid #000000;";
			} else {
				$border = "";	
			}	
			if ($x == 2 || $x == 5)
			{
				$border .= "border-bottom:2px solid #000000;";
			}	
			// if (strlen ($sudoku[$count]) > 0 && $sudoku[$count] != " ")
			if (intval($sudoku[$count]) > 0 )
			{
				$data = "value='" . $sudoku[$count] . "' readonly style='background:#DDDDDD; " . $border . "'";
			} else {
				$data = " style='" . $border . "'";
			}
			$ret .= "\r\n";
			$ret .= "<input valign=middle type=text id=i" . $count . " name=i" . $count . " " . 
				 $data . " size=5 maxlength=5 class=cell onkeyup='fontsize(this, this.value)'>\r\n";
			$ret .= "</div></td>";
			$count ++;
		}
		$ret .= "</tr>";
	}
	$ret .= "</table>";
	return $ret;
}

function getSudoku ($line)
{
	global $filename;
	$ls = 164;
	$size = filesize ($filename);
	$lines = $size / $ls;
	if ($line > $lines) 
	{
		$line = $lines -1;
	}
	// $line = rand(0, $lines); 
	$handle = fopen ($filename, "r");
	$pos = $ls * $line;
	fseek ($handle, $pos, SEEK_SET);
	$contents = fread ($handle, $ls);
	fclose ($handle);
	return $contents;
}

function getAnzSudokus ()
{
	global $filename;
	$ls = 164;
	$size = filesize ($filename);
	$lines = $size / $ls;
	return $lines;
}
?>
