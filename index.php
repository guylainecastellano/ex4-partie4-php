<?php
function identity($pseudo,$firstnamePara,$agePara)
{
  return $pseudo.' '. $firstnamePara.' tu as '.$agePara;
}
$name = 'Castellano';
$firstname = 'Guylaine';
$age = 46;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>ex4 partie4 php</title>
</head>
<body>
<p>Bonjour, <?php echo identity($name,$firstname,$age) ;?> ans</p>
</body>
</html>
