create database db_mercado;

use db_mercado;

create table tb_produtos (
	id_produto int not null auto_increment,
    nome_p varchar(50),
    preco float,
    validade date,
    qtd_em_estoque int,
    qtd_min int,
    primary key (id_produto) 
);

 create table tb_vendas (
	id_venda int not null auto_increment,
	valor_total float,
    data_vend date,
    primary key (id_venda) 
 );
 
 drop table tb_produto;
 
 create table tb_itens_vendidos (
	id_itens_vendidos int not null auto_increment,
    valor_p float not null,
    qtd int not null,
    fk_produto int not null,
    fk_venda int not null,
    primary key (id_itens_vendidos),
    foreign key (fk_produto) references tb_produtos (id_produto),
    foreign key (fk_venda) references tb_vendas (id_venda)
 );
 
 select * from tb_produtos;