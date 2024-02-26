<?php
    ini_set('display_errors', true);
    $conexao = mysqli_connect("localhost", "root", "abc123*", "generosdb", "3307");

    if(mysqli_connect_errno()){
        echo "Deu erro na conexão";
    };

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $senha = $_POST['senha'];
    $confirmarsenha = $_POST['confirmarsenha'];
    if($senha != $confirmarsenha){
        //Este bloco de código cria um script em JS (ou seja, injeta pelo PHP) para depois de 5 segundos, redirecionar para o "login.html"
        echo "<h1>Senha incorreta!</h1>";
        echo "
            <script>
                setTimeout(function () {
                    window.location.href = 'login.php';
                }, 5000);
            </script>
        ";
        exit();
    }
    $email = $_POST['email'];
    $query = mysqli_prepare($conexao, "SELECT * FROM Usuarios WHERE `email` = ?;");
    $query->bind_param('s', $email);
    $query->execute();
    $resultados = $query->get_result();
    if($resultados->num_rows > 0){
        echo "<h1>Esse usuário já existe!</h1>";
        //Este bloco de código cria um script em JS (ou seja, injeta pelo PHP) para depois de 5 segundos, redirecionar para o "login.html"
        echo "
            <script>
                setTimeout(function () {
                    window.location.href = 'login.php';
                }, 5000);
            </script>
        ";
    } else {
        $query = mysqli_prepare($conexao, "INSERT INTO Usuarios (nome, sobrenome, email, senha) VALUES (?, ?, ?, ?);");
        $query->bind_param("ssss", $nome, $sobrenome, $email, $senha);
        $query->execute();
        header("Location: telalogin.php");
    }