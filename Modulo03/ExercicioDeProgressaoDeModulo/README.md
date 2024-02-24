# PROJETO DE BUSCA PREÇO - (PHP COM MYSQL)

1. **Descrição do Projeto:**
   O projeto consiste em desenvolver um pequeno sistema de busca de preços de produtos para uma loja. Os usuários poderão pesquisar produtos pelo código de barras e visualizar os preços disponíveis.

2. **Funcionalidades Principais:**
   - **Pesquisa de Produtos:** Os usuários poderão pesquisar produtos pelo código de barras do mesmo.
   - **Exibição de Resultados:** Os resultados da pesquisa serão exibidos em uma página, mostrando os produtos correspondentes e seus respectivos preços.
   - **Detalhes do Produto:** Os usuários poderão visualizar detalhes adicionais de um produto, como descrição, promoção etc.
   - **Cadastro de Produtos:** Um formulário para cadastrar novos produtos no sistema, informando nome, preço, categoria, etc.
   - **Edição e Exclusão de Produtos:** Os administradores poderão editar e excluir produtos existentes no sistema.

3. **Tecnologias Extras que poderão ser utilizadas:**
   - **Front-end:** HTML, CSS com Bootstrap (opcionalmente JavaScript para melhorias de interatividade)

4. **Estrutura básica do Banco de Dados:**
   - **Tabela "produtos":**
     - `id` (Chave primária)
     - `nome` (Nome do produto)
     - `codigoBarras` (Código do produto)
     - `preco1` (Preço do produto em Varejo)
     - `preco2` (Preço do produto em atacado)     
     - `descricao` (Descrição do produto)
     - `categoria` (Categoria do produto)
   
5. **Páginas Principais:**
   - **Página Inicial:** Página de entrada do sistema, exibindo a barra de pesquisa do produto.
   - **Página de Resultados:** Exibe os resultados da pesquisa com o produto encontrado.
   - **Página de Administração:** Página de administração para cadastro, edição e exclusão de produtos (protegida por autenticação [opcional]).

6. **Fluxo do Sistema:**
   - Um usuário acessa a página inicial.
   - O usuário realiza uma pesquisa informando o codigo do produto desejado.
   - O sistema busca o produto correspondente no banco de dados e exibe o resultado na página de resultados.
   
7. **Considerações Adicionais:**
   - Implementar medidas de segurança para evitar injeção de SQL e outros ataques.
   - Garantir que o design seja responsivo e acessível em diferentes dispositivos.

Este é um escopo básico que pode ser expandido conforme necessário.
A partir disso, você pode começar a desenvolver as diferentes partes do projeto, começando pela configuração do banco de dados, desenvolvimento do back-end com PHP e, em seguida, o front-end com HTML/CSS.

