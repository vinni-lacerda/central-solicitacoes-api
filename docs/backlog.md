# Primeiro ciclo — Fundamentos

Desenvolva uma issue por vez, na ordem abaixo. Cada issue publicada contém contexto, critérios de aceite, cenários de verificação e pistas. As dependências permitem entender o que precisa existir antes de começar.

| Ordem | Issue | Depende de |
| --- | --- | --- |
| 01 | [[01] Criar a estrutura de categorias](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/1) | — |
| 02 | [[02] Cadastrar uma categoria pela API](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/2) | [#1](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/1) |
| 03 | [[03] Listar categorias cadastradas](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/3) | [#2](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/2) |
| 04 | [[04] Consultar uma categoria pelo identificador](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/4) | [#2](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/2) |
| 05 | [[05] Editar o nome de uma categoria](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/5) | [#2](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/2), [#4](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/4) |
| 06 | [[06] Excluir uma categoria](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/6) | [#2](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/2), [#4](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/4) |
| 07 | [[07] Criar a estrutura de solicitações e o vínculo com categorias](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/7) | [#1](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/1) |
| 08 | [[08] Impedir a exclusão de categoria com solicitações](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/8) | [#7](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/7), [#6](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/6) |
| 09 | [[09] Cadastrar uma solicitação pela API](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/9) | [#7](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/7), [#8](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/8), [#2](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/2) |
| 10 | [[10] Consultar uma solicitação pelo identificador](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/10) | [#9](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/9) |
| 11 | [[11] Listar solicitações cadastradas](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/11) | [#9](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/9) |
| 12 | [[12] Editar os dados de uma solicitação](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/12) | [#9](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/9), [#10](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/10) |
| 13 | [[13] Excluir uma solicitação](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/13) | [#9](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/9), [#10](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/10), [#6](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/6) |
| 14 | [[14] Filtrar solicitações por categoria](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/14) | [#11](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/11), [#9](https://github.com/vinni-lacerda/central-solicitacoes-api/issues/9) |

Todas estão no [milestone Ciclo 1 — Fundamentos](https://github.com/vinni-lacerda/central-solicitacoes-api/milestone/1). A base inicial ainda não implementa esses exercícios.

Login, permissões, histórico, paginação e processamento em segundo plano serão definidos em ciclos futuros, conforme o avanço no aprendizado.
