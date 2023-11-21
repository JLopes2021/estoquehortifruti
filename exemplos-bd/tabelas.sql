CREATE TABLE produtos (
    produto_id INT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10, 2) NOT NULL
);

INSERT INTO produtos (produto_id, nome, descricao, preco) VALUES
(1, 'Maçã', 'Maçã fresca e suculenta', 2.50),
(2, 'Banana', 'Banana madura e deliciosa', 1.75),
(3, 'Laranja', 'Laranja cítrica e refrescante', 2.00),
(4, 'Tomate', 'Tomate vermelho e maduro', 3.50),
(5, 'Alface', 'Alface fresca e crocante', 1.20),
(6, 'Cenoura', 'Cenoura suculenta e nutritiva', 1.80),
(7, 'Morango', 'Morango doce e suculento', 4.00),
(8, 'Abacaxi', 'Abacaxi tropical e saboroso', 5.50),
(9, 'Pepino', 'Pepino fresco e leve', 1.50),
(10, 'Uva', 'Uva madura e doce', 3.00),
(11, 'Melancia', 'Melancia refrescante e suculenta', 6.00),
(12, 'Pêssego', 'Pêssego macio e doce', 2.80),
(13, 'Kiwi', 'Kiwi exótico e cheio de sabor', 4.50),
(14, 'Pera', 'Pera madura e suculenta', 2.30),
(15, 'Manga', 'Manga tropical e suculenta', 3.80);


CREATE TABLE estoque (
    estoque_id INT PRIMARY KEY,
    produto_id INT,
    quantidade INT,
    data_atualizacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (produto_id) REFERENCES produtos(produto_id)
);

CREATE TABLE vendas (
    venda_id INT PRIMARY KEY,
    produto_id INT,
    quantidade INT,
    data_venda TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (produto_id) REFERENCES produtos(produto_id)
);

CREATE TABLE clientes (
    cliente_id INT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
);
