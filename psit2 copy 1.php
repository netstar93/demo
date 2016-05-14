<title>!!...PSIT ADVANCED PORTAL BY NiTiSH...!!</title>
<link rel="stylesheet" type="text/css" href="style.css"></style>
 <title> !!..NiTisH...!! </title>
<body>
<div class='header'> ..:: PSIT DETAILS CHECKER BY NiTisH ~ NetStaR::.. </div>
<div class="title2">PSIT Advanced Portal</div>
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

$s=stristr($html,$roll);

     $pat="/009900><b>(.*?).b/i";
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
$name=strtoupper($roll);
    echo "<center><font color=green size=10>Hi Dear ! Your name is </font><font color=blue size=12><b>$name</b></font></center></br>";
echo "<font color=red size=10>Your attendance is <b>$att%</b></font>";

curl_close ($ch);
?>
<div id="footer_bg">
<center><img src="footer.png"></img></center>

<div class="footer" align="center">&copy; ..::Script developed By Nitish::.. </div>