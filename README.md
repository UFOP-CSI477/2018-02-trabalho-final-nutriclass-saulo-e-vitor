# 2018-02-trabalho-final-nutriclass-saulo-e-vitor

# NutriClass

  A educação do setor público ainda está muito atrasada quando se trata de utilização das TIC’S (tecnologias de informação e comunicação) em seus processos. “Na área da educação, o uso de recursos tecnológicos em sala de aula ainda é uma realidade distante na maioria das escolas do país.” (Revista Fonte, p.51, dez. 2015).
Apesar de haver um crescimento no uso de computadores e da internet nas escolas, a inclusão de novas tecnologias no ensino ainda depende de vários fatores, dentre eles destacam-se as políticas públicas para a implantação desses novos recursos.
Para que essa deficiência seja parcialmente suprida, é proposto o NutriClass, um sistema que tem como intenção facilitar os processos de acompanhamento nutricional dos alunos dessas instituições de ensino, obedecendo às regras de políticas públicas.

## 1. Requisitos Gerais

### 1.1 Requisitos Gerais

| Código | Nome | Prioridade |
| ------ | ------ | ------ |
| RF - 01 | Realizar Login | Login de usuários do sistema (Nutricionista) |
| RF-02 | Cadastrar Usuário | Cadastro dos usuários do sistema |
| RF-03 | Alterar Usuário | Alteração do cadastro de um usuário |
| RF-04 | Excluir Usuário | Exclusão do cadastro de um usuário |

### 1.2 Requisitos Relacionados a Manter Aluno

| Código | Nome | Prioridade |
| ------ | ------ | ------ |
| RF-05 |Inserir Aluno | O usuário poderá inserir o cadastro de um aluno no sistema|
| RF-06 |Alterar Aluno | O usuário poderá alterar o registro de um aluno do sistema|
| RF-07 |Excluir Aluno|O usuário poderá excluir o registro de um aluno no sistema |
| RF-08|Pesquisar Aluno|O usuário poderá pesquisar o registro de um aluno no sistema (por CGM, nome ou RG) |

### 1.3 Requisitos Relacionados a Avaliar Aluno

| Código | Nome | Prioridade |
| ------ | ------ | ------ |
| RF-09|Avaliação Antropométrica|O usuário deverá inserir ou alterar as informações antropométricas (peso e altura) do aluno e o sistema deve calcular o IMC (Índice de Massa Corporal)|
| RF-10|Incidência de doenças|O usuário deverá registrar ou alterar a incidência de escolares com diabetes, intolerância à lactose e doença celíaca.|
| RF-11|Diagnóstico|O usuário deverá determinar o diagnóstico do aluno (Eutrófico, Sobrepeso, Magreza, Obesidade Grave) |
| RF-12|Observações|O usuário deverá inserir informações adicionais que julgar importantes sobre o estado nutricional do aluno |

### 1.4 Requisitos Relacionados a Manter Turma

| Código | Nome | Prioridade |
| ------ | ------ | ------ |
| RF-13|Inserir Turma|O usuário poderá cadastrar turmas e atribuir alunos a elas.|
| RF-14|Alterar Turma|O usuário poderá alterar o registro de uma turma|
| RF-15|Excluir Turma|O usuário poderá excluir o registro de uma turma|
| RF-16|Pesquisar Turma|O usuário poderá pesquisar o registro de uma turma existente (por código ou nome) |

### 1.5 Requisitos Relacionados a Manter Relatório

| Código | Nome | Prioridade |
| ------ | ------ | ------ |
| RF-17|Emitir Relatório por Aluno|O usuário poderá emitir um relatório individual do aluno, contendo informações essenciais como a avaliação antropométrica, o diagnóstico nutricional, incidência de doenças e observações|
| RF-18|Emitir Relatório por Turma|O usuário poderá emitir um relatório com os diagnósticos de todos os alunos de uma turma específica|
| RRF-19|Emitir Relatório por Diagnóstico Nutricional|O usuário poderá emitir um relatório a partir de um diagnóstico específico (Eutrófico, Sobrepeso, Magreza ou Obesidade Grave)|
| RF-20|Emitir Gráfico de Diagnóstico|O usuário poderá emitir um gráfico representando os dados dos diagnósticos de todos os alunos|

### 1.6 Requisitos Não funcionais

