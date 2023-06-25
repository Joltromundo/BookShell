API de Livros - Documentação
Esta é a documentação da API de Livros, que fornece acesso a informações sobre livros. Para acessar os dados da API, é necessário autenticar-se primeiro usando o endpoint /api/auth/login.

Autenticação
Endpoint: /api/auth/login

Método: POST

Corpo da solicitação (JSON):

json
Copy code
{
  "email": "seu_email",
  "password": "sua_senha"
}
Resposta de sucesso:

json
Copy code
{
  "access_token": "seu_token_de_acesso",
  "token_type": "Bearer",
  "expires_in": 3600
}
Endpoints Disponíveis
Para acessar os dados dos livros, você precisa incluir o token de acesso no cabeçalho de autorização de todas as solicitações GET. O cabeçalho de autorização deve ter o valor "Bearer <token_de_acesso>".

1. Listar todos os livros
Endpoint: /api/books

Método: GET

Cabeçalho de Autorização:

makefile
Copy code
Authorization: Bearer <seu_token_de_acesso>
Resposta de sucesso:

json
Copy code
[
  {
    "id": 1,
    "title": "Título do Livro 1",
    "author": "Autor do Livro 1",
    "published_year": 2022
  },
  {
    "id": 2,
    "title": "Título do Livro 2",
    "author": "Autor do Livro 2",
    "published_year": 2021
  },
  ...
]
2. Obter detalhes de um livro
Endpoint: /api/books/{id}

Método: GET

Cabeçalho de Autorização:

makefile
Copy code
Authorization: Bearer <seu_token_de_acesso>
Parâmetro de URL:

{id}: O ID do livro desejado
Resposta de sucesso:

json
Copy code
{
  "id": 1,
  "title": "Título do Livro",
  "author": "Autor do Livro",
  "published_year": 2022
}
Exemplo de Uso
Aqui está um exemplo de como usar a API de Livros:

Faça uma solicitação POST para o endpoint /api/auth/login com seu email e senha para obter o token de acesso.
Copie o token de acesso retornado na resposta.
Para listar todos os livros, faça uma solicitação GET para o endpoint /api/books e inclua o token de acesso no cabeçalho de autorização.
Para obter os detalhes de um livro específico, faça uma solicitação GET para o endpoint /api/books/{id} substituindo {id} pelo ID do livro desejado e inclua o token de acesso no cabeçalho de autorização.
Certifique-se de substituir <seu_token_de_acesso>, <seu_email> e <sua_senha> com suas próprias informações de autenticação.