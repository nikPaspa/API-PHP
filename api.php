<?php

// aqui ele ve se o parâmetro 'api' esta presente na URL para não confundir a API da página HTML
if(isset($_GET['api'])) {
    // cabeçalho para indicar a resposta em JSON
    header('Content-Type: application/json');

    // pega o metodo HTTP da requisição (GET ou POST)
    $method = $_SERVER['REQUEST_METHOD'];

    // resposta da API (para GET)
    $data = [
        'mensagem' => 'Bem-vindo!',
        'status' => 'sucesso'
    ];

    // processa a requisição no metodo HTTP
    if($method == 'GET') {

        echo json_encode($data);
    } elseif($method == 'POST') {
        
        
        // le os dados enviados na requisição
        $input = file_get_contents('php://input');
        // converte os dados JSON para um array
        $postData = json_decode($input, true);
        
        // verifica se a conversão do JSON foi realizada correto
        if(json_last_error() === JSON_ERROR_NONE) {
            // montando a resposta dos dados recebidos
            $response = [
                'mensagem' => 'Dados recebidos com sucesso!',
                'dados recebidos' => $postData,
                'status' => 'sucesso'
            ];
            echo json_encode($response);
        } else {
            // em caso de erro na conversão do JSON, ele vai retorna uma mensagem de erro
            $response = [
                'mensagem' => 'Erro ao decodificar JSON',
                'status' => 'erro'
            ];
            echo json_encode($response);
        }
    } else {
        // se o metodo HTTP não for GET e nem POST, ele vai informar que o metodo não foi suportado
        $response = [
            'mensagem' => 'Método não suportado',
            'status' => 'erro'
        ];
        echo json_encode($response);
    }
    // interrompe a execução para não juntar a parte HTML
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>API</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>API</h1>
    </header>
    <div class="container">
        <h2>API</h2>
        <p>Clique no botão abaixo para fazer uma requisição GET para a API.</p>
        <button class="btn" onclick="chamarAPI()">Chamar API (GET)</button>

        <h3>Enviar dados para a API (POST)</h3>
        <!-- formulario que vai enviar os dados no metodo POST -->
        <form id="formAPI">
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome" required><br><br>
            <label for="idade">Idade:</label><br>
            <input type="number" id="idade" name="idade" required><br><br>
            <button type="submit" class="btn">Enviar Dados (POST)</button>
        </form>

        <!-- div para exibir a resposta da API -->
        <div class="response" id="response"></div>
    </div>
    <script src="script.js"></script>
</body>

</html>
