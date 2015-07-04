<?php
function tag(){
echo '<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>متن ساز پارس ترانه</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="classification" content="" />
<meta name="Abstract" content="4" />
<meta name="distribution" content="Global" />
<meta name="Language" content="Persian" />

<!---------------------------------------style------------------------------------------>
<script type="text/javascript" src="tag.js"></script>
<link rel="stylesheet" href="style.css">
<!---------------------------------------style------------------------------------------>

</head>
<body>
<div style="margin:auto" >
  <div style="float:right ;>	
<TR>
<TD width="22%" colSpan=2>
    <P dir="rtl" align="center"><FONT color=#ab0050 face="Mj_Faraj,tahoma" size=6>نام خواننده :</FONT></P>
    </TD>
    </TR>
    <input lang=fa dir=rtl   id="SINGER" name="nom" onclick="javascript:this.select();";this.style.color="#333333";" size="50" sourceindex="1" style="color: rgb(51, 51, 51);" type="text" value="" />
    <br />
    <TR>
      <TD width="22%" colSpan=2><P dir="rtl" align="center"><FONT color=#ab0050 face="Mj_Faraj,tahoma" size=6>نام آهنگ :</FONT></P></TD>
    </TR>
    <input lang=fa dir=rtl  id="AHANG" name="nom" onclick="javascript:this.select();";this.style.color="#333333";" size="50" sourceindex="2" style="color: rgb(51, 51, 51);" type="text" value="" />
    <br />
    <br />
    <br />
    <center>
      <div class="dokme" > <a class="submit" onclick="ali();showcode();alii();showcode(); ;aliii();showcode();aliiii();showcode();">ساخت تگ</a>&nbsp;
	  <a href="?logout=1"class="submit">خروج</a></div>
    </center>
    </center>
  </div>
  <br />
  <div class="vasat">
    <div id="bsdisplay" style="display: block;">
      <textarea lang=fa dir=rtl  cols="100" id="1" name="1" onclick="javascript:this.select();" onfocus="javascript:this.select();" readonly sourceindex="3" class="box1"></textarea>
    </div>
    <div id="bsdisplay" style="display: block;">
      <textarea lang=fa dir=rtl cols="100" id="2" name="2" onclick="javascript:this.select();" onfocus="javascript:this.select();" readonly sourceindex="4" class="box1"></textarea>
    </div>
    <div style="float:right; >
<div id="bsdisplay" style="display: block;">
    <textarea lang=fa dir=rtl  cols="100" id="3" name="3" onclick="javascript:this.select();" onfocus="javascript:this.select();" readonly sourceindex="5" class="box1"></textarea>
  </div>
  <div id="bsdisplay" style="display: block;">
    <textarea lang=fa dir=rtl  cols="100" id="4" name="4" onclick="javascript:this.select();" onfocus="javascript:this.select();" readonly sourceindex="6" class="box1"></textarea>
  </div>
</div>
<div style="margin-top: 650px;">
  <footer>
 <center >   <p>
 <FONT color=#ab0050 face="Mj_Faraj,tahoma" size=3>طراح و برنامه نویس محمد جواد قهرمانی</FONT></p> </center>
  </footer>
</div>
</div>
</body>
</html> ';}?>