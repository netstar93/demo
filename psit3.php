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
$strp="http://www.psit.in/psit/studentreport.php";
            
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
   
   //CHecking PART
   
          curl_setopt($ch, CURLOPT_URL, $strp);
        curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
      curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          $html=curl_exec($ch);
		  

$s=stristr($html,$roll);
$ab="/40px>(.*?).</i";
preg_match($ab,$s, $matches);
$abs=$matches[1];

    echo "<center>YOUR IMAGE  $ab</center></br>";


//echo "<font color=red size=20>$abs</font>";
curl_close ($ch);
?>
<div id="footer_bg">
<div class="footer" align="center">&copy; ..::Script developed By LovSicker::.. </div>