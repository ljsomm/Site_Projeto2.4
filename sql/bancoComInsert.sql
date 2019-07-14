CREATE DATABASE IF NOT EXISTS db_projetoEllen;

USE db_projetoEllen;

CREATE TABLE tb_usuario(
cd_usuario int not null,
nm_email varchar(255),
cd_senha varchar(255),
CONSTRAINT pk_usuario
	PRIMARY KEY(cd_usuario)
);

CREATE TABLE tb_noticia(
cd_noticia int not null,
nm_noticia varchar(255),
dt_noticia date,
hr_noticia TIME,
ds_noticia TEXT,
cd_usuario int not null,
CONSTRAINT pk_noticia
	PRIMARY KEY(cd_noticia),
CONSTRAINT fk_noticia
	FOREIGN KEY (cd_usuario)
		REFERENCES tb_usuario(cd_usuario)
);


INSERT INTO tb_usuario VALUES (1, 'profellen', 'ruthinha123'); #LOGIN para o site

SELECT * FROM tb_usuario;