CREATE TABLE Users (
    dni VARCHAR(9) PRIMARY KEY,
    user VARCHAR(50) NOT NULL,
    name VARCHAR(50) NOT NULL,
    surname VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    phone VARCHAR(9) NOT NULL
);