<?php if(!session_id()) session_start();
    ini_set('display_errors', true);
    $conexao = mysqli_connect("localhost", "root", "abc123*", "generosdb", "3307"); //Muda a porta de 3307 para 3306 e altera a senha

    if(mysqli_connect_errno()){
        echo "Deu erro na conexão";
    };

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $query = mysqli_prepare($conexao, "SELECT * FROM Usuarios WHERE `email` = ?;");
    $query->bind_param('s', $email);
    $query->execute();
    $resultados = $query->get_result();
    if($resultados->num_rows > 0){
        if($resultados->fetch_assoc()['senha'] != $senha) {
            echo "<h1>Senha incorreta</h1>";
            //Este bloco de código cria um script em JS (ou seja, injeta pelo PHP) para depois de 5 segundos, redirecionar para o "login.html"
            echo "
                <script>
                    setTimeout(function () {
                        window.location.href = '/telalogin.php';
                    }, 5000);
                </script>
            ";
            exit();
        }
        $_SESSION['logado'] = true;
        $dados = [
            "nome" => $resultados->fetch_assoc()['nome'],
            "email" => $resultados->fetch_assoc()['email']
        ];
        $_SESSION['dados'] = serialize($dados);
        header("Location: telalogin.php");

    } else {
        echo "<h1>Esse usuário não existe</h1>";
        //Este bloco de código cria um script em JS (ou seja, injeta pelo PHP) para depois de 5 segundos, redirecionar para o "login.html"
        echo "
            <script>
                setTimeout(function () {
                    window.location.href = '/telalogin.php';
                }, 5000);
            </script>
        ";
    }
