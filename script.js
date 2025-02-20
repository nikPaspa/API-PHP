// essa function faz uma requisição do GET para a API
function chamarAPI() {
    fetch('?api=true')
        .then(response => response.json())
        .then(data => {
            // ela vai mostrar uma resposta formatada na div "response"
            document.getElementById('response').innerText = JSON.stringify(data, null, 4);
        })
        .catch(error => {
            document.getElementById('response').innerText = 'Erro: ' + error;
        });
}

// pega o envio do formulario e faz uma requisição POST
document.getElementById('formAPI').addEventListener('submit', function (e) {
    e.preventDefault(); // Impede o envio padrão do formulario

    // objeto com os dados do formulario
    const dados = {
        nome: document.getElementById('nome').value,
        idade: document.getElementById('idade').value
    };

    // aqui faz uma requisição POST para a API enviando os dados no formato JSON
    fetch('?api=true', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(dados)
        })
        .then(response => response.json())
        .then(data => {
            // vai exibir uma resposta da API na div "response"
            document.getElementById('response').innerText = JSON.stringify(data, null, 4);
        })
        .catch(error => {
            document.getElementById('response').innerText = 'Erro: ' + error;
        });
});