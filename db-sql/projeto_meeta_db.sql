CREATE DATABASE projeto_meeta;
USE projeto_meeta;
CREATE TABLE usuarios(
	id INT AUTO_INCREMENT NOT NULL,
    user_name VARCHAR(255) NOT NULL,
    phone VARCHAR(20),
    email  VARCHAR(255) NOT NULL,
    created DATETIME NOT NULL,
    PRIMARY KEY(id)
);