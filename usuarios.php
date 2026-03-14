<!DOCTYPE html>
<html LANG="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="dash.css">
</head>
<body>
    <div class="dashboard-container">
        <nav>
            <ul>
                <li><a href="#">Início</a></li>
                <li><a href="#">Projetos</a></li>
                <li><a href="#">Relatórios</a></li>
                <li><a href="#">Configurações</a></li>
            </ul>
            <div class="perfil-usuario">
                <img src="https://ui-avatars.com/api/?name=Alex+Alves&background=008080&color=fff" alt="Avatar">
                <span>Alex Alves</span>
            </div>
        </nav>
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
            </tbody>
        </table>
    
</main>
</div>
<footer>
        <p>&copy; <?php echo date('Y'); ?> - Desenvolvido na aula de web I</p>
    </footer>
</body>
</html>