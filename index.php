<?php
$dizionario = array(
    "Abbondante" => "Sinonimi: ampio,consistente,ingente. Contrari: esiguo,insufficente,irrisorio.",
    "Babbeo" => "Sinonimi: babbione,babbuasso,balordo. Contrari: acuto,furbo,intelligente.",
    "Cafone" => "Sinonimi: buzzurro,bifolco,campagnolo. Contrari: galantuomo,persona per bene,signore.",
    "Ubbidiente" => "Sinoimi: ossequente,rispettoso (di),disciplinato. Contrari: disobediente,ribelle,indomito.",
    "Vacuo" => "Sinoimi: mancante,privo,vuoto. Contrari: carico,pieno,colmo",
);

function search($dizionario)
{
  foreach ($dizionario as $x => $x_value)
  {
    if ($x==$_POST["search"])
    {
       echo $x . " ". " " . $x_value;
       return true;
    }
  }
  echo "parola non trovata";
  return false;
}
function add($dizionario)
{
  $dizionario[$_POST["add"]] = $POST_["sinonimi"] . $_POST["contrari"];
}

if (isset($_POST["submit"]))
{
  if (isset($_POST["search"])) { search($dizionario); }
  elseif (isset($_POST["add"]))
  {
    if (search($dizionario)==false) { add($dizionario); }
    else { echo "parola gia presente";    }
  }
  elseif (isset($_POST["del"]))
  {

  }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dizionario in php (volatile)</title>
  </head>
  <body>
    <form class="" action="index.php" method="post">
      <h1>Selezionare un opzione alla volta</h1>
      Parola da cercare <input type="text" name="search" value="">  <br>
      Parola da aggiungere <input type="text" name="add" value="">  Sinonimi <input type="text" name="sinonimi" value=""> Contrari <input type="text" name="contrari" value=""> <br>
      Parola da rimuovere <input type="text" name="del" value=""> <br>
      <input type="submit" name="submit" value="invia">
    </form>
  </body>
</html>
