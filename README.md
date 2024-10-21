# Portfólio Vinícius Marques

Este é o código-fonte de um site de portfólio pessoal, desenvolvido com HTML5, CSS3 e JavaScript puro. O site segue o estilo "one page" e inclui um layout responsivo com popups para mostrar conteúdos individuais.

## Tecnologias Utilizadas

Este projeto foi construído usando as seguintes tecnologias:

- [Blade](https://laravel.com/docs/9.x/blade) - Motor de templates do Laravel
- [SASS](https://sass-lang.com/) - Pré-processador CSS
- [HTML](https://developer.mozilla.org/pt-BR/docs/Web/HTML) - Linguagem de marcação para construção da interface
- [JavaScript](https://www.javascript.com/) - Linguagem de script para manipulação de eventos e interatividade
- [Gulp](https://gulpjs.com/) - Automatizador de tarefas

## Estrutura de Arquivos

- `index.php`: Arquivo principal PHP usando Blade.
- `style.scss`: Arquivo de estilos SASS.
- `script.js`: Arquivo JavaScript para manipulação de eventos e popups.
- `popup-content.html`: Arquivo HTML externo contendo o conteúdo dos popups.
- `gulpfile.js`: Arquivo de configuração do Gulp para automação de tarefas.

## Requisitos de Sistema

- Node.js (>=16.x.x)
- PHP (>=7.4)
- Gulp CLI (>=4.x)

## Instalação e Configuração

### 1. Instalar Dependências

Clone o repositório e instale as dependências do projeto:

```bash
git clone git@github.com:vdavidmarques/vdavidmarques.github.io.git
cd vdavidmarques.github.io
npm install
npm run start
