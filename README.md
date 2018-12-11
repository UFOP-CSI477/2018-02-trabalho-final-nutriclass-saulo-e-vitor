# 2018-02-trabalho-final-nutriclass-saulo-e-vitor

# Sistema de Gerenciamento Nutricional Escolar

  A educação do setor público ainda está muito atrasada quando se trata de utilização das TIC’S (tecnologias de informação e comunicação) em seus processos. “Na área da educação, o uso de recursos tecnológicos em sala de aula ainda é uma realidade distante na maioria das escolas do país.” (Revista Fonte, p.51, dez. 2015).
Apesar de haver um crescimento no uso de computadores e da internet nas escolas, a inclusão de novas tecnologias no ensino ainda depende de vários fatores, dentre eles destacam-se as políticas públicas para a implantação desses novos recursos.
Para que essa deficiência seja parcialmente suprida, é proposto o SGE (Sistema de Gerenciamento Nutricional Escolar), um sistema que tem como intenção facilitar os processos de acompanhamento nutricional dos alunos dessas instituições de ensino, obedecendo às regras de políticas públicas.

## 1. Requisitos Gerais

### 1.1 Requisitos Relacionados a Manter Aluno

| Código | Nome | Prioridade |
| ------ | ------ | ------ |
| RF-01 |Inserir Aluno | O usuário poderá inserir o cadastro de um aluno no sistema|
| RF-02 |Alterar Aluno | O usuário poderá alterar o registro de um aluno do sistema|
| RF-03 |Excluir Aluno|O usuário poderá excluir o registro de um aluno no sistema |
| RF-04|Pesquisar Aluno|O usuário poderá pesquisar o registro de um aluno no sistema |

### 1.2 Requisitos Relacionados a Avaliar Aluno

| Código | Nome | Prioridade |
| ------ | ------ | ------ |
| RF-05|Avaliação Antropométrica|O usuário deverá inserir ou alterar as informações antropométricas (peso e altura) do aluno e o sistema deve calcular o IMC (Índice de Massa Corporal)|
| RF-06|Incidência de doenças|O usuário deverá registrar ou alterar a incidência de escolares com diabetes, intolerância à lactose e doença celíaca.|
| RF-07|Diagnóstico|O usuário deverá determinar o diagnóstico do aluno (Subnutrição, Peso Saudável, Sobrepeso, Obesidade Grau 1,2 e 3) |
| RF-08|Observações|O usuário deverá inserir informações adicionais que julgar importantes sobre o estado nutricional do aluno |

### 1.3 Requisitos Relacionados a Manter Turma

| Código | Nome | Prioridade |
| ------ | ------ | ------ |
| RF-09|Inserir Turma|O usuário poderá cadastrar turmas e atribuir alunos a elas.|
| RF-10|Alterar Turma|O usuário poderá alterar o registro de uma turma|
| RF-11|Excluir Turma|O usuário poderá excluir o registro de uma turma|
| RF-12|Pesquisar Turma|O usuário poderá pesquisar o registro de uma turma existente |

### 1.4 Requisitos Relacionados a Manter Relatório

| Código | Nome | Prioridade |
| ------ | ------ | ------ |

| RF-13|Emitir Relatório por Turma|O usuário poderá emitir um relatório com os diagnósticos de todos os alunos de uma turma específica (Gráfico)|
| RF-14|Emitir Relatório por Diagnóstico Nutricional|O usuário poderá emitir um relatório geral (Gráfico).|

### 1.5 Requisitos Não funcionais

| Código | Nome | Prioridade |
| ------ | ------ | ------ |
| RF-15|Usabilidade|Software de fácil entendimento e manipulação. O usuário poderá realizar tarefas de forma intuitiva, os títulos dos menus são bem explicativos, há mensagens de confirmações para as operações de alta importância, facilitando assim o uso do sistema. Interface simples e enxuta|
| RF-16|Compatibilidade|Compatibilidade com diferente sistemas operacionais, hardware e browser. Além de dispositivos com os mais diversos tamanhos de telas|
| RF-17|Disponibilidade|Os dados estarão disponíveis on-line em um host, salvos em banco de dados mysql.|
| RF-18|Segurança| Os dados só poderão ser gerenciados por Usuários previamente cadastrados por meio de nome de usuário e senha, ou seja, o sistema só poderá ser operado por usuários devidamente autenticados|
| RF-19|Licença|O software proprietário será disponibilizado através da licença Shareware|



