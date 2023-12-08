

<h1>pdf embed</h1>
<form action="embedpdf.php" method="post">


<p>URL : <input name="url" type="text" size="100"/></p>


<input type='submit' value='*** GERAR CODIGO ***' >
</form>
<BR>
<BR>


<?php
$url = $_POST['url'];


//echo '
//<p>Para visualizar o arquivo <a href="'.$url.'">clique aqui.</a></p>
//<object data="'.$url.'" type="application/pdf" width="100%" height="800px">
//</object>';

echo htmlentities('
<H1>Para visualizar o arquivo <a href="'.$url.'">clique aqui.</a></H1>
<object data="'.$url.'" type="application/pdf" width="100%" height="800px">
</object>');

?>