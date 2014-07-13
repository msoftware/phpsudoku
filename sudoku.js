

function fontsize (object, value)
{
        switch (value.length) {
                case 1:
                object.style.fontSize = "30px";
                break;
                case 2:
                object.style.fontSize = "26px";
                break;
                case 3:
                object.style.fontSize = "22px";
                break;
                case 4:
                object.style.fontSize = "16px";
                break;
                case 5:
                object.style.fontSize = "14px";
                break;
        }
        object.value = value;
}

function checkMySudoku() 
{
	var theSec=new Sudoku();
	anzSols=0;
	for (var i=0; i<81; ++i) {
  		var o=document.getElementById("i"+i)
  		var v=o.value
  		if (v>="1" && v<="9" && o.readOnly == true) {
			theSec.vlu(i, parseInt(v));
	} 	}
	var rsp=theSec.sss();
	var ans="<p>No solution<\/p>";
	if (anzSols > 0) {
		ans=bs.cit();
	} else {
		alert ("Ungültiges Sudoku Puzzle");
	}
}

function checkMySudoku2()
{
	var theSec=new Sudoku();
	anzSols=0;
	for (var i=0; i<81; ++i) {
  		var o=document.getElementById("i"+i)
  		var v=o.value
  		if (v>="1" && v<="9") {
			theSec.vlu(i, parseInt(v));
		} else {
			alert ("Sudoku Puzzle ist nicht korrekt gelöst.");
			return;
	} }
	var rsp=theSec.sss();
	var ans="<p>No solution<\/p>";
	if (anzSols > 0) {
		alert ("Sudoku Puzzle gelöst.");
	} else {
		ans=bs.cit();
		alert ("Sudoku Puzzle wurde ist nicht korrekt gelöst.");
	}
}

function solveMySudoku() 
{
	var style;
	var theSec=new Sudoku();
	anzSols=0;
	for (var i=0; i<81; ++i) {
  		var v=document.getElementById("i"+i).value
  		var o=document.getElementById("i"+i)
  	  	if (v>="1" && v<="9"  && o.readOnly == true) {
			theSec.vlu(i, parseInt(v));
		}
	}
	var rsp=theSec.sss();
	var ans="<p>No solution<\/p>";
	if (anzSols > 0) {
		var ans="";
		var data = bs.gdt ();
		for (var y=0; y<9; ++y) 
		{
			ans=ans+"<tr>"
			for (var x=0; x<9; ++x) 
			{
				var style = "";
				if (y == 2 || y == 5) style = "border-bottom:1px solid black; ";
				if (x == 2 || x == 5) style += "border-right:1px solid black; ";
				style += " font-size:28px; background-color:#FFFFFF; margin:1px; padding:1px;";
				ans=ans+"<td class=sol align=center style='" + style + "'>" + mct(data[x+y*9]) + "<\/td>";
			}
			ans=ans+"<\/tr>";
		}
		ans = "<table cellspacing=1 cellpadding=1 border=0 width=400 height=400 bgcolor=#EEEEEE>"+ans+"<\/table>";
		ans = ans + "<center><br><a href='#' onClick='window.close()'><font face='arial' size=2>Fenster schließen</font></a></center>";
	}
	var solution = window.open("", "Lösung", "width=420,height=470,left=100,top=200");
	solution.document.body.innerHTML = "";
	solution.document.write("<html><head><link rel='STYLESHEET' type='text/css' href='sudoku.css'></head><body>" + ans + "</body></html>")
        solution.focus();
}

//////////////////// END OF PUBLIC INTERFACE //////////////////////////////

var bs=new Sudoku();
var anzSols;

// First, create the custom object "Sudoku"
function Sudoku () 
{
	var size = 81;
	this.data=new Array();
	for (var i=0; i < size; ++i) {
		this.data[i]=0;
	}
}

/* Some help functions */
function allo(val) 
{
	var cc=new Array;
	var n=0;
	for (var i=1; i<=9; ++i) {
		if (((1<<i) & val)==0) cc[n++]=i;
	}
	return cc;
}

function mct(d) 
{
	if (d&1) {
		for (var i=1; i<=9; ++i)
			if ((d | (1<<i))==1023) return ""+i;
		return "_";
	} else {
		return "?"+allo(d);
	}
}

