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
<?php include './view/cabecalho.php'; ?>

    <div class="container">
        <header>
            <h1>Sistema de Estoque</h1>
            <p>Bem-vindo ao sistema de gestão de estoque do Mercado de Horticultura.</p>
        </header>

        <section>
            <h2>O Projeto</h2>
            <p>
                Este projeto visa fornecer uma solução eficiente para o gerenciamento de estoque em um mercado de horticultura.
                Através deste sistema, você poderá visualizar informações sobre produtos, gerenciar o estoque, realizar vendas
                e manter um registro de clientes.
            </p>
        </section>

        <section>
            <h2>Funcionalidades Principais</h2>
            <ul>
                <li>Visualização de produtos e suas informações essenciais.</li>
                <li>Gestão de estoque, permitindo atualizações e rastreamento de alterações.</li>
                <li>Registro de vendas, incluindo detalhes sobre os produtos vendidos e a data da transação.</li>
                <li>Cadastro e manutenção de informações de clientes.</li>
            </ul>
        </section>

        <footer>
            <p>&copy; <?php echo date("Y"); ?> Sistema de Estoque - Mercado de Horticultura</p>
        </footer>
    </div>

    <!-- Adicione links para os arquivos JavaScript do Bootstrap e outros scripts, se necessário -->
    <!-- <script src="caminho/para/bootstrap/js/bootstrap.min.js"></script> -->


</body>
</html>
