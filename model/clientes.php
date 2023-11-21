<?php
include 'control/conexao.php';

$sql = "SELECT nome FROM clientes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table'>";
    echo "<thead><tr><th>Nome do Cliente</th></tr></thead>";
    echo "<tbody>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["nome"] . "</td></tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "Nenhum cliente encontrado.";
}

$conn->close();
?>

