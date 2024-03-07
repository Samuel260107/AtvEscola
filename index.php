<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <Div>
    <form action="cadastrar.php" method="post">
        <input name="nome">
        <input name="curso">

        <select name="linguagem" required="required">
        <option value="">Escolha uma linguagem de programação</option>
        <option value="csharp">C#</option>
        <option value="php">PHP</option>
        <option value="java">Java</option>
        <option value="javascript">JavaScript</option>
        <option value="cpp">C++</option>
        </select>
        
        <h1>Sexo:</h1>
        <input type="radio" name="masc">
        <input type="radio" name="fem">
        
        <button type="submit"></button>
    </form>
    <Div>
</body>
</html>