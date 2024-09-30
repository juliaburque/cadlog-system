<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #4A1AAF; /* Fundo roxo */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        div {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 350px;
            color: #333;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
            font-size: 24px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-size: 14px;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 15px;
            width: 100%;
            font-size: 16px;
            box-sizing: border-box;
        }

        button {
            padding: 10px;
            background-color: #F0538E;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #e04881;
        }

        a {
            text-align: center;
            display: block;
            margin-top: 15px;
            color: #999;
            font-size: 14px;
            text-decoration: none;
        }

        a:hover {
            color: #666;
        }
    </style>
</head>
<body>
    <div>
        <h2>Cadastro de usuário</h2>
        <form action="index.php?action=register" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" required>

            <label for="perfil">Perfil</label>
            <select name="perfil" id="perfil">
                <option value="admin">Admin</option>
                <option value="gestor">Gestor</option>
                <option value="colaborador">Colaborador</option>
            </select>

            <button type="submit">Cadastrar</button>
        </form>
        <a href="index.php?action=login">Voltar ao Login</a>
    </div>
</body>
</html>
