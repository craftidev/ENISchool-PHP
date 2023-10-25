USE database;

CREATE TABLE ratings
(
    idRestaurant INT           NOT NULL,
    idRating     INT           NOT NULL AUTO_INCREMENT,
    author       VARCHAR(15)       NOT NULL,
    grade        INT           NOT NULL,
    comment      VARCHAR(2000) NULL    ,
    PRIMARY KEY (idRating)
);

ALTER TABLE ratings
    ADD CONSTRAINT UQ_author UNIQUE (author);

CREATE TABLE restaurants
(
    idRestaurant INT           NOT NULL AUTO_INCREMENT,
    name         VARCHAR(30)   NOT NULL,
    address      VARCHAR(100)  NOT NULL,
    postalCode   INT           NOT NULL,
    city         VARCHAR(30)   NOT NULL,
    phone        VARCHAR(25)   NULL    ,
    description  VARCHAR(2000) NULL    ,
    PRIMARY KEY (idRestaurant)
);

ALTER TABLE restaurants
    ADD CONSTRAINT UQ_address_city_postalCode UNIQUE (address, city, postalCode);

ALTER TABLE restaurants
    ADD CONSTRAINT UQ_phone UNIQUE (phone);

ALTER TABLE ratings
    ADD CONSTRAINT FK_restaurants_TO_ratings
        FOREIGN KEY (idRestaurant)
        REFERENCES restaurants (idRestaurant); 
