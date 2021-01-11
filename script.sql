CREATE TABLE categoria(
idCategoria integer unsigned not null auto_increment,
descricao varchar(50) not null,
primary key (idCategoria)
);

CREATE TABLE produto(
idProduto integer unsigned not null auto_increment,
idCategoria integer not null,
preco double not null,
nomeproduto varchar(30) not null,
descricao varchar(60) not null,
quant_estoque integer not null,
primary key(idProduto),
foreign key(idCategoria) REFERENCES categoria (idCategoria) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE usuario(
cpf integer unsigned not null,
nomeusuario VARCHAR(60) NOT NULL, 
email VARCHAR(60) NOT NULL,
senha VARCHAR(12) NOT NULL,
datadenascimento DATE NOT NULL,
sexo CHAR(1) NOT NULL,
tipousuario VARCHAR(10) NOT NULL,
PRIMARY KEY(cpf)
);

CREATE TABLE endereco(
idendereco integer unsigned not null auto_increment,
cpf integer unsigned not null,
logradouro VARCHAR(60) NOT NULL,
numero VARCHAR(7) NOT NULL,
complemento VARCHAR(60) NOT NULL,
bairro VARCHAR(60) NOT NULL,
cidade VARCHAR(60) NOT NULL,
cep VARCHAR(60) NOT NULL,
PRIMARY KEY(idendereco),
FOREIGN KEY (cpf) REFERENCES usuario(cpf) ON DELETE CASCADE ON UPDATE CASCADE
);
