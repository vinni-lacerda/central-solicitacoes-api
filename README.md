# Central de Solicitações API

Projeto de estudo em PHP e Laravel para praticar o desenvolvimento de uma API por meio de pequenas entregas. O produto permitirá cadastrar categorias e registrar solicitações, chamadas de `tickets` no código.

Esta base contém o Laravel e a configuração de desenvolvimento. As funcionalidades de `Category` e `Ticket` serão construídas nas issues; ainda não existem endpoints de negócio.

## Requisitos

- PHP 8.3 ou superior, com as extensões exigidas pelo Composer e `pdo_mysql`.
- Composer 2.
- Git.
- Docker com Docker Compose, caso use o banco fornecido pelo projeto.

O caminho principal usa PHP e Composer no WSL/Linux e executa somente o MySQL 8.4 no Docker. Node.js e npm não são necessários para desenvolver esta API. Os arquivos de frontend do Laravel foram mantidos como parte do esqueleto original.

## Primeira execução

```bash
git clone https://github.com/vinni-lacerda/central-solicitacoes-api.git
cd central-solicitacoes-api

composer install
cp .env.example .env
cp .env.testing.example .env.testing
php artisan key:generate
php artisan key:generate --env=testing

docker compose up -d --wait
php artisan migrate
php artisan migrate --env=testing
composer dev
```

A aplicação estará disponível em `http://127.0.0.1:8000`. O comando `composer dev` mantém o servidor local em execução; use outro terminal para os demais comandos.

Para verificar se o Laravel iniciou:

```bash
curl -i http://127.0.0.1:8000/up
```

A resposta deve ter status HTTP `200`. As futuras rotas da API usarão o prefixo `/api`, com registro em `routes/api.php`.

## Banco de dados

O Compose disponibiliza um MySQL exclusivo deste projeto em `127.0.0.1:3307`, com dois bancos separados:

| Uso | Banco |
| --- | --- |
| Desenvolvimento | `central_solicitacoes` |
| Testes | `central_solicitacoes_test` |

Os exemplos usam o usuário `central` e a senha `central_local`. São credenciais fictícias para desenvolvimento local. A porta `3307` evita disputar a porta padrão `3306` com outras instalações.

O banco de testes deve permanecer separado do banco de desenvolvimento, pois testes com recriação de tabelas podem apagar seus dados. Confira a conexão antes de executar comandos destrutivos e reserve `migrate:fresh` para o banco de testes.

Se preferir usar uma instalação própria do MySQL 8.4:

1. Crie os bancos de desenvolvimento e testes indicados acima.
2. Crie um usuário com acesso somente a esses dois bancos.
3. Ajuste `DB_HOST`, `DB_PORT`, `DB_USERNAME` e `DB_PASSWORD` em `.env` e `.env.testing`.
4. Mantenha `DB_DATABASE` apontando para o banco correspondente em cada arquivo.
5. Pule o comando `docker compose up`.

Depois de alterar a configuração, limpe o cache:

```bash
php artisan config:clear
```

Os arquivos `.env` e `.env.testing` são locais e não devem ser versionados. Use os arquivos `.example` como referência ao configurar outra máquina.

Para parar o MySQL sem apagar seus dados:

```bash
docker compose down
```

Os dados persistem no volume do Docker. Os scripts de criação dos bancos executam na primeira inicialização de um volume novo.

## Verificações

```bash
composer test
composer lint
```

`composer test` executa o PHPUnit. A base começa com os testes padrão do Laravel; os testes das regras de negócio serão adicionados conforme as funcionalidades forem desenvolvidas. A configuração de testes usa MySQL e o banco `central_solicitacoes_test`.

`composer lint` verifica a formatação com Laravel Pint. Para aplicar os ajustes de formatação:

```bash
composer format
```

O repositório inclui um workflow do GitHub Actions para executar as verificações em novas alterações. O resultado de cada execução pode ser consultado na aba **Actions** do GitHub.

## Como estudar neste projeto

O primeiro ciclo está dividido em 14 issues pequenas sobre categorias e solicitações. Os critérios de aceite descrevem o comportamento esperado; a implementação fica a cargo de quem está estudando. A mentoria ajuda com investigação, pistas e revisão de código.

O [roteiro completo](docs/roteiro-de-estudo.md) reúne 62 issues em cinco ciclos. Depois dos fundamentos, a trilha passa por testes e consultas, regras e comentários, usuários e permissões, e filas e exportações. As etapas futuras são planejadas e podem ser revistas conforme o aprendizado.

Comece pela primeira issue e respeite as dependências indicadas antes de avançar. Leia:

- [Escopo inicial e contratos da API](docs/escopo-inicial.md).
- [Ordem das primeiras issues](docs/backlog.md).
- [Roteiro completo e próximos ciclos](docs/roteiro-de-estudo.md).
- [Fluxo de desenvolvimento e revisão](docs/fluxo-de-trabalho.md).

Login, permissões, paginação, histórico, filas e exportações pertencem aos ciclos futuros descritos no roteiro. O material usa regras próprias e dados fictícios.

## Referências

- [Instalação do Laravel 13](https://laravel.com/docs/13.x/installation).
- [Rotas do Laravel 13](https://laravel.com/docs/13.x/routing).
- [Testes no Laravel 13](https://laravel.com/docs/13.x/testing).
- [Imagem oficial do MySQL no Docker](https://hub.docker.com/_/mysql).
