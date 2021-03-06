# Importante! (PoC) | Comidinhas EACH (PT-BR)
Aqui estão reunidas instruções para começar a utilizar o repositório e programar no projeto de Fundamentos de Sistemas de Informação da turma 2018 de SI na USP Leste.

### Nota:

Este site foi desenvolvido em uma disciplina teórica do primeiro semestre. A proposta de entrega de um sistema ao final do semestre com um mínimo de orientação foi feita pelo professor visando que aprendessemos a aprender, cumprindo com a ideia dele de "mostrar que a computação é sim possível" para nós.

Tendo em vista isso, é importante observar que todo o projeto foi feito por 5 integrantes em menos de 3 meses que (com exceção de 1) não sabiam programar. Por isso, se estiver lendo isso não espere códigos ideais para este tipo de sistema, pois o grupo de maneira geral não teve tempo de amadurecer os conhecimentos sendo este repositório apenas uma memória do que conseguimos alcançar na disciplina.

## Instalando e usando o WampServer
Faça o download aqui:
```
http://www.wampserver.com/en/

```
e instale normalmente.

Após concluir a instalação, inicie o programa e aguarde até que o ícone dele esteja verde na barra de tarefas. Qaundo estiver, lembre-se de clicar com o botão direito no ícone e alterar a versão do PHP para 7.2.4.

## Criação do banco de dados

É fundamental que se crie o banco de dados a fim do site funcionar como deve, e para isso, executar os seguintes comandos no terminal do MySQL.

### Banco de dados
Este comando cria o banco de dados.

```
create database coolsunday
default character set utf8
default collate utf8_general_ci;
```

### Tabela de vendedores (para o Login/Cadastro)
Aqui é possível armazenar os cadastros de vendedores.

```
create table vendedor (
id int(11) auto_increment primary key,
usuario varchar(50),
senha varchar(50),
nome varchar(50),
cor varchar(7) not null default '#fdb523',
foto varchar(50) not null default 'logicon.png',
local varchar(50) not null default 'each'
);
```
### Tabela para produtos
Aqui é armazenado os produtos que serão listados na página inicial.

```
create table produtos (
id int(11) auto_increment primary key,
Nome varchar(25),
Preco decimal(4,2),
Vendedor varchar(30),
Usuario varchar(30),
Descricao varchar(600),
Aprovado boolean not null default 1
);
```

## Testar o projeto
Para testar o site durante seu desenvolvimento, clone o repositório no endereço abaixo ou similar:
```
C:\wamp64\www
```

e acesse o site pelo endereço:
```
http://localhost/eachphp/index.php
```
