# Inventário Minecraft

**Introdução**

O projeto tem como objetivo criar um inventário inspirado no jogo Minecraft, simulando a organização visual e a forma de armazenamento de itens. Inventários desse tipo são comuns em jogos de sobrevivência, RPG e construção, permitindo que o jogador gerencie recursos e equipamentos de maneira eficiente.



##**O que é um inventário em um jogo? Qual a finalidade? Exemplos.**##

Um inventário em um jogo é uma funcionalidade que permite ao jogador armazenar, organizar e gerenciar itens coletados ao longo da partida. A finalidade é proporcionar um controle eficiente dos recursos, como armas, ferramentas e materiais, facilitando a progressão do jogo. Exemplos de jogos que utilizam inventários incluem Minecraft, Red Dead Redemption 2 e  Resident Evil 2 Remake.

Exemplos:

**Red Dead Redemption 2**

![red-dead-redemption-2](https://github.com/user-attachments/assets/43128230-a137-433a-92f2-be237ed6ac39)




**Resident Evil 2 Remake**

![resident-evil-2](https://github.com/user-attachments/assets/9a429675-4662-4440-b2d3-454e48c504b4)




**Que tipos de sistemas utilizam essa funcionalidade? Exemplos.**


Sistemas de jogos de sobrevivência, RPG e construção frequentemente utilizam inventários. Em Minecraft, por exemplo, o jogador coleta blocos e itens para construção e combate. Em Red Dead Redemption 2, o inventário permite ao jogador armazenar armas, suprimentos, alimentos e até mudar de roupas, influenciando a jogabilidade e a sobrevivência no mundo aberto. Já em Resident Evil 2 Remake, o sistema de inventário é limitado, exigindo que o jogador gerencie cuidadosamente munições, ervas e chaves, adicionando um elemento estratégico ao jogo.



**Por que essa funcionalidade é importante?**

A funcionalidade de inventário é fundamental para a organização dos recursos coletados, além de possibilitar combinações e criação de novos itens por meio de sistemas de crafting. Isso proporciona ao jogador uma experiência de gerenciamento que otimiza o progresso dentro do jogo.



  **A Implementação**

  
 **Front-end**

 
**Ferramentas Utilizadas:**

**HTML:** Estrutura estática da página (slots, botões, formulários).


**Bootstrap:** Estilização responsiva (grid, cores, tipografia).


**PHP:** Dinamiza o HTML (ex: preenche slots com dados do TXT).


**VS Code:** Ambiente de desenvolvimento.





**Layout e Setorização**

O layout foi definido seguindo a estética do inventário clássico do Minecraft, com uma distribuição em linhas e colunas para manter a organização visual. O inventário possui 36 slots, dispostos em uma grade 6x6, garantindo um visual limpo e de fácil navegação.



**Back-end**


  **Ferramentas Utilizadas:**
  
  
**PHP:** Lógica que: Recebe dados do formulário (ex: cadastro.php),Gerencia o arquivo TXT (adiciona/remove itens).

**Arquivo TXT:** Banco de dados simples (armazena itens no formato nome|quantidade|imagem).

**VS Code:** Editor usado para programar a lógica.



**Passo a Passo de Execução do projeto**

Criar uma pasta no htdocs do XAMPP

Abrir o VS Code e adicionar o projeto

Ativar o servidor local (XAMPP)

Acessar via navegador: http://localhost/minecraft




**Estrutura de Diretórios**

A estrutura do projeto está organizada conforme abaixo:


![Diretorio](https://github.com/user-attachments/assets/a78a8307-756e-4b0e-8df5-45a17775dde2)




**Principais partes dos códigos**

**Pages:**

**Cadastro**

![codigo cadastro](https://github.com/user-attachments/assets/ff522395-ecff-49be-844b-02e1d53e9a37)

**Resumo do Código**


Recebe os dados do formulário (nome, quantidade e imagem)

Move a imagem enviada para a pasta assets/img/

Formata os dados no padrão: nome|quantidade|imagem

Salva no arquivo inventario.txt (adicionando ao final do arquivo)

Redireciona para inventario.php após cadastrar




**Inventário**

![Codigo inventario](https://github.com/user-attachments/assets/bfeee17d-fd4f-4ac1-9224-bffa67e70f4b)


**Resumo do Código**


Limita o inventário a 36 itens visualizados.


Itens novos substituem os antigos em um ciclo (slot 1 → 2 → ... → 36 → 1 → 2 → ...).


Não apaga itens do arquivo inventario.txt, apenas controla quais são exibidos.




**Login**

![Codigo login](https://github.com/user-attachments/assets/342ecde8-fded-4992-820d-57d9f5e8e63b)


**Resumo do Código**


Verifica o login do usuário comparando com credenciais fixas ($usuario_padrao e $senha_padrao).


**Se correto:**


Redireciona para inventario.php.


Se errado:


Mostra a mensagem "Usuário ou senha inválidos."




**Inventário**


**index**

![codigo pagina inicial](https://github.com/user-attachments/assets/b472a843-c851-41e5-a9bc-dded866d8895)



**Resumo do Código**


Exibe um cabeçalho com o título "Bem-vindo ao Inventário Minecraft".

Mostra dois botões de ação:

1- Login (leva para login.php).

2- Cadastro (leva para cadastro.php).





**Prints do inventário**


**Página Incial**


![Tela inicial inventario](https://github.com/user-attachments/assets/5613df00-71a1-4308-9eca-2dc34fc13a58)


**Página de Login**


![tela login](https://github.com/user-attachments/assets/73ffe2fb-1294-4afe-a404-7baa0a45ee81)

**Página de Cadastro**


![tela cadastro](https://github.com/user-attachments/assets/cb17800a-d4b3-4a6b-9e30-b64562f5190e)


**Inventário**


![Print do inventario](https://github.com/user-attachments/assets/c03ce6ca-d2cb-4c44-b20d-7b6222d331a3)















