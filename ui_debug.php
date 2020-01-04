<?php
//This file must be included at the bottom of each page to be able to show stored variables.
//Place before the </body> tag in your .php file

function var_dump_ret($mixed = null) {
  ob_start();
  var_dump($mixed);
  $content = ob_get_contents();
  ob_end_clean();
  return $content;
}

$debug = '';
if(isset($_GET["debug"])){$debug= $_GET["debug"];}

if($debug == "on"){

$texto0 = "------ SESSION -----<br>";

$texto = var_dump_ret($_SESSION);
//var_dump($_SESSION);

$texto = str_replace('"',' &#34 ', $texto); //The white space is to avoid strange characters.
$texto = str_replace("'"," &#39 ", $texto);
$texto = str_replace("\n","<br>",$texto);

//Removing quotes and apostrophe.
$texto = $texto."<br> ------ POST ------<br> ";

$texto2 = var_dump_ret($_POST);

$texto2 = str_replace('"',' &#34 ', $texto2);
$texto2 = str_replace("'"," &#39 ", $texto2);
$texto2 = str_replace("\n","<br> ",$texto2);

$texto3 = "<br> ------- GET ------ <br>";

$texto4 = var_dump_ret($_GET);

$texto4 = str_replace('"',' &#34 ', $texto4);
$texto4 = str_replace("'"," &#39 ", $texto4);
$texto4 = str_replace("\n","<br> ",$texto4);



$txt = $texto0.$texto.$texto2.$texto3.$texto4;
//output the window debug.
//use javascript javascript to create a new window.
echo '	
    <script>
		//document.body.style.backgroundColor = "black";
		function criajanela(){
			var janela = window.open("", "", "width=200,height=400"); 
			janela.document.write("<pre>'.$txt.'</pre>");
			janela.document.body.style.backgroundColor = "black";
			janela.document.body.style.color = "#aaaaaa";
			janela.document.title = "Debug PHP";
		}	
		criajanela();
	</script>
';
}
?>