/* class methods of the sudoku puzzle */
function meed() 
{
	var a=-1, p=-1, v = 0;
	for (var i=0; i<81; ++i) {
		if ((this.data[i] & 1)==0) {
			for (var j=1; j<=9; ++j) {
				if (((1<<j) & this.data[i])!=0) {
					 ++v;
			} 	}
			if (v>=a) {
				a=v;
				p=i;
	} } }
	return p;
}
Sudoku.prototype.mn=meed;

function vl(pos, val) 
{
	var x=pos%9;
	var y=Math.floor(pos/9);
	var x0=Math.floor(x/3)*3;
	var y0=Math.floor(y/3)*3;
	var add=(1<<val);
	for (var k=0; k<9; ++k) 
	{
		this.data[x+k*9]|=add;
		this.data[k+y*9]|=add;      
		this.data[x0+(k%3)+9*(y0+Math.floor(k/3))]|=add;
	}
	this.data[pos]=1023-(1<<val);
}
Sudoku.prototype.vlu=vl;

function ci ()
{
	var x1 = "", x2 = "";
	var c1 = 0;
	var c2 = 0;
	var i = 0;
	for (var i=0; i<81; ++i) {
		c1 = parseInt(mct(this.data[i]));
  		c2 = parseInt(document.getElementById("i"+i).value);
  		if (document.getElementById("i"+i).readOnly == false) {
			if (c2 != c1 && document.getElementById("i"+i).value.length > 0) {
				document.getElementById("i"+i).style.background = "#FFDDDD";
			} else {
				document.getElementById("i"+i).style.background = "#FFFFFF";
		} 	}
		x1 += " " + c1
		x2 += " " + c2
	}
}
Sudoku.prototype.cit=ci; 

function sok() 
{
	for (var i=0; i<81; ++i) 
	{
		if ((this.data[i] & 1022)==1022) 
		{
			return false;
		}
	}
	return true;
}  
Sudoku.prototype.ok=sok;

function sv() 
{
	for (var i=0; i<81; ++i) {
		if ((this.data[i] & 1)==0) return false;
	}
	return true;
}

Sudoku.prototype.svd=sv;

function ss() 
{
	while (this.ok()) 
	{
		if (this.svd()) 
		{
			if (1<++anzSols) return this;
			for (var ia=0; ia<81; ++ia)
			{
				bs.data[ia]=this.data[ia];
			}
			return null;
		}
		var p=this.mn();
		if (p<0) return null;
		var l=allo(this.data[p]);
		if (l.length<1) return null;
		for (var i=1; i<l.length; ++i) 
		{
			var nb=new Sudoku();
			for (var ib=0; ib<81; ++ib)
			{
				nb.data[ib]=this.data[ib];
			}
			nb.vlu(p, l[i]);
			nb=nb.sss();
			if (nb) return nb;
		}
		this.vlu(p, l[0]);
	}
	return null;
}
Sudoku.prototype.sss=ss;

function gd ()
{
	return this.data;
}
Sudoku.prototype.gdt=gd;

/*
var clockID = 0;
var init = new Date();
var start = init.getTime();

function UpdateClock() {
   if(clockID) {
      clearTimeout(clockID);
      clockID  = 0;
   }

   var now = new Date ();
   var nowtime = now.getTime();
   var sec = Math.floor((nowtime - start) / 1000);
   var min = Math.floor((sec / 60));
   var std = Math.floor((min / 60));
   sec = sec % 60;
   min = min % 60;
   if (sec < 10) sec = "0" + sec;
   if (min < 10) min = "0" + min;
   if (std < 10) std = "0" + std;
   document.theClock.theTime.value = "Time: " + std + ":" + min + ":" + sec;

   clockID = setTimeout("UpdateClock()", 100);
}

function StartClock() {
        clockID = setTimeout("UpdateClock()", 100);
}

StartClock();
*/

function fullscreen () 
{
  if (
    document.fullscreenEnabled || 
    document.webkitFullscreenEnabled || 
    document.mozFullScreenEnabled ||
    document.msFullscreenEnabled
  ) {
    var element = document.getElementById("sudokubody");
    if (element.requestFullScreen) {
      element.requestFullScreen();
    } else if (element.mozRequestFullScreen) {
      element.mozRequestFullScreen();
    } else if (element.webkitRequestFullScreen) {
      element.webkitRequestFullScreen();
    }
  } else {
    alert ("Fullscreen not available");
  }
}

