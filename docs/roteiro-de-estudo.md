# Roteiro de estudo

O projeto tem **62 issues planejadas**, divididas em cinco ciclos: 32 fáceis, 28 intermediárias e 2 difíceis. As 14 primeiras continuam sendo o ponto de partida. Os ciclos seguintes são uma proposta de evolução e podem ser ajustados conforme o código desenvolvido e a autonomia no aprendizado.

Estas issues descrevem funcionalidades a implementar. A publicação do backlog não significa que elas já existam na aplicação.

## Como usar o roteiro

1. Comece pelo [primeiro ciclo](backlog.md), com categorias e solicitações.
2. Desenvolva uma issue por vez e confira seus pré-requisitos antes de começar.
3. Use os critérios de aceite e os cenários da issue para verificar sua entrega, incluindo entradas inválidas.
4. Abra um pull request com a mudança e explique como verificou o resultado. A mentoria ajuda com pistas e revisão; o código continua sendo o exercício.
5. Ao terminar um ciclo, revise o que aprendeu antes de avançar. Uma classificação de dificuldade considera os conhecimentos acumulados nas etapas anteriores.

## Visão dos ciclos

| Ciclo | Issues | Fáceis | Intermediárias | Difíceis |
| --- | ---: | ---: | ---: | ---: |
| [1 — Fundamentos](https://github.com/vinni-lacerda/central-solicitacoes-api/milestone/1) | 14 | 14 | 0 | 0 |
| [2 — Testes e consultas](https://github.com/vinni-lacerda/central-solicitacoes-api/milestone/2) | 12 | 6 | 6 | 0 |
| [3 — Regras e comentários](https://github.com/vinni-lacerda/central-solicitacoes-api/milestone/3) | 12 | 10 | 2 | 0 |
| [4 — Usuários e permissões](https://github.com/vinni-lacerda/central-solicitacoes-api/milestone/4) | 12 | 2 | 10 | 0 |
| [5 — Filas e exportações](https://github.com/vinni-lacerda/central-solicitacoes-api/milestone/5) | 12 | 0 | 10 | 2 |

## Como os contratos evoluem

O [escopo inicial](escopo-inicial.md) define o primeiro ciclo. Algumas entregas posteriores mudam o contrato de propósito: listagens passam a ser paginadas, tickets recebem prioridade e status, e a autenticação passa a restringir recursos. A issue responsável por cada mudança define o novo comportamento e a adaptação dos testes anteriores.

Não é necessário antecipar esses requisitos ao desenvolver um CRUD do primeiro ciclo. Preserve o comportamento da etapa em andamento e evolua quando chegar à issue correspondente.

Mantenha MySQL e o banco de testes separado, código em inglês, documentação em português e somente dados fictícios. Exemplos de email usam o mailer local; exportações usam armazenamento privado. As tarefas de agendamento configuram o código da aplicação, sem criar serviços externos ou alterar o cron do computador.

## Ciclo 2 — Testes e consultas

Consolidar os CRUDs com factories, dados fictícios e testes. Depois, evoluir as consultas com paginação, busca, ordenação, intervalo de datas e resumo por categoria.

[Abrir as issues deste ciclo](https://github.com/vinni-lacerda/central-solicitacoes-api/milestone/2).

| Ordem | Issue | Dificuldade | Pré-requisitos |
| --- | --- | --- | --- |
| 15 | [#15 — Criar factories de categorias e solicitações](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/15) | Fácil | [#1](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/1), [#7](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/7) |
| 16 | [#16 — Testar o cadastro de categorias e suas validações](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/16) | Fácil | [#2](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/2), [#15](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/15) |
| 17 | [#17 — Testar o cadastro de solicitações e a categoria informada](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/17) | Fácil | [#9](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/9), [#15](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/15) |
| 18 | [#18 — Testar a proteção de exclusão de categorias em uso](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/18) | Fácil | [#6](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/6), [#8](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/8), [#15](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/15) |
| 19 | [#19 — Preparar dados fictícios para demonstração local](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/19) | Fácil | [#15](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/15) |
| 20 | [#20 — Adicionar paginação à listagem de categorias](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/20) | Média | [#3](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/3), [#15](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/15) |
| 21 | [#21 — Paginar solicitações preservando o filtro de categoria](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/21) | Média | [#14](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/14), [#15](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/15) |
| 22 | [#22 — Buscar solicitações por um trecho do título](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/22) | Média | [#21](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/21) |
| 23 | [#23 — Permitir uma ordenação controlada das solicitações](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/23) | Média | [#21](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/21), [#22](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/22) |
| 24 | [#24 — Filtrar solicitações por intervalo de criação](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/24) | Média | [#21](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/21), [#22](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/22), [#23](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/23) |
| 25 | [#25 — Incluir a categoria opcionalmente no detalhe da solicitação](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/25) | Fácil | [#10](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/10), [#15](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/15) |
| 26 | [#26 — Consultar um resumo de solicitações por categoria](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/26) | Média | [#15](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/15), [#21](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/21) |

## Ciclo 3 — Regras e comentários

Adicionar prioridade e um fluxo de atendimento. Registrar transições com consistência e construir comentários vinculados à solicitação, praticando novamente cadastro, consulta, edição e exclusão.

[Abrir as issues deste ciclo](https://github.com/vinni-lacerda/central-solicitacoes-api/milestone/3).

| Ordem | Issue | Dificuldade | Pré-requisitos |
| --- | --- | --- | --- |
| 27 | [#27 — Definir a prioridade de uma solicitação](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/27) | Fácil | [#9](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/9), [#12](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/12), [#15](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/15) |
| 28 | [#28 — Filtrar solicitações por prioridade](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/28) | Fácil | [#21](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/21), [#27](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/27) |
| 29 | [#29 — Adicionar o status inicial das solicitações](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/29) | Fácil | [#9](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/9), [#12](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/12), [#15](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/15) |
| 30 | [#30 — Alterar o status seguindo o fluxo de atendimento](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/30) | Média | [#29](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/29), [#10](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/10), [#15](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/15) |
| 31 | [#31 — Filtrar solicitações pelo status de atendimento](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/31) | Fácil | [#21](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/21), [#29](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/29) |
| 32 | [#32 — Registrar mudanças de status com persistência atômica](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/32) | Média | [#30](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/30), [#13](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/13), [#15](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/15) |
| 33 | [#33 — Criar a estrutura dos comentários de uma solicitação](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/33) | Fácil | [#7](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/7), [#13](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/13), [#15](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/15) |
| 34 | [#34 — Adicionar um comentário a uma solicitação](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/34) | Fácil | [#33](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/33), [#29](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/29), [#9](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/9) |
| 35 | [#35 — Listar os comentários de uma solicitação com paginação](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/35) | Fácil | [#34](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/34), [#21](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/21) |
| 36 | [#36 — Editar o texto de um comentário da solicitação](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/36) | Fácil | [#34](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/34), [#35](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/35) |
| 37 | [#37 — Excluir um comentário de uma solicitação](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/37) | Fácil | [#34](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/34), [#35](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/35) |
| 38 | [#38 — Consultar o histórico de status de uma solicitação](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/38) | Fácil | [#32](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/32), [#21](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/21) |

## Ciclo 4 — Usuários e permissões

Cadastrar usuários, autenticar por tokens e definir quem pode acessar cada recurso. Preservar os dados anteriores, preparar papéis administrativos e separar os tickets de cada dono.

[Abrir as issues deste ciclo](https://github.com/vinni-lacerda/central-solicitacoes-api/milestone/4).

| Ordem | Issue | Dificuldade | Pré-requisitos |
| --- | --- | --- | --- |
| 39 | [#39 — Preparar autenticação por tokens com Sanctum](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/39) | Média | — |
| 40 | [#40 — Cadastrar usuários pela API](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/40) | Média | [#39](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/39) |
| 41 | [#41 — Fazer login e emitir um token de acesso](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/41) | Média | [#39](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/39), [#40](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/40) |
| 42 | [#42 — Consultar os dados do usuário autenticado](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/42) | Fácil | [#41](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/41) |
| 43 | [#43 — Encerrar somente a sessão do token atual](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/43) | Fácil | [#41](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/41), [#42](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/42) |
| 44 | [#44 — Diferenciar usuários comuns de administradores](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/44) | Média | [#40](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/40), [#41](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/41) |
| 45 | [#45 — Vincular novas solicitações ao usuário autenticado](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/45) | Média | [#9](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/9), [#12](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/12), [#17](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/17), [#27](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/27), [#29](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/29), [#39](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/39), [#41](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/41), [#44](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/44) |
| 46 | [#46 — Restringir solicitações e recursos vinculados por usuário](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/46) | Média | [#13](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/13), [#14](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/14), [#21](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/21), [#25](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/25), [#30](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/30), [#36](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/36), [#37](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/37), [#38](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/38), [#44](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/44), [#45](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/45) |
| 47 | [#47 — Identificar autores e aplicar permissões aos comentários](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/47) | Média | [#34](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/34), [#35](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/35), [#36](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/36), [#37](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/37), [#44](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/44), [#45](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/45), [#46](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/46) |
| 48 | [#48 — Permitir alterações de categorias somente a administradores](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/48) | Média | [#2](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/2), [#3](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/3), [#4](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/4), [#5](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/5), [#6](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/6), [#8](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/8), [#20](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/20), [#39](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/39), [#41](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/41), [#44](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/44) |
| 49 | [#49 — Limitar o resumo de solicitações ao escopo autorizado](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/49) | Média | [#26](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/26), [#44](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/44), [#45](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/45), [#46](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/46) |
| 50 | [#50 — Limitar a frequência das tentativas de login](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/50) | Média | [#41](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/41) |

## Ciclo 5 — Filas e exportações

Processar trabalho fora da requisição HTTP, acompanhar exportações privadas e tratar falhas. As tarefas difíceis aparecem aqui: reexecução, concorrência e limpeza recuperável de arquivos.

[Abrir as issues deste ciclo](https://github.com/vinni-lacerda/central-solicitacoes-api/milestone/5).

| Ordem | Issue | Dificuldade | Pré-requisitos |
| --- | --- | --- | --- |
| 51 | [#51 — Preparar a fila em MySQL e executar um job de diagnóstico](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/51) | Média | — |
| 52 | [#52 — Enfileirar um aviso de nova solicitação ao seu dono](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/52) | Média | [#45](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/45), [#46](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/46), [#51](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/51) |
| 53 | [#53 — Avisar o dono quando uma solicitação for resolvida](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/53) | Média | [#30](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/30), [#32](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/32), [#52](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/52) |
| 54 | [#54 — Criar a estrutura de acompanhamento das exportações](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/54) | Média | [#45](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/45) |
| 55 | [#55 — Gerar o CSV de tickets em um job com armazenamento privado](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/55) | Média | [#22](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/22), [#23](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/23), [#24](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/24), [#28](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/28), [#31](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/31), [#51](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/51), [#54](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/54) |
| 56 | [#56 — Solicitar uma exportação de tickets sem bloquear a resposta HTTP](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/56) | Média | [#46](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/46), [#55](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/55) |
| 57 | [#57 — Consultar o progresso de uma exportação autenticada](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/57) | Média | [#46](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/46), [#54](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/54), [#55](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/55) |
| 58 | [#58 — Baixar o CSV por uma rota autenticada e com prazo de validade](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/58) | Média | [#57](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/57) |
| 59 | [#59 — Tornar o processamento da exportação seguro para retries e concorrência](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/59) | Difícil | [#55](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/55), [#57](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/57), [#58](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/58) |
| 60 | [#60 — Tratar conteúdo textual perigoso no CSV para abertura em planilhas](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/60) | Média | [#55](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/55) |
| 61 | [#61 — Criar um comando para remover arquivos de exportações vencidas](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/61) | Difícil | [#54](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/54), [#55](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/55), [#58](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/58), [#59](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/59) |
| 62 | [#62 — Agendar a limpeza diária e documentar a operação local](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/62) | Média | [#51](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/51), [#61](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/61) |

## Referências de trabalho

- [Escopo do primeiro ciclo](escopo-inicial.md).
- [Ordem das 14 primeiras issues](backlog.md).
- [Fluxo de desenvolvimento e revisão](fluxo-de-trabalho.md).
- As referências técnicas específicas ficam nas issues, junto dos comportamentos a verificar.
