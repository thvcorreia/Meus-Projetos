<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Nome: <input type="text" name="fnome">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebendo o valor da variável fnome
    $nome = htmlspecialchars($_REQUEST['fnome']);
    if (empty($nome)) {
        echo "Compo nome vazio";
    } else {
        echo $nome;
    }
}
?>

</body>
</html>
