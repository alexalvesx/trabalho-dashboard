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
    <h2>Gestão de Usuários</h2>
    <p>Visualize e gerencie as permissões de usuário do sistema.</p>
</div>

    
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Acesso</th>
                    <th>Status</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                    <th>Registro</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>01</td>
                    <td>Alexsander Rodrigues</td>
                    <td>alex_alves.x@hotmail.com</td>
                    <td>Administrador</td>
                    <td><span class="badge ativo">Ativo</span></td>
                    <td><button class="btn-icon"><i class="fa-solid fa-pen"></i></td>
                    <td><button class="btn-icon"><i class="fa-solid fa-circle-xmark"></i></td>
                    <td><button class="btn-icon"><i class="fa-solid fa-file-lines"></i></td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>Eric Freitas</td>
                    <td>eric@unifev.edu.br</td>
                    <td>Editor</td>
                    <td><span class="badge ativo">Ativo</span></td>
                    <td><button class="btn-icon"><i class="fa-solid fa-pen"></i></td>
                    <td><button class="btn-icon"><i class="fa-solid fa-circle-xmark"></i></td>
                    <td><button class="btn-icon"><i class="fa-solid fa-file-lines"></i></td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>John Lennon da Silva</td>
                    <td>john@outlook.com</td>
                    <td>Usuário</td>
                    <td><span class="badge ativo">Inativo</span></td>
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