<h1>BookShell API</h1>

<p>Esta é a documentação da API de Livros, que fornece acesso a informações
  sobre livros. Para acessar os dados da API, é necessário autenticar-se
  primeiro usando o endpoint <code>/api/auth/login</code>.</p>

<h2>Autenticação</h2>

<p><strong>Endpoint:</strong> <code>/api/auth/login</code></p>
<p><strong>Método:</strong> POST</p>
<p><strong>Corpo da solicitação (JSON):</strong></p>
<pre>
        <code>
{
  "email": "seu_email",
  "password": "sua_senha"
}
        </code>
    </pre>
<p><strong>Resposta de sucesso:</strong></p>
<pre>
        <code>
{
  "access_token": "seu_token_de_acesso",
  "token_type": "Bearer",
  "expires_in": 3600
}
        </code>
    </pre>

<hr>

<h2>Endpoints Disponíveis</h2>

<p>Para acessar os dados dos livros, você precisa incluir o token de acesso no
  cabeçalho de autorização de todas as solicitações GET. O cabeçalho de
  autorização deve ter o valor "Bearer &lt;token_de_acesso&gt;".</p>

<h3>1. Listar todos os livros</h3>

<p><strong>Endpoint:</strong> <code>/api/books</code></p>
<p><strong>Método:</strong> GET</p>
<p><strong>Cabeçalho de Autorização:</strong></p>
<pre>
        <code>
Authorization: Bearer &lt;seu_token_de_acesso&gt;
        </code>
    </pre>
<p><strong>Resposta de sucesso:</strong></p>
<pre>
        <code>
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
        </code>
    </pre>

<small>Veja um exemplo real em: /books</small>

<h3>2. Obter detalhes de um livro</h3>

<p><strong>Endpoint:</strong> <code>/api/books/{id}</code></p>
<p><strong>Método:</strong> GET</p>
<p><strong>Cabeçalho de Autorização:</strong></p>
<pre>
        <code>
Authorization: Bearer &lt;seu_token_de_acesso&gt;
        </code>
    </pre>
<p><strong>Parâmetro de URL:</strong></p>
<ul>
  <li><code>{id}</code>: O ID do livro desejado</li>
</ul>
<p><strong>Resposta de sucesso:</strong></p>
<pre>
        <code>
{
  "id": 1,
  "title": "Título do Livro",
  "author": "Autor do Livro",
  "published_year": 2022
}
        </code>
    </pre>

<hr>

<h2>Exemplo de Uso</h2>

<p>Aqui está um exemplo de como usar a API de Livros:</p>

<ol>
  <li>Faça uma solicitação POST para o endpoint <code>/api/auth/login</code> com
    seu email e senha para obter o token de acesso.</li>
  <li>Copie o token de acesso retornado na resposta.</li>
  <li>Para listar todos os livros, faça uma solicitação GET para o endpoint
    <code>/api/books</code> e inclua o token de acesso no cabeçalho de
    autorização.</li>
  <li>Para obter os detalhes de um livro específico, faça uma solicitação GET
    para o endpoint <code>/api/books/{id}</code> substituindo <code>{id}</code>
    pelo ID do livro desejado e inclua o token de acesso no cabeçalho de
    autorização.</li>
</ol>

<p>Certifique-se de substituir <code>&lt;seu_token_de_acesso&gt;</code>, <code>&lt;seu_email&gt;</code>
  e <code>&lt;sua_senha&gt;</code> com suas próprias informações de
  autenticação.</p>