## 2.Detalhamento dos Casos de Uso
### 2.1. Requisitos Gerais
#### 2.1.1 Caso de Uso: Realizar Login
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

## 2.2 Requisitos Relacionados a Manter Aluno
### 2.2.1 Caso de Uso: Inserir Aluno
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

### 2.2.2 Caso de Uso: Alterar Aluno
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

### 2.2.3 Caso de Uso: Excluir Aluno
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

### 2.2.4 Caso de Uso: Pesquisar Aluno
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

## 2.3 Requisitos Relacionados a Avaliar Aluno
### 2.3.1 Caso de Uso: Avaliação Antropométrica
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
7. O usuário seleciona “Avaliações” e “Cadastrar”
8. O sistema apresenta uma tela com as turmas cadastradas.
9. O usuário seleciona uma turma.
10. O sistema retorna uma nova tela contendo a lista de alunos da turma selecionada.
11. O usuário seleciona um registro e realiza a avaliação do aluno.
12. Usuário insere o peso e a altura do aluno nos campos “Peso” e “Altura”.
13. Sistema calcula o IMC do aluno e exibe-o na tela juntamente com a classificação nutricional de acordo com a faixa do IMC obtido.
14. O Usuário informa se o aluno possui alguma doença e se necessário, insere alguma observação.
15. Usuário seleciona a opção “Concluir Avaliação”
16. Uma mensagem é exibida “Avaliação cadastrada com sucesso”
17. O sistema volta para a tela principal de Avaliações.
**Exceções:**
1. O cálculo só será possível se o Usuário informar os dados corretamente.
2. ID ou senha do usuário estão incorretos - usuário não autenticado.
3. O sistema não encontra nenhum registro - o aluno não está cadastrado no sistema (veja o caso de uso Inserir Aluno) ou a informação inserida no campo apropriado de busca está incorreta.
**Prioridade:** Alta
**Canal com ator:** Sistema
**Frequência de uso:** Alta, pois os dados variam muito ao decorrer do tempo.
**Atores secundários:** Não.
**Canais com atores secundários:** Não.

## 2.4 Requisitos Relacionados a Manter Turma
### 2.4.1 Caso de Uso: Inserir Turma
**Ator Primário:** Usuário.
**Objetivo no contexto:** Um novo ano letivo começa e portanto novas turmas são criadas na escola.
**Precondição:** O Usuário deve estar devidamente cadastrado e logado para criar novas turmas.
**Disparador:** o Usuário deseja criar uma nova turma.
**Cenário:**
1. O Usuário executa no sistema.
2. O Usuário insere o seu ID.
3. O Usuário insere sua senha.
4. O sistema exibe a tela principal com as principais funcionalidades.
5. O Usuário seleciona “Turmas” e "Cadastrar".
6. O sistema solicita as informações pertinentes às turmas (Nome, Ano, Sala, Turno, entre outros).
7. O Usuário confirma as informações.
8. O sistema retorna mensagem de confirmação.
**Exceções:**
1. ID ou senha do Usuário estão incorretos, então ele não entra no sistema.
2. O Usuário não insere todas os dados necessários e confirma, então o sistema emite uma mensagem o alertando para preencher os dados faltantes.
**Prioridade:** Prioridade Alta, deve ser implementada no começo do projeto.
Canal com ator: Via sistema disponibilizado.
Frequência de uso: Raramente, pois só serão inseridas novas turma no início do ano letivo.
**Atores secundários:** Não há.
**Canais com atores secundários:** Não há.


### 2.4.2 Caso de Uso: Alterar Turma
**Ator Primário: Usuário.**
**Objetivo no contexto:** O Usuário percebe um erro nas informações da turma e deseja alterá-las.
**Precondição:** O Usuário deve estar devidamente cadastrado e logado para alterar turmas.
**Disparador:** o Usuário deseja alterar uma turma.
**Cenário:**
1. O Usuário executa o sistema.
2. O Usuário insere o seu ID.
3. O Usuário insere sua senha.
4. O sistema exibe a tela principal com as principais funcionalidades.
5. O Usuário seleciona “Turmas” e "Alterar".
6. O sistema exibe as informações pertinentes às turmas (Nome, Ano, Sala, Turno, entre outros).
7. O Usuário seleciona os dados que ele deseja alterar.
8. O Usuário confirma as informações.
9. O sistema retorna mensagem de confirmação.
**Exceções:**
1. ID ou senha do Usuário estão incorretos, então ele não entra no sistema.
2. A conexão com o banco de dados falha e as alterações não podem ocorrer.
**Prioridade:** Prioridade Alta, deve ser implementada no começo do projeto.
**Canal com ator:** Via sistema disponibilizado.
**Frequência de uso:** Moderado, pois os dados podem ser inseridos incorretamente por qualquer motivo.
**Atores secundários:** Não há.
**Canais com atores secundários:** Não há.

