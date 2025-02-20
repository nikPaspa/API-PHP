# Projeto de API - PHP
Projeto web que demonstra o uso de uma API (em PHP) integrada com uma interface simples em HTML, CSS e JavaScript. A aplicação permite realizar requisições GET e POST para a API, exibindo as respostas de forma organizada na tela.

## Visão Geral
**O projeto consiste basicamente em:**

* **Arquivo PHP (api.php):** Processa requisições GET e POST, retornando dados em formato JSON.

* **Arquivo JavaScript:** script.js script para lidar com as requisições do lado do cliente (fetch, exibição de resultados, etc.).

* **Arquivo CSS:** style.css style para estilizar a página de maneira simples e direta.

## Estrutura de Pastas (Exemplo)

```
.
├── api.php
├── script.js
├── style.css
└── README.md
```
### api.php
* **Arquivo responsável por receber e processar requisições da aplicação.**
* **Na rota (?api=true), você pode receber dados por GET (para leitura) e POST (para criação/atualização).**
* **Retorna as respostas no formato JSON.**
  
### script.js
* **Responsável por enviar requisições ao api.php usando a função fetch.**
* **Possui duas principais funcionalidades:**
  * **Requisição GET:** Retorna dados ao clicar em algum botão ou evento definido.
  * **Requisição POST:** Envia dados do formulário (nome e idade) para a API, exibindo a resposta na página.
### style.css
* **Arquivo que define o estilo visual da página, incluindo cores, margens, espaçamento e layout.**
* **Proporciona uma aparência simples e limpa à interface.**
## Como Executar Localmente

**Clonar o repositório**
```
git clone https://github.com/nikPaspa/API-PHP.git
```

**Configurar um servidor local**

* **Este projeto depende de um servidor PHP para executar o api.php.**
* **Você pode usar o PHP embutido para testes:**
```
cd API-PHP
php -S localhost:8000
```
*Alternativamente, utilize ferramentas como XAMPP ou WAMP para servir os arquivos.*

**Acessar a aplicação**
  * **Abra o navegador e acesse:**
```
http://localhost:8000/api.php
```
*Caso esteja usando outra porta ou ambiente, ajuste a URL conforme necessário.*
## Uso
**Visualizar dados via GET**

* **Clique no botão que chama a função chamarAPI() em script.js script para fazer uma requisição GET ao api.php.**
* **A resposta (JSON) retornada pela API será exibida na área de resposta da página.**

**Enviar dados via POST**

* **Preencha o formulário com campos (nome e idade).**
* **Clique em “Enviar” para que script.js envie via POST para o api.php.**
* **Verifique a resposta (JSON) retornada na mesma área de resposta.**
## Personalização
* **Você pode adaptar o código de api.php para processar e armazenar as informações de forma diferente, de acordo com as necessidades do seu projeto.**
* **É possível modificar o layout em style.css style para adequar cores, fontes e espaçamento ao seu gosto.**
* **Em script.js script, você pode personalizar as rotas e a forma de exibir mensagens, dependendo do formato da sua API.**
## Tecnologias Utilizadas
* **PHP (para processar e retornar dados)**
* **HTML5 (estrutura da página)**
* **CSS3 (estilização via style.css style)**
* **JavaScript (requisições e manipulação do DOM com script.js script)**




# Foto da Página: 

![Imagem do WhatsApp de 2025-02-20 à(s) 18 03 50_b845a27d](https://github.com/user-attachments/assets/dc559c7c-290c-4d0a-9906-e7e24516879d)
