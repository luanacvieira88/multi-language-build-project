<?php
// Código com duplicação e má qualidade
echo "Hello World";

// Exemplo de vulnerabilidade de injeção SQL
$userId = $_GET['user_id'];
$query = "SELECT * FROM users WHERE id = $userId";
mysqli_query($connection, $query);

// Exemplo de XSS (Cross-Site Scripting)
echo "<div>".$_GET['input']."</div>";

// Código duplicado
function duplicateFunction() {
    echo "This is a duplicate function";
}

function duplicateFunctionAgain() {
    echo "This is a duplicate function";
}

// Código propositalmente defeituoso
$undefinedVariable++;

?>
