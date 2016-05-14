<title>!!...PSIT ADVANCED PORTAL!!</title>
<link rel="icon"type="image/ico"href="lili.ico">
<link rel="stylesheet" type="text/css" href="style.css"></style>
 <title> !!..NiTisH...!! </title>
<body>
<div class='header'> ..:: PSIT DETAILS CHECKER BY NiTisH ~ NetStaR::.. </div>
<div class="title2">Like me on FB <a href="http://fb.com/nitishwap">Nitish@PSIT</a></div>
<div class="title3">Programming is Just FUN</div>
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
$strp="http://www.psit.in/psit/studentreport.php?class=$br";            
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


$s=stristr($html,$roll);

  if(stristr($s,"CC0000"))
{
   $pat="/<b>(.*?).b/i"; 
}
else{
    $pat="/009900><b>(.*?).b/i";
}
       $name="/5px>(.*?).</i";
preg_match($pat,$s, $matches);
$nam=$matches[1];
$u=str_replace(">","",$nam);
$uu=str_replace('"','',$u);
$att=str_replace('<','',$uu);

preg_match($name,$s, $matches);
//$nam=$matches[1];
$u=str_replace(">","",$nam);
$uu=str_replace('"','',$u);
$name=str_replace('<','',$uu);

//total lecture
$total="/>(.*?).td/i";
preg_match($total,$s, $matches);
$ab=$matches[1];
$abb=str_replace('<','',$ab);
//absent
$abs="/>(.*?).td/i";
preg_match_all($abs,$s, $matches);
$a=$matches[1][1];
$aa=str_replace('<','',$a);

//photo 

        curl_setopt($ch, CURLOPT_URL, $strp);
        curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          $html=curl_exec($ch);
$x=stristr($html,$roll,true);
$i=substr($x,-125,5);

if(stristr($i,"."))
{
    $idd=substr($x,-126,5);
}
else{
    $idd=substr($x,-125,5);
}

 $path=''.$idd.'.jpg';
$upname=strtoupper($roll); 
if(!$att==""){
  echo "<div style='background-color:#ccffcc'>";
    echo "<center><font color=green size=5>Hi Dear ! Your name : </font><font color=blue size=7><b><blink>$upname</blink></b></font></center></br><hr color=red>";
   echo "<img src='http://www.psit.in/ProjectCollege/STUDENT/images/$path' alt='Your Pic' border='2' border-color='green' align='left'></img>";
echo "<font color=red size=5>Your attendance : <b>$att%</b></font></br><hr color=red>";
echo "<font color=green size=5>Your Total Lecture : <b>$abb</b></font></br><hr color=red>";
echo "<font color=orange size=5>Your Total Absent Lectures :  <b>$aa</b></font><hr color=red></div>";
}


else{
    echo "<font color=red size=5>This Student is not available in your class..Kindly Recheck your name...!!</font></div>";
}
curl_close ($ch);
?>

<div id="footer_bg">

<center><img src="footer.png"></img></center>

<div class="footer" align="center">&copy; ..::Script developed By Nitish::.. </div>