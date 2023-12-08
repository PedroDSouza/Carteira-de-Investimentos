# Carteira de Investimentos

Projeto de LDS (Laboratório de Desenvolvimento de Sistemas) para gerenciar uma carteira de investimentos, permitindo a adição e visualização de ativos financeiros e análises de dashboard.

## Funcionalidades do site

- Adição de Ativos: Adicione novos ativos à sua carteira informando o nome do ativo.
- Visualização de Ativos: Visualize os ativos cadastrados na sua carteira.

## Ferramentas usadas

- XAMPP — Banco de dados MySQL e Apache com suporte as linguagens PHP e Perl.

- Composer —  Ferramenta de gerenciamento de dependências para PHP. 

- Laravel 10.x — Framework de desenvolvimento web em PHP que utiliza a arquitetura MVC (Model-View-Controller).

- Livewere — Biblioteca do Laravel que cria interfaces dinâmicas (similares ao Vue) com códigos do Blade e do próprio Laravel.

- Alpine.js — Framework JavaScript minimalista que permite adicionar interatividade à página HTML de forma declarativa sem muito código.

- TailwindCSS — Framework de CSS.

- Vue.js — Framework JavaScript.

- Node.js — Ambiente de execução JavaScript.

## Prepare o ambiente de desenvolvimento

1. Instale o XAMPP na sua máquina:
    
    ```bash
        Versão: XAMPP 8.2.4 / PHP 8.2.4

        XAMPP: https://www.apachefriends.org/pt_br/download.html

    ```

2. Instale o Composer na sua máquina indicando o diretório onde foi instalado o executável do PHP:

    ```bash
        Composer: https://getcomposer.org/download/

        Exemplo com XAMPP: "C:\xampp\php\php.exe"

        Veja como funciona:

        https://www.youtube.com/watch?v=yCXfFZljKy8
    ```

2. Instale o Node.js:

    ```bash
        Node.js: https://nodejs.org/pt-br/download

        Versão: node 18.18.0 / npm 9.8.1

        Veja como funciona:

        https://www.youtube.com/watch?v=OcUHXEVQfIU&t=255s
    ```

## Fazendo o projeto funcionar:

1. Clone o repositório:

    ```bash
        git clone https://github.com/PedroDSouza/Carteira-de-Investimentos.git
    ```

2. Entre no diretório do projeto e rode no terminal os seguintes comandos:

    *Para instalar as dependências do composer dentro do projeto:*

    ```bash
        composer install
    ```
  
    
    *Em caso de erro com o "composer install", siga os comandos abaixo:*

    ```bash
        composer install --ignore-platform-reqs
        
        composer update
            
        cp .env.example .env
        
        php artisan key:generate
    ``` 

    *Rodando o servidor do PHP:*

    ```bash
        php artisan serve
    ``` 
   
3. Em um novo terminal atualize os arquivos do Node.js e inicie o servidor:

     *Atualizando os arquivos:*
     
    ```bash
        npm update
    ```

    *Iniciando o servidor:*

    ```bash
        npm run dev
    ```
        
    *ATENÇÃO: os servidores do node e do php precisam estar rodando simultaneamente em terminais distintos.*

## Para possíveis erros de execução siga os passos abaixo:

1. No Windows — Libere todas as permissões do diretório onde está localizado o seu projeto seguindo estas instruções:

    ```bash
        Clique com o botão direito sobre o diretório do projeto -> Propriedades -> Segurança -> Editar -> Permitir controle total -> Aplicar 
    ```

2. Edite o arquivo php.ini localizado onde foi instalado o php e descomente as linhas:
    ```bash
        extension=fileinfo  (evitar erro na hora de dar o comando composer update no terminal)

        extension.zip (evitar erro na hora de dar o comando composer update no terminal)
    ``` 

3. Problemas com o node (Vite):

    *Caso se depare com a seguinte mensagem de erro: 
    "laravel-vite-plugin/inertia-helpers" execute os comandos abaixo:*

    ```bash
        npm install --save-dev vite laravel-vite-plugin
        npm install --save-dev @vitejs/plugin-vue
    ```

   

    *É preciso atualizar o package.json:*

    ```bash
        "scripts": {
        "dev": "vite",
        "build": "vite build"
        }
    ```
    

    *Execute este comando para criar um novo diretório de compilação de produção do  projeto:*
    
    ```bash
        npm run build
    ```
    
    *Por fim, execute os comandos em terminais distintos e inicie os servidores do projeto normalmente:*
   
    ```bash
       npm run dev

       php artisan serve
    ```
       
4. Erro no banco de dados "Could not find driver" (MySQL):
    
    *No CMD:*

    ```bash
       php -i | find /i "Configuration file"
    ```
    
    *Descomente a extensão:* 

    ```bash
       ;extension=pdo_mysql
    ```

## Configurando o banco de dados com o Laravel

1. Crie um banco de dados e faça a conexão com o Laravel: 
    
    *No XAMPP:*
    ```bash
    Iniciar -> Apache, o MySQL e abrir o Admin
    ```
- Criar um novo banco
- Configurar as informações do banco no arquivo `.env` e fazer a conexão.

    *A partir da linha 11 nessa sequência:*
    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel 
    DB_USERNAME=root
    DB_PASSWORD= 
    ```

*Por padrão o Laravel usa o MySQL mas caso você use outro banco altere todas as informações necessárias.*

## Enviando as tabelas para o banco de dados

As tabelas já estão criadas dentro do projeto, use este comando para inseri-lás no banco:

```bash
  php artisan migrate
```

Pronto, agora basta olhar no banco de dados criado anteriormente e verá todas as tabelas inseridas nele.


## Integrantes do Grupo:

#### Scrum Master

[@luanmorays](https://github.com/luanmorays) LUAN CAVALCANTI MORAIS — GU302119X

#### Product Owner

[@victorxmdev](https://github.com/victorxmdev) VICTOR GABRIEL SANTOS MAGALHAES — GU3020371

#### Front-end Development Team 

[@]() CARLOS ALBERTO SIQUEIRA SILVA — GU3022293

[@eulucasbatista](https://github.com/eulucasbatista) LUCAS BATISTA CAVALCANTE — GU3003647

[@nicolemorais](https://github.com/nicolemorais) NICOLE DOS SANTOS MORAIS — GU3020975


#### Back-end Development Team

[@PedroDSouza](https://github.com/PedroDSouza) PEDRO HENRIQUE OLIVEIRA DE SOUZA — GU300161X

[@]() VICTOR FREIRES ALMEIDA DE ARRUDA — GU3020002


