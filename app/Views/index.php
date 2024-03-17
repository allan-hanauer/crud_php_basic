<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('src/styles/index.css') ?>">
</head>

<body>
    <h1>Hello World</h1>
    <form action="<?= base_url("/validation") ?>" method="post">
        <div>
            <label for="name">
                Nome
                <input type="text" name="name" required minlength="3" maxlength="255" id="inp_name">
            </label>
        </div>
        <div>
            <label for="password">
                Senha
                <input type="password" minlength="8" maxlength="64" required name="password" id="inp_pass">
            </label>
        </div>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>