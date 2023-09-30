# Carteira de Investimentos

Projeto de LDS para gerenciar uma carteira de investimentos, permitindo a adição e visualização de ativos financeiros e análises de dashboard.

## Funcionalidades

- Adição de Ativos: Adicione novos ativos à sua carteira informando o nome do ativo.
- Visualização de Ativos: Visualize os ativos cadastrados na sua carteira.

## Tecnologias Utilizadas

- PHP
- Laravel
- JavaScript
- HTML5
- CSS3
- Bootstrap / Tailwind
- MySQL

## Como Usar

1. Clone este repositório:

   ```bash
   git clone https://github.com/PedroDSouza/CRUD.git

2. Instale o Php na sua máquina ou o XAMPP
    
    ```bash
   git clone https://www.youtube.com/watch?v=JQU8CmmHJpM

3. Instale o Composer na sua máquina indicando a pasta aonde foi instalada o PHP
exemplo: "C:\Users\php\php.exe"

    ```bash
    git clone https://www.youtube.com/watch?v=cdqUUDYmcHQ

4. Instale o Laravel

    ```bash
   git clone  https://www.youtube.com/watch?v=IIynoYfLutA

5. Rode o projeto com os seguintes comandos:

          composer install
        
          composer update
         
          cp .env.example .env
        
          php artisan key:generate
        
          php artisan serve
   
   
   

## Para evitar erros comuns ao rodar o projeto siga as instruções:

1. Se estiver usando o Windows - Libere todas as permissões da pasta aonde está localizada o seu projeto seguindo as instruções:

Clique com o botão direito na pasta -> Propriedades -> Segurança -> Editar -> permitir controle total -> aplicar 

2. Edite o arquivo PHP.ini localizado aonde vc instalou o php e descomente as linhas:

    extension=fileinfo  (evitar erro na hora de dar o comando composer update no terminal)

    extension.zip (evitar erro na hora de dar o comando composer update no terminal)

3. Problemas com o vite:

    Quando rodar o projeto e acessar a página de transações, se deparar com o erro "Vite manifest not found at:....", execute os comandos abaixo:

    Instale o Node.js e o npm. Quando instalar o node.js direto do site oficial o npm vem junto. (Site oficial: https://nodejs.org/en)
    Após a instalação, adicione o caminho do Node.js ao caminho do sistema. Você pode fazer isso editando o arquivo PATH no seu sistema operacional.
    Ou utilize esse comando no cmd caso sua SO for Windows: "set PATH=%PATH%;C:\Program Files\nodejs".

    Após a instalação, verifique se o Node.js e o npm estão instalados corretamente:
    Execute os códigos no cmd "node -v" e "npm -v"

    Se o Node.js e o npm estiverem instalados corretamente, verifique se o caminho do Node.js está correto.
    Execute no cmd "echo %PATH%"

    O caminho do Node.js deve incluir o caminho para o executável node.

    A partir daí é só executar os mesmos códigos do erro abaixo e rodar o programa

   Quando rodar o projeto e se deparar com a seguinte mensagem de erro : "laravel-vite-plugin/inertia-helpers"execute os comandos abaixo:

    npm install --save-dev vite laravel-vite-plugin
    npm install --save-dev @vitejs/plugin-vue

   É preciso atualizar o package.json:

    "scripts": {
       "dev": "vite",
       "build": "vite build"
   }

   Finalmente, voce pode acionar este comando abaixo para construir o Vite e criar o arquivo de manifesto.

       npm run build


## Wireframe

![image](https://github.com/PedroDSouza/CRUD/assets/99222688/c85c7342-a38f-488f-a5cc-098f0c75c7fb)


## Integrantes do Grupo:

CARLOS ALBERTO SIQUEIRA SILVA - GU3022293

LUAN CAVALCANTI MORAIS - GU302119X - Scrum Master

LUCAS BATISTA CAVALCANTE - GU3003647

NICOLE DOS SANTOS MORAIS - GU3020975 

PEDRO HENRIQUE OLIVEIRA DE SOUZA - GU300161X

VICTOR FREIRES ALMEIDA DE ARRUDA - GU3020002

VICTOR GABRIEL SANTOS MAGALHAES - GU3020371 - Product Owner