| Código | Nome | Prioridade |
| ------ | ------ | ------ |
| RF-21|Usabilidade|Software de fácil entendimento e manipulação. O usuário poderá realizar tarefas de forma intuitiva, os títulos dos menus são bem explicativos, há mensagens de confirmações para as operações de alta importância, facilitando assim o uso do sistema. Interface simples e enxuta|
| RF-22|Compatibilidade|Compatibilidade com diferente sistemas operacionais, hardware e browser. Além de dispositivos com os mais diversos tamanos de telas|
| RF-23|Disponibilidade|Os dados estarão disponíveis on-line em um host, salvos em banco de dados mysql.|
| RF-24|Segurança| Os dados só poderão ser gerenciados por Usuários previamente cadastrados por meio de nome de usuário e senha, ou seja, o sistema só poderá ser operado por usuários devidamente autenticados|
| RF-25|Licença|O software proprietário será disponibilizado através da licença Shareware|

## 2. Diagrama UML

[![UML](https://i.imgur.com/AuQLrMM.png)](https://imgur.com/a/yWGBaRK)


## 3.Detalhamento dos Casos de Uso
### 3.1. Requisitos Gerais
#### 3.1.1 Caso de Uso: Realizar Login
**Ator primário:** Nutricionista/Usuário.
**Objetivo no contexto:** Realizar o login no sistema .
**Precondições:** Uma máquina com acesso ao sistema.
**Disparador:** Um Usuário/Nutricionista que deseja usar o sistema.
**Cenários:**
1. O Usuário abre o sistema.
2. O sistema inicia com a tela de login.
3. A tela de login apresenta dois campos para preenchimento: ID e senha e abaixo dos campos dois botões: “Entrar” Caso o usuário for cadastrado e “Novo Usuário” caso não seja. Para efetuar o login, preencha os campos com o nome e o ID e clique em entrar.
4. A tela do Sistema principal é carregada com o usuário já autenticado.
**Exceções:**
1. Não tem como efetuar login sem estar cadastrado
**Prioridade:** Muito alta
**Canal com ator:** Sistema
**Frequência de uso:** Usada toda vez que se desejar acessar o sistema.
**Atores secundários:** Não.
**Canais com atores secundários:** Não.

#### 3.1.2 Caso de Uso: Cadastrar usuário
**Ator primário:** Nutricionista/Usuário.
**Objetivo no contexto:** Realizar o cadastro do usuário no sistema. Usuário deverá ser um nutricionista.
**Precondições:** Acesso ao sistema.
Disparador: Um Usuário/Nutricionista que deseja se cadastrar no sistema a fim de usá-lo.
**Cenários:**
1. O Nutricionista abre o sistema.
2. O sistema inicia com a tela de login.
3. O Nutricionista vai ate o botão “Novo Usuário” e clica.
4. Uma nova janela é aberta com um formulário para o preenchimento dos dados pessoais, e o campo CPF é mais destacado.
5. O Nutricionista preenche todos os dados de forma correta.
6. Em um dos campos do formulário é pedido uma senha, para ser usada posteriormente para acessar o sistema.
7. Após o preenchimento de todos os dados, deve se clicar no botão “Cadastrar”.
8. Uma mensagem é exibida “Nutricionista Cadastrado com Sucesso!!! Para acessar o sistema utilize o CPF como ID, e como senha utilize sua senha cadastrada.
9. Sistema retorna a tela de login.
**Exceções:**
1. Não preenchimento de todos os dados do formulário
2. Realizar o cadastro de um nutricionista já cadastrado.
**Prioridade:** Muito alta
**Canal com ator:** Sistema
**Frequência de uso:** Mínima, pois o usuário é cadastrado normalmente só uma vez, e não se tem muitos nutricionistas em uma escola.
**Atores secundários:** Não.
**Canais com atores secundários:** Não.

#### 3.1.3 Caso de Uso: Alterar usuário
**Ator primário:** Nutricionista/Usuário.
**Objetivo no contexto:** Realizar a alteração do cadastro do usuário no sistema.
**Precondições:** Ter acesso ao sistema e estar logado no mesmo.
**Disparador:** Um Usuário/Nutricionista que deseja modificar os dados cadastrados no sistema.
**Cenários:**
1. O usuário entra no sistema
2. O usuário insere o seu ID
3. O usuário insere a sua senha
4. O sistema exibe a tela principal com as principais funcionalidades.
5. O usuário seleciona o botão “Administrar Usuários”.
6. Uma nova janela é aberta.
7. O usuário seleciona o botão “Alterar Cadastro”.
8. Na tela vai aparecer uma lista contendo todos os usuários que estão cadastrados.
9. O usuário seleciona o usuário que deseja alterar o cadastro.
10. Na tela vai aparecer um formulário com os dados que foram cadastrados.
11. O usuário seleciona no campo que deseja alterar(O CPF não se pode alterar) e informa um novo valor.
12. O usuário seleciona o botão “Alterar Cadastro”.
13. Uma mensagem de confirmação é impressa na tela “Deseja mesmo realizar essa alteração” e duas opções para o Usuário clicar “Sim” Caso deseje salvar a alteração ou “Não” caso não deseje salvar.
14. Após clicar em “Sim”, os dados alterados são salvos e o sistema volta a tela anterior.
**Exceções:**
1. Usuário alterar os dados por dados vazios.
2. ID ou senha do Usuário estão incorretos, então ele não entra no sistema (ver caso de uso Realizar Login).
**Prioridade:** Muito alta
**Canal com ator:** Sistema

#### 3.1.4. Caso de Uso: Excluir usuário
**Ator primário:** Nutricionista/Usuário.
**Objetivo no contexto:** Realizar a exclusão de usuários no sistema.
**Precondições:** Ter acesso ao sistema e estar logado no mesmo.
**Disparador:** Um Usuário/Nutricionista que deseja excluir usuários no sistema.
**Cenários:**
1. O usuário entra no sistema
2. O usuário insere o seu ID
3. O usuário insere a sua senha
4. O sistema exibe a tela principal com as principais funcionalidades.
5. O usuário seleciona o botão “Administrar Usuários”.
6. Uma nova janela é aberta.
7. O usuário seleciona o botão “Excluir Usuários”.
8. O sistema exibe uma nova tela com uma lista contendo todos os usuários que estão cadastrados.
9. O usuário seleciona o usuário que deseja excluir.
10. O usuário seleciona o botão “Excluir”.
11. Uma mensagem de confirmação é exibida na tela “Deseja mesmo excluir esses usuários?” e duas opções para o usuário clicar “Sim” Caso deseje excluir ou “Não” caso contrário.
12. Após clicar em “Sim”, os usuário é excluído e o sistema volta à tela anterior.
**Exceções:**
1. Quando o usuário exclui seu próprio cadastro, o sistema volta a tela de login.
2. ID ou senha do Usuário estão incorretos, então ele não entra no sistema (ver caso de uso Realizar Login).
**Prioridade:** Muito alta
**Canal com ator:** Sistema
**Frequência de uso:** Mínima, pois não se deve excluir usuários em curtos espaços de tempos.
## 4.2 Requisitos Relacionados a Manter Aluno
### 4.2.1 Caso de Uso: Inserir Aluno
**Ator primário:** Usuário.
**Objetivo no contexto:** Inserir dados dos alunos.
**Precondições:** O Usuário deve estar devidamente cadastrado e logado.
**Disparador:** o Usuário decide realizar inserção de dados de um aluno.
**Cenários:**
1. O Usuário entra no sistema.
2. O Usuário insere o seu ID.
3. O Usuário insere sua senha.
4. O sistema exibe a tela principal com as principais funcionalidades.
5. O Usuário seleciona “Inserir aluno”.
6. O Usuário preenche dados dos alunos.
7. O Usuário realiza sua tarefa
8. O sistema retorna mensagem de confirmação.
**Exceções:** ID ou senha do Usuário estão incorretos, então ele não entra no sistema.
**Prioridade:** Prioridade Alta, deve ser implementada no começo do projeto.
**Canal com ator:** Via sistema disponibilizado.
Frequência de uso: Baixa, pois só serão realizados inserções de cada aluno somente uma vez.
**Atores secundários:** Não há.
Canais com atores secundários: Não há.

### 4.2.2 Caso de Uso: Alterar Aluno
**Ator primário:** Usuário.
**Objetivo no contexto:** Alterar dados dos alunos.
**Precondições:** O Usuário deve estar devidamente cadastrado e logado.
**Disparador:** Usuário decide realizar alteração de dados de um aluno
**Cenários:**
1. O Usuário entra no sistema.
2. O Usuário insere o seu ID.
3. O Usuário insere sua senha.
4. O sistema exibe a tela principal com as principais funcionalidades.
5. O Usuário seleciona “Alterar aluno”.
6. O sistema mostra opções de ações referentes ao aluno.
7. O Usuário escolhe a ação.
8. O Usuário realiza sua tarefa
9. O sistema retorna mensagem de confirmação.
**Exceções:** ID ou senha do Usuário estão incorretos, então ele não entra no sistema.
**Prioridade:** Alta, deve ser implementada no começo do projeto.
**Canal com ator:** Via sistema disponibilizado.
**Frequência de uso:** média, pois só serão realizados alterações às vezes aos dados de alunos.
**Atores secundários:** Não há.
**Canais com atores secundários:** Não há.

### 4.2.3 Caso de Uso: Excluir Aluno
**Ator primário:** Usuário.
**Objetivo no contexto:** Excluir dados dos alunos.
**Precondições:** O Usuário deve estar devidamente cadastrado e logado.
**Disparador:** o Usuário decide realizar exclusão referente aos dados de um aluno.
**Cenários:**
1. O Usuário entra no sistema.
2. O Usuário insere o seu ID.
3. O Usuário insere sua senha.
4. O sistema exibe a tela principal com as principais funcionalidades.
5. O Usuário seleciona “Excluir aluno”.
6. O sistema mostra opções de ações referentes ao aluno.
7. O Usuário escolhe a ação.
8. O Usuário realiza sua tarefa
9. O sistema retorna mensagem de confirmação.
**Exceções:** ID ou senha do Usuário estão incorretos, então ele não entra no sistema.
**Prioridade:** Prioridade Alta, deve ser implementada no começo do projeto.
**Canal com ator:** Via sistema disponibilizado.
**Frequência de uso:** baixa, pois serão realizados poucas exclusões de alunos.
**Atores secundários:** Não há.
**Canais com atores secundários:** Não há.

### 4.2.4 Caso de Uso: Pesquisar Aluno
**Ator primário:** Usuário.
**Objetivo no contexto:** Inserir dados dos alunos, alterar dados dos alunos, excluir dados dos alunos, pesquisar alunos.
**Precondições:** O Usuário deve estar devidamente cadastrado e logado.
**Disparador:** o Usuário decide realizar pesquisa de um aluno.
**Cenários:**
1. O Usuário entra no sistema.
2. O Usuário insere o seu ID.
3. O Usuário insere sua senha.
4. O sistema exibe a tela principal com as principais funcionalidades.
5. O Usuário seleciona “Pesquisar aluno”.
6. O sistema mostra opções de ações referentes ao aluno.
7. O Usuário escolhe a ação.
8. O Usuário realiza sua tarefa
9. O sistema retorna mensagem de confirmação.
**Exceções:** ID ou senha do Usuário estão incorretos, então ele não entra no sistema.
**Prioridade:** Prioridade Alta, deve ser implementada no começo do projeto.
**Canal com ator:** Via sistema disponibilizado.
**Frequência de uso:** Alta, pois só serão realizados consultas constantes aos dados de alunos.
**Atores secundários:** Não há.
**Canais com atores secundários:** Não há.

## 3.3 Requisitos Relacionados a Avaliar Aluno
### 3.3.1 Caso de Uso: Avaliação Antropométrica
**Ator primário:** Nutricionista/Usuário.
**Objetivo no contexto:** O usuário deverá inserir ou alterar as informações antropométricas (peso e altura) do aluno e o sistema deve calcular o IMC (Índice de Massa Corporal).
**Precondições:** O Usuário deve estar devidamente cadastrado e logado para Fazer as Avaliações.
**Disparador:** Um Usuário/Nutricionista que deseja realizar a avaliação antropológica de um aluno.
**Cenários:**
1. O usuário abre o sistema.
2. O sistema inicia com a tela de login.
3. O usuário executa no sistema.
4. O usuário insere o seu ID.
5. O usuário insere sua senha.
6. O sistema exibe a tela principal com as principais funcionalidades.
7. O usuário seleciona “Avaliações”
8. O sistema apresenta uma tela com campos de pesquisa por CGM (código de matrícula), nome e por RG do aluno.
9. O usuário seleciona uma opção e entra com a informação adequada.
10. O usuário confirma a operação por meio do botão “Pesquisar”
11. O sistema retorna a busca.
12. O usuário seleciona o registro encontrado e clica no botão “Avaliar Aluno”.
13. O seleciona “Avaliação Antropométrica”.
14. Usuário insere o peso e a altura do aluno nos campos “Peso” e “Altura”.
15. Sistema calcula o IMC do aluno e exibe-o na tela.
16. Usuário seleciona a opção “Salvar”
17. Uma mensagem é exibida “Operação realizada com sucesso”
18. O sistema volta para a tela principal de Avaliações.
**Exceções:**
1. O cálculo só será possível se o Usuário informar os dados corretamente.
2. ID ou senha do usuário estão incorretos - usuário não autenticado.
3. O sistema não encontra nenhum registro - o aluno não está cadastrado no sistema (veja o caso de uso Inserir Aluno) ou a informação inserida no campo apropriado de busca está incorreta.
**Prioridade:** Alta
**Canal com ator:** Sistema
**Frequência de uso:** Alta, pois os dados variam muito ao decorrer do tempo.
**Atores secundários:** Não.
**Canais com atores secundários:** Não.

### 3.3.2 Caso de Uso: Incidência de Doenças
**Ator primário:** Nutricionista/Usuário.
**Objetivo no contexto:** O usuário deverá registrar ou alterar a incidência de escolares com diabetes, intolerância à lactose e doença celíaca.
Precondições: O Usuário deve estar devidamente cadastrado e logado para fazer as Avaliações.
**Disparador:** Um Usuário/Nutricionista que deseja registrar ou alterar se o aluno possui doenças como diabetes, intolerância a lactose e doença celíaca..
**Cenários:**
1. O usuário abre o sistema.
2. O sistema inicia com a tela de login.
3. O usuário insere o seu ID.
4. O usuário insere sua senha.
5. O sistema exibe a tela principal com as principais funcionalidades.
6. O usuário seleciona “Avaliações”
7. O sistema apresenta uma tela com campos de pesquisa por CGM (código de matrícula), nome e por RG do aluno.
8. O usuário seleciona uma opção e entra com a informação adequada.
9. O usuário confirma a operação por meio do botão “Pesquisar”
10. O sistema retorna a busca.
11. O usuário seleciona o registro encontrado e clica no botão “Avaliar Aluno”.
12. O usuário seleciona “Incidência de Doença”.
13. O usuário seleciona uma opção e entra com a informação adequada.
14. O usuário informa as doenças incidentes ao aluno, ou altera alguma doença já informada.
15. O usuário seleciona a opção “Salvar”
16. Uma mensagem é exibida “ Operação Realizada com Sucesso”
17. O sistema volta para a tela principal de Avaliações.
**Exceções:**
1. ID ou senha do usuário estão incorretos - usuário não autenticado.
2. O sistema não encontra nenhum registro - o aluno não está cadastrado no sistema (veja o caso de uso Inserir Aluno) ou a informação inserida no campo apropriado de busca está incorreta.
**Prioridade:** Alta
**Canal com ator:** Sistema
**Frequência de uso:** Média, pois as doenças não mudam muito de acordo com o tempo que se passa.
**Atores secundários:** Não.
Canais com atores secundários: Não.

### 3.3.3 Caso de Uso: Diagnóstico
**Ator primário:** Nutricionista/Usuário.
**Objetivo no contexto:** O usuário deverá determinar o diagnóstico do aluno (Eutrófico, Sobrepeso, Magreza, Obesidade Grave).
**Precondições:** O Usuário deve estar devidamente cadastrado e logado para fazer as Avaliações.
**Disparador:** Um Usuário/Nutricionista que deseja determinar o diagnóstico do aluno (Eutrófico, Sobrepeso, Magreza, Obesidade Grave).
**Cenários:**
1. O usuário abre o sistema.
2. O sistema inicia com a tela de login.
3. O usuário insere o seu ID.
4. O usuário insere sua senha.
5. O sistema exibe a tela principal com as principais funcionalidades.
6. O usuário seleciona “Avaliações”
7. O sistema apresenta uma tela com campos de pesquisa por CGM (código de matrícula), nome e por RG do aluno.
8. O usuário seleciona uma opção e entra com a informação adequada.
9. O usuário confirma a operação por meio do botão “Pesquisar”
10. O sistema retorna a busca.
11. O usuário seleciona o registro encontrado e clica no botão “Avaliar Aluno”.
12. O usuário seleciona “Diagnóstico do Aluno”.
13. O usuário informa o diagnóstico do aluno (Eutrófico, Sobrepeso, Magreza, Obesidade Grave).
14. Usuário seleciona a opção “Salvar”
15. Uma mensagem é exibida “Operação realizada com Sucesso”
16. O sistema volta para a tela principal de avaliação.
**Exceções:**
1. ID ou senha do usuário estão incorretos - usuário não autenticado.
2. O sistema não encontra nenhum registro - o aluno não está cadastrado no sistema (veja o caso de uso Inserir Aluno) ou a informação inserida no campo apropriado de busca está incorreta.
**Prioridade:** Alta
**Canal com ator:** Sistema
Frequência de uso: Médio, pois os diagnósticos não mudam muito de acordo com o tempo que se passa.
**Atores secundários:** Não.
**Canais com atores secundários:** Não.


### 3.3.4 Caso de Uso: Observações
**Ator primário:** Nutricionista/Usuário.
**Objetivo no contexto:** O usuário deverá inserir informações adicionais que julgar importantes sobre o estado nutricional do aluno.
**Precondições:** O Usuário deve estar devidamente cadastrado e logado para fazer as Avaliações.
**Disparador:** Um Usuário/Nutricionista que deseja deverá inserir informações adicionais sobre o estado nutricional do aluno.
**Cenários:**
1. O usuário abre o sistema.
2. O sistema inicia com a tela de login.
3. O usuário insere o seu ID.
4. O usuário insere sua senha.
5. O sistema exibe a tela principal com as principais funcionalidades.
6. O usuário seleciona “Avaliações”
7. O sistema apresenta uma tela com campos de pesquisa por CGM (código de matrícula), nome e por RG do aluno.
8. O usuário seleciona uma opção e entra com a informação adequada.
9. O usuário confirma a operação por meio do botão “Pesquisar”
10. O sistema retorna a busca.
11. O usuário seleciona o registro encontrado e clica no botão “Avaliar Aluno”.
12. O usuário seleciona “Inserir Observações Importantes”.
13. O usuário insere informações importantes sobre o quadro nutricional do aluno.
14. O usuário vai até a opção “Salvar”
15. Uma mensagem é exibida “Operação Realizada com Sucesso”
16. O sistema volta para a tela principal de avaliação.
**Exceções:**
1. ID ou senha do usuário estão incorretos - usuário não autenticado.
2. O sistema não encontra nenhum registro - o aluno não está cadastrado no sistema (veja o caso de uso Inserir Aluno) ou a informação inserida no campo apropriado de busca está incorreta.
**Prioridade:** Alta
**Canal com ator:** Sistema
**Frequência de uso:** Altas, pois as informações a respeito dos alunos mudam muito de acordo com o tempo que se passa.
**Atores secundários:** Não.
**Canais com atores secundários:** Não.

## 4.4 Requisitos Relacionados a Manter Turma
### 4.4.1 Caso de Uso: Inserir Turma
**Ator Primário:** Usuário.
**Objetivo no contexto:** Um novo ano letivo começa e portanto novas turmas são criadas na escola.
**Precondição:** O Usuário deve estar devidamente cadastrado e logado para criar novas turmas.
**Disparador:** o Usuário deseja criar uma nova turma.
**Cenário:**
1. O Usuário executa no sistema.
2. O Usuário insere o seu ID.
3. O Usuário insere sua senha.
4. O sistema exibe a tela principal com as principais funcionalidades.
5. O Usuário seleciona “Inserir Nova Turma”.
6. O sistema solicita as informações pertinentes às turmas (Nome, Ano, Sala, Andar e Turno).
7. O sistema exibe mensagem para confirmar os dados inseridos.
8. O Usuário confirma as informações.
9. O sistema retorna mensagem de confirmação.
**Exceções:**
1. ID ou senha do Usuário estão incorretos, então ele não entra no sistema.
2. O Usuário não insere todas os dados necessários e confirma, então o sistema emite uma mensagem o alertando para preencher os dados faltantes.
**Prioridade:** Prioridade Alta, deve ser implementada no começo do projeto.
Canal com ator: Via sistema disponibilizado.
Frequência de uso: Raramente, pois só serão inseridas novas turma no início do ano letivo.
**Atores secundários:** Não há.
**Canais com atores secundários:** Não há.


## 4.4.2 Caso de Uso: Alterar Turma
## Ator Primário: Usuário.
**Objetivo no contexto:** O Usuário percebe um erro nas informações da turma e deseja alterá-las.
**Precondição:** O Usuário deve estar devidamente cadastrado e logado para alterar turmas.
**Disparador:** o Usuário deseja alterar uma turma.
**Cenário:**
1. O Usuário executa o sistema.
2. O Usuário insere o seu ID.
3. O Usuário insere sua senha.
4. O sistema exibe a tela principal com as principais funcionalidades.
5. O Usuário seleciona “Alterar Turma”.
6. O sistema exibe as informações pertinentes às turmas (Nome, Ano, Sala, Andar e Turno).
7. O Usuário seleciona o dado que ele deseja alterar.
8. O Usuário altera o dado.
9. O Usuário confirma as informações.
10. O sistema retorna mensagem de confirmação.
**Exceções:**
1. ID ou senha do Usuário estão incorretos, então ele não entra no sistema.
2. A conexão com o banco de dados falha e as alterações não podem ocorrer.
**Prioridade:** Prioridade Alta, deve ser implementada no começo do projeto.
**Canal com ator:** Via sistema disponibilizado.
**Frequência de uso:** Moderado, pois os dados podem ser inseridos incorretamente por qualquer motivo.
**Atores secundários:** Não há.
**Canais com atores secundários:** Não há.

### 4.4.3. Caso de Uso: Excluir Turma
**Ator Primário:** Usuário.
**Objetivo no contexto:** O Usuário percebe um erro na turma e deseja excluí-la ou então o ano letivo acaba e as informações já não são mais necessárias.
**Precondição:** O Usuário deve estar devidamente cadastrado e logado para excluir turmas.
**Disparador:** o Usuário deseja excluir uma turma.
**Cenário:**
11. O Usuário executa o sistema.
12. O Usuário insere o seu ID.
13. O Usuário insere sua senha.
14. O sistema exibe a tela principal com as principais funcionalidades.
15. O Usuário seleciona “Excluir Turma”.
16. O sistema exibe as turmas.
17. O Usuário seleciona a turma que ele deseja excluir.
18. O sistema retorna uma mensagem com tom de alerta e com informações sobre as consequências da exclusão da turma e com opção para cancelar.
19. O Usuário confirma a exclusão.
20. O sistema retorna mensagem de confirmação.
**Exceções:**
1. ID ou senha do Usuário estão incorretos, então ele não entra no sistema.
2. O Usuário cancela a exclusão quando a mensagem para confirmar a ação aparece.
**Prioridade:** Prioridade Alta, deve ser implementada no começo do projeto.
**Canal com ator:** Via sistema disponibilizado.
**Frequência de uso:** Moderado, pois o Usuário pode querer excluir as turmas por vários motivo.
**Atores secundários:** Não há.
**Canais com atores secundários:** Não há.

### 4.4.4 Caso de Uso: Pesquisar Turma
**Ator primário:** Usuário.
**Objetivo no contexto:** Inserir alunos, alterar dados dos alunos ou turmas, excluir dados dos alunos ou turmas, pesquisar turmas.
**Precondições:** O Usuário deve estar devidamente cadastrado e logado.
**Disparador:** o Usuário decide realizar pesquisa de uma turma ou aluno.
**Cenários:**
1. O Usuário entra no sistema.
2. O Usuário insere o seu ID.
3. O Usuário insere sua senha.
4. O sistema exibe a tela principal com as principais funcionalidades.
5. O Usuário seleciona “Pesquisar turma”.
6. O sistema mostra opções de ações referentes a turmas
7. O Usuário escolhe a ação.
8. O Usuário realiza sua tarefa
9. O sistema retorna mensagem de confirmação.
**Exceções:**
1. ID ou senha do Usuário estão incorretos, então ele não entra no sistema.
2. Turma não existe.
**Prioridade:** Prioridade Alta, deve ser implementada no começo do projeto.
**Canal com ator:** Via sistema disponibilizado.
**Frequência de uso:** Alta, pois só serão realizados consultas constantes aos dados das turmas
**Atores secundários:** Não há.
**Canais com atores secundários:** Não há.

## 4.5 Requisitos Relacionados a Manter Relatório
### 4.5.1 Caso de Uso: Emitir Relatório por Aluno
**Ator primário:** Usuário do sistema (Nutricionista)
**Objetivo no contexto:** Gerar o relatório individual de um aluno, contendo informações pessoais, a avaliação antropométrica, o diagnóstico da situação nutricional do aluno, quadro de doenças e observações.
**Precondições:** O usuário deve estar devidamente cadastrado e autenticado no sistema.
**Disparador:** O usuário decide realizar o acompanhamento nutricional de um aluno.
**Cenários:**
1. O usuário entra no sistema
2. O usuário insere o seu ID
3. O usuário insere a sua senha
4. O sistema exibe a tela principal com as principais funcionalidades.
5. O usuário seleciona “Relatórios”
6. O sistema exibe a tela de Relatórios.
7. O usuário seleciona “Relatório Individual”
8. O sistema apresenta uma tela com campos de pesquisa por CGM (código de matrícula), nome e por RG do aluno.
9. O usuário seleciona uma opção e entra com a informação adequada.
10. O usuário confirma a operação por meio do botão “Pesquisar”
11. O sistema retorna a busca.
12. O usuário seleciona o registro encontrado.
13. O usuário seleciona o botão “Gerar Relatório”
14. O sistema gera o Relatório em formato PDF.
15. O sistema retorna mensagem de confirmação com as opções “Imprimir” e “Salvar”.
**Exceções:**
1. ID ou senha do usuário estão incorretos - usuário não autenticado.
2. O sistema não encontra nenhum registro - o aluno não está cadastrado no sistema (veja o caso de uso Inserir Aluno) ou a informação inserida no campo apropriado de busca está incorreta.
**Prioridade:** Prioridade alta, a ser implementada após as funções básicas.
**Frequência de uso:** Frequência alta.
**Canal com o ator:** Via software instalado em PC.
**Atores secundários:** Não há.
**Canais com atores secundários:** Não há.

### 4.5.2 Caso de Uso: Emitir Relatório por Turma
**Ator primário:** Usuário do sistema (Nutricionista)
**Objetivo no contexto:** Gerar o relatório por turma, contendo informações pessoais, a avaliação antropométrica, o diagnóstico da situação nutricional, quadro de doenças e observações de todos os alunos de uma turma.
**Precondições:** O usuário deve estar devidamente cadastrado e autenticado no sistema.
**Disparador:** O usuário decide realizar o acompanhamento nutricional dos alunos de uma determinada turma.
**Cenários:**
1. O usuário entra no sistema
2. O usuário insere o seu ID
3. O usuário insere a sua senha
4. O sistema exibe a tela principal com as principais funcionalidades.
5. O usuário seleciona “Relatórios”
6. O sistema exibe a tela de Relatórios.
7. O usuário seleciona “Relatório por Turma”
8. O sistema apresenta uma tela com campos de pesquisa por Código e Nome da Turma
9. O usuário seleciona uma opção e entra com a informação adequada.
10. O usuário confirma a operação por meio do botão “Pesquisar”
11. O sistema retorna a busca.
12. O usuário seleciona o registro encontrado.
13. O usuário seleciona o botão “Gerar Relatório”
14. O sistema gera o Relatório em formato PDF.
15. O sistema retorna mensagem de confirmação com as opções “Imprimir” e “Salvar”.
**Exceções:**
1. ID ou senha do usuário estão incorretos - usuário não autenticado.
2. O sistema não encontra nenhum registro - a turma não está cadastrado no sistema (veja o caso de uso Inserir Turma) ou a informação inserida no campo apropriado de busca está incorreta.
**Prioridade:** Prioridade alta, a ser implementada após as funções básicas.
**Frequência de uso:** Frequência alta.
**Canal com o ator:** Via software instalado em PC.
**Atores secundários:** Não há.
**Canais com atores secundários:** Não há.

### 4.5.3 Caso de Uso: Emitir Relatório por Diagnóstico Nutricional
**Ator primário:** Usuário do sistema (Nutricionista)
**Objetivo no contexto:** Gerar o relatório a partir de um pré-determinado diagnóstico nutricional (Eutrófico, Sobrepeso, Magreza ou Obesidade Grave) , contendo informações pessoais, a avaliação antropométrica, o diagnóstico da situação nutricional, quadro de doenças e observações de todos os alunos de uma turma.
Precondições: O usuário deve estar devidamente cadastrado e autenticado no sistema.
**Disparador:** O usuário decide realizar o acompanhamento nutricional dos alunos que pertencem à uma mesma classe de diagnóstico nutricional.
**Cenários:**
1. O usuário entra no sistema
2. O usuário insere o seu ID
3. O usuário insere a sua senha
4. O sistema exibe a tela principal com as principais funcionalidades.
5. O usuário seleciona “Relatórios”
6. O sistema exibe a tela de Relatórios.
7. O usuário seleciona “Relatório por Diagnóstico”
8. O sistema apresenta uma tela com um campo de pesquisa por Diagnóstico Nutricional contendo as opções Eutrófico, Sobrepeso, Magreza e Obesidade Grave.
9. O usuário seleciona uma opção.
10. O usuário confirma a operação por meio do botão “Pesquisar”
11. O sistema retorna a busca.
12. O usuário seleciona o botão “Gerar Relatório”
13. O sistema gera o Relatório em formato PDF.
14. O sistema retorna mensagem de confirmação com as opções “Imprimir” e “Salvar”.
**Exceções:**
1. ID ou senha do usuário estão incorretos - usuário não autenticado.
2. O sistema não encontra nenhum registro -não há nenhum registro com a classificação selecionada.
**Prioridade:** Prioridade alta, a ser implementada após as funções básicas.
**Frequência de uso:** Frequência alta.
**Canal com o ator:** Via software instalado em PC.
**Atores secundários:** Não há.
**Canais com atores secundários:** Não há.

### 4.5.4 Caso de Uso: Emitir Gráfico de Diagnósticos
**Ator primário:** Usuário do sistema (Nutricionista)
**Objetivo no contexto:** Gerar um gráfico representando o diagnóstico nutricional (Eutrófico, Sobrepeso, Magreza ou Obesidade Grave) de todos os alunos.
**Precondições:** O usuário deve estar devidamente cadastrado e autenticado no sistema.
**Disparador:** O usuário decide analisar a situação nutricional geral dos alunos de uma escola.
**Cenários:**
1. O usuário entra no sistema
2. O usuário insere o seu ID
3. O usuário insere a sua senha
4. O sistema exibe a tela principal com as principais funcionalidades.
5. O usuário seleciona “Relatórios”
6. O sistema exibe a tela de Relatórios.
7. O usuário seleciona “Gráfico de Diagnósticos”
8. O sistema apresenta uma mensagem de confirmação.
9. O usuário confirma a operação por meio do botão “Gerar Gráfico”
10. O sistema gera Gráfico em formato PDF.
11. O sistema retorna mensagem de confirmação com as opções “Imprimir” e “Salvar”.
**Exceções:**
1. ID ou senha do usuário estão incorretos - usuário não autenticado.
2. O gráfico não pôde ser gerado - não existem alunos cadastrados no sistema (veja o caso de uso Inserir Aluno).
**Prioridade:** Prioridade desejável, a ser implementada após todas as outras funções do sistema.
**Frequência de uso:** Frequência Alta.
**Canal com o ator:** Via software instalado em PC.
**Atores secundários:** Não há.
**Canais com atores secundários:** Não há.

## 5 Diagrama de Caso de Uso
[![Diagrama de Caso de Uso](https://i.imgur.com/QFxEefa.png)](https://imgur.com/QFxEefa)