### 2.4.3. Caso de Uso: Excluir Turma
**Ator Primário:** Usuário.
**Objetivo no contexto:** O Usuário percebe um erro na turma e deseja excluí-la ou então o ano letivo acaba e as informações já não são mais necessárias.
**Precondição:** O Usuário deve estar devidamente cadastrado e logado para excluir turmas.
**Disparador:** o Usuário deseja excluir uma turma.
**Cenário:**
1. O Usuário executa o sistema.
2. O Usuário insere o seu ID.
3. O Usuário insere sua senha.
4. O sistema exibe a tela principal com as principais funcionalidades.
5. O Usuário seleciona “Turmas” e "Excluir".
6. O sistema exibe as turmas.
7. O Usuário seleciona a turma que ele deseja excluir.
8. O sistema retorna uma mensagem com tom de alerta e com informações sobre as consequências da exclusão da turma e com opção para cancelar.
9. O Usuário confirma a exclusão.
10. O sistema retorna mensagem de confirmação.
**Exceções:**
1. ID ou senha do Usuário estão incorretos, então ele não entra no sistema.
2. O Usuário cancela a exclusão quando a mensagem para confirmar a ação aparece.
**Prioridade:** Prioridade Alta, deve ser implementada no começo do projeto.
**Canal com ator:** Via sistema disponibilizado.
**Frequência de uso:** Moderado, pois o Usuário pode querer excluir as turmas por vários motivo.
**Atores secundários:** Não há.
**Canais com atores secundários:** Não há.

## 2.5 Requisitos Relacionados a Manter Relatório
### 2.5.1 Caso de Uso: Emitir Relatório Geral
**Ator primário:** Usuário do sistema (Nutricionista)
**Objetivo no contexto:** Gerar o relatório individual de um aluno, contendo informações pessoais, a avaliação antropométrica, o diagnóstico da situação nutricional do aluno, quadro de doenças e observações.
**Precondições:** O usuário deve estar devidamente cadastrado e autenticado no sistema.
**Disparador:** O usuário decide realizar o acompanhamento nutricional geral da escola.
**Cenários:**
1. O usuário entra no sistema
2. O usuário insere o seu ID
3. O usuário insere a sua senha
4. O sistema exibe a tela principal com as principais funcionalidades.
5. O usuário seleciona “Relatórios”
6. O sistema exibe a tela de Relatórios.
7. O usuário seleciona “Relatório por Estado Nutricional”
8. O sistema gera o Relatório em formato de Gráfico.
**Exceções:**
1. ID ou senha do usuário estão incorretos - usuário não autenticado.
2. O sistema não encontra nenhum registro (gráfico em branco) - não há alunos cadastrados.
**Prioridade:** Prioridade alta, a ser implementada após as funções básicas.
**Frequência de uso:** Frequência alta.
**Canal com o ator:** Via software instalado em PC.
**Atores secundários:** Não há.
**Canais com atores secundários:** Não há.

### 2.5.2 Caso de Uso: Emitir Relatório por Turma
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
8. O sistema apresenta uma tela com as turmas cadastradas
9. O usuário seleciona uma turma.
10. O sistema gera o Relatório em formato de gráfico.
**Exceções:**
1. ID ou senha do usuário estão incorretos - usuário não autenticado.
2. O sistema não encontra nenhum registro (gráfico em branco) - a turma não possui alunos com avaliações cadastradas.
**Prioridade:** Prioridade alta, a ser implementada após as funções básicas.
**Frequência de uso:** Frequência alta.
**Canal com o ator:** Via software instalado em PC.
**Atores secundários:** Não há.
**Canais com atores secundários:** Não há.

## 3 Diagrama de Caso de Uso
[![Diagrama de Caso de Uso](https://i.imgur.com/QFxEefa.png)](https://imgur.com/QFxEefa)
