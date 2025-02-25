<?php 
$con = new mysqli("127.0.0.1", "root", "", "loja");
$where = "";

        if (isset($_GET["localizar"])) {
            $localizar = $_GET["localizar"];
            if (!empty($localizar)) {
                $where = "WHERE nome LIKE '%$localizar%' OR estado LIKE '%$localizar%' OR cidade LIKE '%$localizar%' OR cpf LIKE '%$localizar%'";
            }
        }
    
        $sql = "SELECT * FROM Carro $where";
        $rs = $con->query($sql);
    
        if ($rs !== false && $rs->num_rows > 0) {
            header("Location: {$_SERVER['PHP_SELF']}");
        exit;
    } else {
        echo "Erro ao procurar " . $con->error;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <title>Loja de carros</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="script.js"></script>
</head>
<body>
    <div class="sidebar" id="sidebar">
        <ul>
            <h2 class="text-danger">JGL MENU</h2>
            <li><a href="leilao.html">Carros disponíveis para leilão</a></li>
            <li><a href="#">Seminovos</a></li>
            <li><a href="#">Importados</a></li>
            <li><a href="#">Área de admin</a></li>
        </ul>
    </div>
    <div class="login-link">
        <a href="login.html">Login</a>
    </div>
    <header>
        <div id="menu-toggle" class="d-flex align-items-center" style="cursor: pointer;">
            <svg xmlns="http://www.w3.org/2000/svg" width="26px" height="26px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        </div>
        <div class="container-flex">
            <div class="logo2">
                <img src="imagens/JGL-removebg-preview.png" alt="" width="120" height="120">
            </div>
            <div class="logo">
                <h1 class="title_frontpage">JGL Automotivos</h1>
            </div>
        </div>  
        <nav class="nav_bar2">
            <a class="nav_bar" href="index2.html">Home</a>
            <a class="nav_bar" href="quem-somos.html">Quem somos</a>
            <a class="nav_bar" href="contato.html">Contato</a>
        </nav>
    </header>
    <div class="car-container">
        <a href="pagina-de-compra-golzinho.html" class="car-item">
            <img class="car-image" src="imagens/Golzinho Pica Last Ed 1.jpg" alt="Gol Last Edition 2023" width="300">
            <div class="car-info">
                <h2 class="car-title">Gol Last Edition 2023</h2>
                <p class="car-price">Preço Base: R$ 8.000,00</p>
                <p id="errorText" class="error-text">O valor do lance está muito baixo</p>
            </div>
        </a>
        <a href="pagina-de-compra-palio.html" class="car-item">
            <img class="car-image" src="imagens/Fiat 500 1.jpg" alt="Fiat 500" width="300"> 
            <div class="car-info">
                <h2 class="car-title">Fiat 500</h2>
                <p class="car-price">Preço Base: R$ 8.000,00</p>
                <p id="errorText" class="error-text">O valor do lance está muito baixo</p>
            </div>
        </a>
        <a href="pagina-de-compra-ranger.html" class="car-item">
            <img class="car-image" src="imagens/Ranger FX4 Ford 1.jpg" alt="Ranger FX4 Ford" width="300">
            <div class="car-info">
                <h2 class="car-title">Ranger FX4</h2>
                <p class="car-price">Preço: R$288.990,00</p>
            </div>
        </a>
        <a href="pagina-de-compra-peugeot.html" class="car-item">
            <img class="car-image" src="imagens/Peugeot 208 1.jpg" alt="Peugeot 208" width="300">
            <div class="car-info">
                <h2 class="car-title">Peugeot 208</h2>
                <p class="car-price">Preço: R$95.990,00</p>
            </div>
        </a>
        <a href="pagina-de-compra-camaro.html" class="car-item">
            <img class="car-image" src="imagens/Camaro 1.jpg" alt="Camaro 2024" width="300">
            <div class="car-info">
                <h2 class="car-title">Camaro 2024</h2>
                <p class="car-price">Preço: R$529.900,00</p>
            </div>
        </a>
        <a href="pagina-de-compra-audi.html" class="car-item">
            <img class="car-image" src="imagens/Audi R8 1.jpg" alt="Audi R8 2024" width="300">
            <div class="car-info">
                <h2 class="car-title">Audi R8 2024</h2>
                <p class="car-price">Preço: R$5.189.937,00</p>
            </div>
        </a>
        <a href="pagina-de-compra-supra.html" class="car-item">
            <img class="car-image" src="imagens/Supra 2024 1.jpg" alt="Toyota Supra 2024" width="300">
            <div class="car-info">
                <h2 class="car-title">Toyota Supra 2024</h2>
                <p class="car-price">Preço: R$8.000,00</p>
            </div>
        </a>
        <a href="#" class="car-item">
            <img class="car-image" src="imagens/Chiron.jpg" alt="Chiron" width="300">
            <div class="car-info">
                <h2 class="car-title">Buggati Chíron</h2>
                <p class="car-price">Preço: R$8.000,00</p>
            </div>
        </a>
    </div>
    <footer>
        <p style="text-align:center;">Todos os direitos reservados</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $('#menu-toggle').click(function () {
            $('#sidebar').toggleClass('active');
        });
        $(document).mouseup(function (e) {
            var container = $("#sidebar");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                container.removeClass('active');
            }
        });
    </script>
</body>
</html>
