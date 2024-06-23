SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE SCHEMA IF NOT EXISTS mydb DEFAULT CHARACTER SET utf8;
USE mydb;


-- Tabela admin
CREATE TABLE IF NOT EXISTS admin (
  id_admin INT NOT NULL auto_increment,
  nome_admin VARCHAR(45) NOT NULL,
  login_admin VARCHAR(45) NOT NULL,
  senha_admin VARCHAR(60) NOT NULL,
  PRIMARY KEY (id_admin)
) ENGINE = InnoDB;

select * from admin;

INSERT INTO admin (nome_admin, login_admin, senha_admin)
VALUES 
	('Maria Santos', 'maria.santos', 'senha12345');


-- Tabela login_usuario
CREATE TABLE IF NOT EXISTS login_usuario (
  codigo_cliente INT NOT NULL AUTO_INCREMENT,
  usuario VARCHAR(45) NOT NULL,
  nome_cliente VARCHAR(100) NOT NULL,
  senha_cliente VARCHAR(60) NOT NULL,
  token VARCHAR(255) NOT NULL,
  admin_id_admin INT NOT NULL,
  PRIMARY KEY (codigo_cliente),
  INDEX fk_login_usuario_admin1_idx (admin_id_admin ASC),
  CONSTRAINT fk_login_usuario_admin1
    FOREIGN KEY (admin_id_admin)
    REFERENCES admin (id_admin)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE = InnoDB;


select * from login_usuario;
INSERT INTO login_usuario (usuario, nome_cliente, senha_cliente, token, admin_id_admin)
VALUES ('jdoe', 'John Doe', 'password123hashed', 'token_example', 1);





-- Tabela cliente
CREATE TABLE IF NOT EXISTS cliente (
  codigo_cliente INT NOT NULL AUTO_INCREMENT,
  nome_cliente VARCHAR(100) NOT NULL,
  validade_cliente DATE NOT NULL,
  status_cliente ENUM('ativo', 'inativo', 'suspenso') NOT NULL,
  CPF_cliente VARCHAR(14) NOT NULL,
  email_cliente VARCHAR(100) NOT NULL,
  fone_cliente VARCHAR(15) NOT NULL,
  endereco_cliente TEXT NOT NULL,
  admin_id_admin INT NOT NULL,
  login_usuario_codigo_cliente INT NOT NULL,
  PRIMARY KEY (codigo_cliente),
  INDEX fk_cliente_admin_idx (admin_id_admin ASC),
  INDEX fk_cliente_login_usuario1_idx (login_usuario_codigo_cliente ASC),
  CONSTRAINT fk_cliente_admin
    FOREIGN KEY (admin_id_admin)
    REFERENCES admin (id_admin)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_cliente_login_usuario1
    FOREIGN KEY (login_usuario_codigo_cliente)
    REFERENCES login_usuario (codigo_cliente)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE = InnoDB;


 


-- Tabela produto
CREATE TABLE IF NOT EXISTS produto (
  codigo_produto INT NOT NULL,
  nome_produto VARCHAR(45) NOT NULL,
  valor_produto DECIMAL(10,2) NOT NULL,
  validade_produto DATE NOT NULL,
  categoria_produto VARCHAR(45) NOT NULL,
  vagas INT NOT NULL,
  admin_id_admin INT NOT NULL,
  PRIMARY KEY (codigo_produto),
  INDEX fk_produto_admin1_idx (admin_id_admin ASC),
  CONSTRAINT fk_produto_admin1
    FOREIGN KEY (admin_id_admin)
    REFERENCES admin (id_admin)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE = InnoDB;

-- Tabela pagamento
CREATE TABLE IF NOT EXISTS pagamento (
  codigo_pagamento INT NOT NULL AUTO_INCREMENT,
  valor_pagamento DECIMAL(10,2) NOT NULL,
  desconto_pagamento DECIMAL(5,2) NULL,
  qntd_pago INT NOT NULL,
  cliente_codigo_cliente INT NOT NULL,
  produto_codigo_produto INT NOT NULL,
  PRIMARY KEY (codigo_pagamento),
  INDEX fk_pagamento_cliente1_idx (cliente_codigo_cliente ASC),
  INDEX fk_pagamento_produto1_idx (produto_codigo_produto ASC),
  CONSTRAINT fk_pagamento_cliente1
    FOREIGN KEY (cliente_codigo_cliente)
    REFERENCES cliente (codigo_cliente)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_pagamento_produto1
    FOREIGN KEY (produto_codigo_produto)
    REFERENCES produto (codigo_produto)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE = InnoDB;

select * from pagamento;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;