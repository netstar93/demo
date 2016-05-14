<title>!!...LovSicker...!!</title>
<link rel="stylesheet" type="text/css" href="style.css"></style>
 <title> !!..LovSicker...!! </title>
<body>
<div class='header'> ..:: Earning Script By LovSicker::.. </div>
<div class="title2">PSIT</div>
<?php
error_reporting (E_ALL | E_STRICT);
$url1="http://www.psit.in/psit/loginlist.php";
$login="http://www.psit.in/ProjectCollege/students/dashboard.php";
$post="username=1116410907&password=adjmtw&rand=0.9282881798137119";

$cookie="cookie.txt";
$url="http://www.psit.in/psit";
$agent = "Mozilla/5.0 (Windows NT 6.1; rv:23.0) Gecko/20100101 Firefox/23.0";
$roll=$_REQUEST['roll'];
$br=$_REQUEST['branch'];
$att="http://www.psit.in/psit/attpercentage.php?class=$br";
            
                        $ch = curl_init();
           curl_setopt($ch, CURLOPT_URL, $url1);
           curl_setopt( $ch, CURLOPT_USERAGENT, $agent );
             curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
           curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
    curl_setopt($ch, CURLOPT_POST, TRUE);
   curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
          curl_setopt($ch, CURLOPT_HEADER, 1);
          curl_setopt($ch, CURLOPT_HTTPHEADER,Array("application/x-www-form-urlencoded; charset=UTF-8"));
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_REFERER, $url);
          $html=curl_exec($ch);  
   
   
   
          curl_setopt($ch, CURLOPT_URL, $att);
        curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
      curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          $html=curl_exec($ch);
		  
 
/*preg_match("/$test(.*?).G\i",$html, $matches);
$use = $matches[1];
$usee=str_replace("[","",$use);*/
$s=stristr($html,$roll);
if(stristr($s,"CC0000"))
{
     $pat="/009900><b>(.*?).</i";
$name="/5px>(.*?).</i";
}
else{
       $pat="/CC0000><b>(.*?).</i";
}
preg_match($pat,$s, $matches);
$use = $matches[1];
$name="/15px(.*?).</i";
preg_match($name,$s, $matches);
$nam=$matches[1];
$u=str_replace(">","",$nam);
$uu=str_replace('"','',$u);

$ab="/align=center(.*?).</i";
preg_match($ab,$s, $matches);
$abs=$matches[1];

    echo "<center>YOUR NAME IS </center></br>";

$name="/<td style padding-left:15px(.*?).</i";
preg_match($name,$s, $matches);
$nam=$matches[1];
    echo "<center>YOUR NAME IS </center></br>";
echo "<font color=green size=20>$uu</font>";
    echo "<center>YOUR TOTAL ATTENDANCE IS  :</center>";
echo "<font color=red size=20>$use %</font>";

    echo "<center>YOUR Lecture Absent IS : </center></br>";
echo "<font color=green size=20>$abs</font>";
curl_close ($ch);
?>
<div id="footer_bg">
<div class="footer" align="center">&copy; ..::Script developed By LovSicker::.. </div>