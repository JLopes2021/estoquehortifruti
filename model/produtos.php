<?php
include 'control/conexao.php';

$sql ="SELECT nome FROM produtos WHERE nome REGEXP '^[AEIOUaeiou]'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table'>";
    echo "<thead><tr><th>Nome do Produto (Só com vogais)</th></tr></thead>";
    echo "<tbody>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["nome"] . "</td></tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "Nenhum produto encontrado.";
}

$conn->close();
?>

