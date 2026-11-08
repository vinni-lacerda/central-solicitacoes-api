# Como desenvolver neste projeto

O objetivo é aprender escrevendo e revisando código. O backlog define o comportamento esperado; você escolhe e implementa a solução com orientação quando precisar.

## Uma issue por vez

1. Leia o contexto, os critérios de aceite e as dependências da issue.
2. Atualize a branch principal e crie uma branch para a entrega, como `feat/1-estrutura-categorias`.
3. Investigue as partes do Laravel que participam da tarefa e tente descrever sua ideia antes de programar.
4. Implemente apenas o escopo da issue. Peça uma pista se travar; as pistas podem ficar mais específicas conforme a necessidade.
5. Execute os cenários descritos na issue. Os casos de erro também fazem parte da entrega.
6. Execute `composer test` e `composer lint`. Use `composer format` para ajustar a formatação.
7. Faça um commit e abra um pull request, que é uma proposta de alteração para revisão.
8. Descreva o que mudou, como verificou o funcionamento e os pontos em que quer feedback.

No pull request, `Closes #1` associa a entrega à issue e permite fechá-la quando a alteração for integrada à branch principal.

## O papel da mentoria

A mentoria ajuda a entender a demanda, investigar o código, formular hipóteses e revisar decisões. Por padrão, oferece perguntas e pistas; a implementação continua com você. Uma solução completa pode ser apresentada quando você a pedir explicitamente.

Novos testes automatizados serão introduzidos aos poucos. Enquanto esse assunto estiver sendo aprendido, registre as verificações manuais da issue e mantenha os testes existentes passando. Execute as verificações locais antes de enviar a alteração para revisão.

## Convenções iniciais

- Use inglês em classes, métodos, campos e rotas; português em issues e documentação.
- Siga a organização padrão do Laravel e procure exemplos já existentes antes de criar uma abstração.
- Use o banco `central_solicitacoes` para desenvolvimento e `central_solicitacoes_test` para testes.
- Use somente dados fictícios neste projeto.
- Não antecipe funcionalidades de ciclos futuros.

Os commits seguem Conventional Commits: um tipo, um escopo opcional e uma descrição curta em português. Exemplo: `feat(categorias): adicione a consulta por identificador`.

## Evolução da dificuldade

Concluir uma issue inclui conseguir explicar suas decisões. A próxima etapa será definida pela autonomia demonstrada e pelos conceitos que ainda precisarem de prática, mantendo as entregas pequenas.
