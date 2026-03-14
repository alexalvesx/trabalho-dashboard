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
            <section class="card-from">
                <div class="form-header">
                    <h2><i class="fa-solid fa-user-plus"></i> Novo Usuário </h2>
                    <p>Preencha os dados abaixo para registrar um novo acesso.</p>
                </div>

                <form action="processa.php" method="POST">
                    <div class="form-group">
                        <label for="nome">Nome Completo</label>
                        <input text="text" id="nome" name="nome" placeholder="Ex: Eric Freitas" required>
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input text="e-mail" id="e-mail" name="e-mail" placeholder="nome@empresa.com" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group flex-1">
                            <label for="senha">Senha</label>
                            <input text="password" id="senha" name="nome" name="senha" required>
                        </div>

                        <div class="form-group flex-1">
                            <label for="nivel">Nível</label>
                            <select id="nivel" name="nivel">
                                <option value="1">Usuário</option>
                                <option value="2">Administrador</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-action">
                        <button type="icon" class="btn-save"><i class="fa-floppy-disk"></i>Finalizar Cadastro</button>
                        <a href="index.php" class="btn-cancel">Cancelar</a>
                    </div>

                </form>
            </section>
        </main>
    </div>
</body>

</html>