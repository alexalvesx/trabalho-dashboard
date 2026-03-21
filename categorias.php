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
    <h2>Gestão de Categorias</h2>
    <p>Visualize e gerencie as categorias.</p>
</div>

    <p type="button"><a class="cadastro" href="#">Cadastro de Categorias</a></p>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Status</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Categoria 1</td>
                    <td>Testando 1</td>
                    <td><span class="badge ativo">Ativo</span></td>
                    <td><button class="btn-icon"><i class="fa-solid fa-pen"></i></td>
                    <td><button class="btn-icon"><i class="fa-solid fa-circle-xmark"></i></td>
                    <td><button class="btn-icon"><i class="fa-solid fa-file-lines"></i></td>
                </tr>
                <tr>
                    <td>Categoria 1</td>
                    <td>Testando 1</td>
                    <td><span class="badge ativo">Ativo</span></td>
                    <td><button class="btn-icon"><i class="fa-solid fa-pen"></i></td>
                    <td><button class="btn-icon"><i class="fa-solid fa-circle-xmark"></i></td>
                    <td><button class="btn-icon"><i class="fa-solid fa-file-lines"></i></td>
                </tr>
                <tr>
                    <td>Categoria 1</td>
                    <td>Testando 1</td>
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