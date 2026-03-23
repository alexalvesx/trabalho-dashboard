<!DOCTYPE html>
<html LANG="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="dash.css">
</head>

<body>
    <div class="dashboard-container">
        <?php include 'menu.php'; ?>
        <main>
            <div class="header-contente">
                <h2>Gestão de Postagens</h2>
                <p>Visualize e gerencie as postagens.</p>
            </div>

            <p type="button"><a class="cadastro" href="#">Cadastro de Postagens</a></p>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Conteúdo</th>
                        <th>Categoria</th>
                        <th>Status</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                        <th>Registro</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>123456</td>
                        <td>Abra Kadabra</td>
                        <td>Cartola</td>
                        <td>Místico</td>

                        <td><span class="badge ativo">Ativo</span></td>
                        <td><button class="btn-icon"><i class="fa-solid fa-pen"></i></td>
                        <td><button class="btn-icon"><i class="fa-solid fa-circle-xmark"></i></td>
                        <td><button class="btn-icon"><i class="fa-solid fa-file-lines"></i></td>
                    </tr>
                    <tr>
                        <td>123456</td>
                        <td>Abra Kadabra</td>
                        <td>Cartola</td>
                        <td>Místico</td>

                        <td><span class="badge ativo">Ativo</span></td>
                        <td><button class="btn-icon"><i class="fa-solid fa-pen"></i></td>
                        <td><button class="btn-icon"><i class="fa-solid fa-circle-xmark"></i></td>
                        <td><button class="btn-icon"><i class="fa-solid fa-file-lines"></i></td>
                    </tr>
                    <tr>
                        <td>123456</td>
                        <td>Abra Kadabra</td>
                        <td>Cartola</td>
                        <td>Místico</td>

                        <td><span class="badge ativo">Ativo</span></td>
                        <td><button class="btn-icon"><i class="fa-solid fa-pen"></i></td>
                        <td><button class="btn-icon"><i class="fa-solid fa-circle-xmark"></i></td>
                        <td><button class="btn-icon"><i class="fa-solid fa-file-lines"></i></td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>