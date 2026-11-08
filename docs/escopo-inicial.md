# Escopo inicial — Central de Solicitações API

Uma empresa fictícia precisa registrar solicitações internas e organizá-las por categoria. O primeiro ciclo entrega uma API pequena para praticar persistência, validação, relacionamentos e operações de cadastro, consulta, edição e exclusão (CRUD).

O repositório começa com o Laravel funcionando e as instruções de execução. Os modelos, tabelas e endpoints abaixo são exercícios a desenvolver nas issues; não fazem parte da implementação inicial.

## Tecnologia e convenções

- PHP e Laravel, com MySQL 8.4 no ambiente de desenvolvimento, executado pelo Docker Compose fornecido no projeto.
- Código, nomes de tabelas, campos e rotas em inglês; documentação e issues em português.
- Modelo `Category`, tabela `categories`; modelo `Ticket`, tabela `tickets`. Usamos `Ticket` para distinguir a solicitação de negócio de `Illuminate\Http\Request`.
- Rotas com prefixo `/api`, respostas JSON e datas serializadas como strings ISO 8601.
- Para receber erros em JSON, enviar `Accept: application/json`. Em requisições com corpo JSON, enviar também `Content-Type: application/json`.
- Somente dados fictícios. Código e regras são próprios deste projeto de estudo.

O MySQL local atende em `127.0.0.1:3307`, com usuário `central`. O banco de desenvolvimento é `central_solicitacoes`; o de testes automatizados é `central_solicitacoes_test`. Configure as credenciais locais no `.env` e as de testes conforme o README. A suíte força o banco de testes para manter os dados de desenvolvimento isolados. Comandos que apagam ou recriam tabelas devem usar somente o banco local correto. Para preparar inicialmente as tabelas do banco de testes, siga o comando documentado no README com `--env=testing`; os testes futuros poderão usar `RefreshDatabase`, mecanismo do Laravel que reinicia os dados de teste entre os cenários.

## Entidades

| Entidade | Campo | Regra |
| --- | --- | --- |
| Categoria | `id` | Identificador inteiro gerado pelo sistema |
| Categoria | `name` | Texto obrigatório, de 1 a 100 caracteres após remover espaços das extremidades |
| Categoria | `created_at`, `updated_at` | Datas gerenciadas pelo sistema |
| Solicitação | `id` | Identificador inteiro gerado pelo sistema |
| Solicitação | `title` | Texto obrigatório, de 1 a 150 caracteres após remover espaços das extremidades |
| Solicitação | `description` | Texto obrigatório, de 1 a 5.000 caracteres após remover espaços das extremidades |
| Solicitação | `category_id` | Identificador inteiro positivo de uma categoria existente |
| Solicitação | `created_at`, `updated_at` | Datas gerenciadas pelo sistema |

Cada solicitação pertence a uma categoria; uma categoria pode ter várias solicitações. Nomes de categoria repetidos são permitidos neste ciclo. Excluir uma solicitação remove o registro definitivamente. Uma categoria só pode ser excluída quando não tiver solicitações vinculadas.

Os campos editáveis são `name` para categorias e `title`, `description`, `category_id` para solicitações. Identificadores e datas são gerenciados pelo sistema, sem edição pelo cliente. Não há exclusão lógica neste ciclo.

## Contrato HTTP do primeiro ciclo

| Método e rota | Comportamento | Sucesso |
| --- | --- | --- |
| `POST /api/categories` | Cadastrar categoria | `201` |
| `GET /api/categories` | Listar categorias em ordem crescente de `id` | `200` |
| `GET /api/categories/{id}` | Consultar categoria | `200` |
| `PATCH /api/categories/{id}` | Alterar `name` | `200` |
| `DELETE /api/categories/{id}` | Excluir categoria sem solicitações | `204` |
| `POST /api/tickets` | Cadastrar solicitação | `201` |
| `GET /api/tickets` | Listar solicitações em ordem crescente de `id` | `200` |
| `GET /api/tickets?category_id={id}` | Filtrar solicitações por categoria | `200` |
| `GET /api/tickets/{id}` | Consultar solicitação | `200` |
| `PATCH /api/tickets/{id}` | Alterar um ou mais campos editáveis | `200` |
| `DELETE /api/tickets/{id}` | Excluir solicitação | `204` |

Respostas de criação, consulta e edição têm o formato `{"data": {...}}`, com os campos da respectiva entidade. Listagens têm `{"data": [...]}` e usam uma lista vazia quando não há resultados. Solicitações apresentam `category_id`, sem incluir a categoria inteira. A resposta `204` não tem corpo.

Erros de validação retornam `422` com `message` e `errors`, identificando os campos inválidos. Um recurso inexistente na rota retorna `404` com `message`. Tentar excluir uma categoria vinculada retorna `409` com `message`, preservando a categoria e suas solicitações. O texto exato das mensagens pode ser escolhido durante a implementação.

O filtro `category_id` é opcional e aceita um inteiro positivo. Um filtro válido que não encontra resultados, inclusive por não existir a categoria, retorna `200` com `data: []`; um filtro inválido retorna `422`. Sem filtro, a listagem apresenta todas as solicitações.

No `PATCH` de solicitações, campos ausentes mantêm o valor atual. Deve haver pelo menos um campo editável; corpo vazio ou contendo apenas campos não editáveis retorna `422`, com uma explicação em `errors.body`. Campos obrigatórios não podem ser esvaziados ou receber `null`.

## Ordem de desenvolvimento

1. Estrutura de categorias.
2. Cadastro, listagem, consulta, edição e exclusão de categorias, em issues separadas.
3. Estrutura de solicitações e relacionamento, com integridade do banco.
4. Proteção na API para exclusão de categorias vinculadas, em uma issue dedicada.
5. Cadastro, consulta, listagem, edição e exclusão de solicitações, em issues separadas.
6. Filtro de solicitações por categoria.

São 14 issues pequenas. A ordem sugerida reduz a quantidade de conceitos novos em cada entrega; as dependências exatas constam em cada issue. As issues de estrutura usam verificações locais temporárias para validar a persistência, sem entregar endpoints futuros.

## Como considerar uma issue pronta

- Todos os critérios de aceite funcionam no ambiente local.
- Os cenários de verificação foram executados e o resultado foi descrito no pull request (proposta de alteração do código para revisão).
- Os testes já existentes continuam passando. Novos testes automatizados podem ser adicionados com orientação; os cenários da issue também servem para verificações manuais enquanto esse assunto ainda estiver sendo aprendido.
- Não é necessário antecipar funcionalidades de outras issues. A revisão avalia comportamento e entendimento das decisões.

## Fora do primeiro ciclo

Login, permissões, clientes, múltiplas empresas, status e transições, comentários, anexos, prioridade, paginação, notificações, filas, callbacks, novas tentativas após falhas, cobrança, frontend e publicação da aplicação.

A evolução seguinte será definida a partir do código desenvolvido e da autonomia demonstrada. O primeiro ciclo mantém listas pequenas e não introduz necessidades de infraestrutura além do ambiente local.
