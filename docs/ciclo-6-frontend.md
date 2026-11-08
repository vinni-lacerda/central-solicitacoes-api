# Ciclo 6 — Frontend essencial com Vue

Este ciclo reúne [24 issues planejadas](https://github.com/vinni-lacerda/central-solicitacoes-api/milestone/6): 14 fáceis e 10 intermediárias. Nenhuma é classificada como difícil. O foco principal do projeto continua sendo o backend; a interface serve para praticar o consumo da API com Vue.

A tecnologia escolhida é **Vue 3 com JavaScript e Vite**, em uma pasta `frontend/` no mesmo repositório. Essa pasta será criada como exercício da primeira issue deste ciclo. As telas ainda não estão implementadas.

## Progressão

1. Preparar o ambiente e construir componentes estáticos: layout, tabela e formulários.
2. Carregar categorias reais e conectar cadastro, login e logout.
3. Consultar e alterar solicitações, com filtros simples, paginação e mensagens de erro.
4. Trabalhar com comentários e administração de categorias.
5. Solicitar uma exportação própria, consultar seu progresso manualmente e baixar o CSV.
6. Revisar o uso no celular, pelo teclado e durante falhas de requisição.

As primeiras tarefas visuais podem ser estudadas separadamente. Para integrar uma tela, conclua os endpoints indicados nas dependências. Não é preciso antecipar frontend ao implementar os primeiros CRUDs da API.

## Decisões para manter o ciclo simples

- Componentes `.vue`, Composition API e `script setup`, usando HTML semântico e CSS simples.
- Navegação entre componentes com estado em memória. O ciclo não exige roteador, biblioteca de estado, TypeScript, gráficos ou animações.
- A interface abre no servidor de desenvolvimento do Vite. As chamadas relativas a `/api` passam pelo proxy local para o Laravel.
- O backend continua na raiz do repositório; o frontend tem seu próprio `package.json` e lockfile. Os arquivos padrão de assets do Laravel não passam a ser a aplicação Vue.
- Node/npm serão necessários ao implementar este ciclo. A API continua podendo ser estudada com PHP, Composer e MySQL.
- Autenticação usa os tokens Bearer já planejados no backend, guardados apenas na memória da aba. Recarregar a interface exige novo login.
- As ações respeitam a autorização da API. Como login e `/api/me` não retornam `role`, o frontend não tenta deduzir o papel do usuário.
- O progresso das exportações é atualizado por um botão; não é necessário implementar atualização automática em segundo plano.

Publicação em produção e uma arquitetura de frontend maior ficam fora deste ciclo. A primeira issue explica como iniciar Laravel e Vite localmente e como verificar o build.

## Ordem das entregas

| Ordem | Issue | Dificuldade | Pré-requisitos |
| --- | --- | --- | --- |
| 63 | [#63 — Preparar o frontend Vue 3 no mesmo repositório](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/63) | Fácil | — |
| 64 | [#64 — Montar o layout e a navegação entre componentes Vue](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/64) | Fácil | [#63](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/63) |
| 65 | [#65 — Exibir uma tabela de solicitações com dados fictícios](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/65) | Fácil | [#64](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/64) |
| 66 | [#66 — Criar o formulário visual de uma solicitação](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/66) | Fácil | [#64](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/64), [#65](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/65) |
| 67 | [#67 — Montar os componentes visuais de login e cadastro](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/67) | Fácil | [#64](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/64) |
| 68 | [#68 — Carregar categorias reais e tratar os estados da consulta](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/68) | Média | [#20](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/20), [#64](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/64) |
| 69 | [#69 — Conectar o login e manter a autenticação em memória](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/69) | Média | [#41](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/41), [#42](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/42), [#50](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/50), [#67](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/67), [#68](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/68) |
| 70 | [#70 — Sair da conta e limpar a interface quando a sessão expirar](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/70) | Fácil | [#43](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/43), [#69](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/69) |
| 71 | [#71 — Conectar o formulário Vue de cadastro de usuário](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/71) | Fácil | [#40](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/40), [#67](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/67), [#69](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/69) |
| 72 | [#72 — Carregar solicitações reais na listagem Vue autenticada](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/72) | Fácil | [#21](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/21), [#46](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/46), [#65](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/65), [#69](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/69), [#70](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/70) |
| 73 | [#73 — Filtrar solicitações e navegar entre páginas no Vue](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/73) | Média | [#22](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/22), [#31](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/31), [#68](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/68), [#72](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/72) |
| 74 | [#74 — Cadastrar uma solicitação pelo formulário Vue](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/74) | Média | [#45](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/45), [#66](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/66), [#68](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/68), [#70](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/70), [#72](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/72) |
| 75 | [#75 — Exibir os detalhes de uma solicitação em um componente Vue](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/75) | Fácil | [#25](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/25), [#46](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/46), [#72](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/72) |
| 76 | [#76 — Editar uma solicitação com campos preenchidos no Vue](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/76) | Média | [#46](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/46), [#68](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/68), [#74](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/74), [#75](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/75) |
| 77 | [#77 — Excluir uma solicitação com confirmação simples no Vue](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/77) | Fácil | [#46](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/46), [#72](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/72), [#75](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/75) |
| 78 | [#78 — Alterar o status de atendimento pela interface Vue](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/78) | Média | [#30](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/30), [#32](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/32), [#46](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/46), [#75](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/75) |
| 79 | [#79 — Listar e adicionar comentários no detalhe da solicitação](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/79) | Média | [#47](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/47), [#70](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/70), [#75](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/75) |
| 80 | [#80 — Editar e excluir comentários com retorno de permissão](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/80) | Média | [#47](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/47), [#79](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/79) |
| 81 | [#81 — Cadastrar categorias pela interface Vue](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/81) | Fácil | [#48](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/48), [#68](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/68), [#70](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/70) |
| 82 | [#82 — Editar o nome de uma categoria na interface](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/82) | Fácil | [#48](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/48), [#68](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/68), [#81](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/81) |
| 83 | [#83 — Excluir uma categoria e apresentar o bloqueio por uso](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/83) | Fácil | [#48](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/48), [#68](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/68), [#70](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/70) |
| 84 | [#84 — Solicitar exportação própria e consultar o progresso manualmente](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/84) | Média | [#56](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/56), [#57](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/57), [#61](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/61), [#70](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/70), [#73](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/73) |
| 85 | [#85 — Baixar o CSV autenticado pela interface Vue](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/85) | Média | [#58](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/58), [#61](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/61), [#84](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/84) |
| 86 | [#86 — Revisar a interface no celular, no teclado e nos estados de erro](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/86) | Fácil | [#71](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/71), [#73](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/73), [#74](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/74), [#76](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/76), [#77](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/77), [#78](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/78), [#80](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/80), [#81](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/81), [#82](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/82), [#83](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/83), [#85](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/85) |

## Como verificar cada entrega

Use os cenários da própria issue com dados fictícios e ferramentas do navegador. Verifique também lista vazia, carregamento, validação e erro de rede quando fizerem parte da tarefa. Não é necessário instalar um framework de testes de frontend neste ciclo.

Depois de preparar a estrutura, o build do frontend deve continuar passando. Os testes PHP existentes também devem permanecer válidos. A implementação da primeira issue acrescentará a verificação de build à CI.

## Referências

- [Guia inicial do Vue](https://vuejs.org/guide/quick-start.html).
- [Formulários no Vue](https://vuejs.org/guide/essentials/forms.html).
- [Proxy de desenvolvimento do Vite](https://vite.dev/config/server-options.html#server-proxy).
- [Fetch API — MDN](https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API/Using_Fetch).
- [Roteiro completo do projeto](roteiro-de-estudo.md).
