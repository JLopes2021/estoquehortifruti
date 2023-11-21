<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Estoque - Mercado de Horticultura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="view/index.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="container">
        <h1>Adm Page</h1>
        <p>Em Construção</p>

        <form method="post">
            <label for="tabela">Selecione a Tabela:</label>
            <select name="tabela" id="tabela" class="form-select mb-3">
                <option value="frutas">Frutas</option>
                <option value="legumes">Legumes</option>
            </select>
            <button type="submit" class="btn btn-primary">Mostrar Tabela</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tabelaSelecionada = $_POST['tabela'];
            $csvFile = $tabelaSelecionada . '.csv';

            if (($handle = fopen($csvFile, 'r')) !== FALSE) {
                echo '<table class="table table-striped table-bordered">';
                echo '<thead class="thead-dark"><tr><th>Nome</th><th>Quantidade'.'<br>'.'</th><th>Data de Entrada</th><th>Horário</th></tr></thead>';

                $firstRow = true;

                while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
                    if ($firstRow) {
                        $firstRow = false;
                        continue;
                    }

                    echo '<tr>';
                    foreach ($data as $value) {
                        echo '<td>' . htmlspecialchars($value) . '</td>';
                    }
                    echo '</tr>';
                }

                echo '</table>';
                fclose($handle);
            } else {
                echo 'Erro ao abrir o arquivo CSV.';
            }
        }
        ?>
    </div>
</body>
</html>
