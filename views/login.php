<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #4A1AAF; /* Fundo roxo */
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    main {
      background-color: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
      width: 350px;
    }

    h2 {
      margin-bottom: 20px;
      font-size: 24px;
      color: #333;
    }

    form section {
      margin-bottom: 15px;
      text-align: left;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-size: 14px;
      color: #333;
    }

    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 16px;
    }

    button {
      width: 100%;
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
    <main>
    <h2>Login</h2>
      <form action="index.php?action=login" method="post">
          <section>
           <label for="email">Email</label>
           <input type="email" name="nome" id="nome" required>
          </section>
          <section>
          <label for="senha">Senha</label>
          <input type="password" name="senha" id="senha">
          </section>
          <button type="submit">Login</button>
          <a href="inde.php">Cadastre-se</a>
      </form>
    </main>
</body>
</html>

