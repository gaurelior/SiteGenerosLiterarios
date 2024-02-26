<?php if(!session_id()) session_start();

  if(isset($_SESSION['logado'])) {
    header('Location: /');
  }

?>

<!DOCTYPE html>
<html lang="pt-br"></html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link href="./css/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/main.css">

    <link rel = "shortcut icon" type = "imagem/x-icon" href = "/icon.png"/>
  </head>
  <body class="pb-5">
    <nav class="navbar navbar-expand-right px-4 bg-body-light" style="background-color: rgb(188, 116, 255);">      <div class="container-fluid"></div>
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <img
            src="./icon.png"
            alt="Logo"
            width="45"
            height="40"
            class="d-inline-block align-text-top"
          />
          <a class="navbar-brand" href="#">Gêneros Literários</a>
        </div>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./index.php"
                >Página Inicial</a
              >
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="./aprendamais.php"> Aprenda Mais</a>
            </li>
        
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="w-25 m-auto">
      <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
        <li class="nav-item" role="presentation">
          <a
            class="nav-link active" style="background-color: rgb(219, 181, 255);"
            id="tab-login"
            data-mdb-toggle="pill"
            href="#pills-logar"
            role="tab"
            aria-controls="pills-logar"
            aria-selected="true"
            >Logar</a
          >
        </li>
        <li class="nav-item" role="presentation">
          <a
            class="nav-link"; style="background-color: rgb(219, 181, 255);"
            id="tab-register"
            data-mdb-toggle="pill"
            href="#pills-register"
            role="tab"
            aria-controls="pills-register"
            aria-selected="false"
            >Registrar</a
          >
        </li>
      </ul>
      <div class="tab-content">
        <div
          class="tab-pane fade show active"
          id="pills-logar"
          role="tabpanel"
          aria-labelledby="tab-login"
        >
          <form action="login.php" method="POST">
            <div class="text-center mb-3" style="color: purple;">
              <p>Logar com as redes sociais:</p>
              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-facebook-f" style="color: purple";></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-google" style="color: purple;"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-twitter" style="color: purple";></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-github" style="color: purple";></i>
              </button>
            </div>

            <p class="text-center" style="color: purple;">ou </p>

            <div class="form-outline mb-4" >
              <input type="email" id="loginName" class="form-control" name="email" />
              <label class="form-label" for="loginName" 
                >E-mail</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="loginPassword" class="form-control" name="senha" />
              <label class="form-label" for="loginPassword">Senha</label>
            </div>

            <div class="row mb-4" >
              <div class="col-md-6 d-flex justify-content-center" >
                <div class="form-check mb-3 mb-md-0" >
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="loginCheck"
                    
      
                  />
                 
                  <label class="form-check-label" for="loginCheck" >
                    
                    Lembrar-me
                  </label>
                </div>
              </div>

              <div class="col-md-6 d-flex justify-content-center" >
                <a href="#!">Esqueceu a senha?</a>
              </div>
            </div>

            <button type="submit" class="btn btn-light btn-block mb-4" style="background-color: rgb(219, 181, 255);">
              Logar
            </button>
          </form>
        </div>
        <div
          class="tab-pane fade"
          id="pills-register"
          role="tabpanel"
          aria-labelledby="tab-register"
        >
          <form action="cadastro.php" method="post">
            <div class="text-center mb-3" style="color: purple";>
              <p>Registrar com a rede social:</p>
              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-facebook-f" style="color: purple;"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-google" style="color: purple";></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-twitter" style="color: purple";></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-github" style="color: purple";></i>
              </button>
            </div>

            <p class="text-center" style="color: purple"; >ou:</p>

            <div class="form-outline mb-4">
              <input type="text" id="registerName" class="form-control" name="nome" />
              <label class="form-label" for="registerName">Nome</label>
            </div>

            <div class="form-outline mb-4">
              <input type="text" id="registerUsername" class="form-control" name="sobrenome" />
              <label class="form-label" for="registerUsername">Sobrenome</label>
            </div>

            <div class="form-outline mb-4">
              <input type="email" id="registerEmail" class="form-control" name="email" />
              <label class="form-label" for="registerEmail">E-mail</label>
            </div>

            <div class="form-outline mb-4">
              <input
                type="password"
                id="registerPassword"
                class="form-control"
                name="senha"
              />
              <label class="form-label" for="registerPassword">Senha</label>
            </div>

            <div class="form-outline mb-4">
              <input
                type="password"
                id="registerRepeatPassword"
                class="form-control"
                name="confirmarsenha"
              />
              <label class="form-label" for="registerRepeatPassword"
                >Confirme a senha</label
              >
            </div>

            <div class="form-check d-flex justify-content-center mb-4">
              <input
                class="form-check-input me-2"
                type="checkbox"
                value=""
                id="registerCheck"
                checked
                required
                aria-describedby="registerCheckHelpText"
              />
              <label class="form-check-label" for="registerCheck" >
                Confirmo que li os termos de serviços e privacidades
              </label>
            </div>

            <button type="submit" class="btn btn-light btn-block mb-3" style="background-color: rgb(219, 181, 255)";>
              Registrar
            </button>
          </form>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    <script src="./js/mdb.min.js"></script>
  </body>
</html>
