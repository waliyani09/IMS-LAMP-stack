CREATE TABLE product(
    sku INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    pName VARCHAR(10) NOT NULL,
    ppu DOUBLE(5,2) NOT NULL,
    qoh DOUBLE(5,2) NOT NULL,
    par INT(5) NOT NULL
);

CREATE TABLE service(
    serviceid INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    sName VARCHAR(10) NOT NULL,
    sku1 INT(5) NOT NULL,
    sku2 INT(5) NOT NULL,
    sku3 INT(5) NOT NULL,
    CONSTRAINT sku1 FOREIGN KEY (sku1)
    REFERENCES product(sku),
    CONSTRAINT sku2 FOREIGN KEY (sku2)
    REFERENCES product(sku),
    CONSTRAINT sku3 FOREIGN KEY (sku3)
    REFERENCES product(sku),
    q1 DOUBLE(5,2) NOT NULL,
    q2 DOUBLE(5,2) NOT NULL,
    q3 DOUBLE(5,2) NOT NULL
    
);

CREATE TABLE customer(
    cid INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    serviceid INT(5) NOT NULL,
    CONSTRAINT serviceid FOREIGN KEY (serviceid)
    REFERENCES service(serviceid)
);
CREATE TABLE storeorder(
    orderid INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    soq1 INT(5) NOT NULL,
    soq2 INT(5) NOT NULL,
    soq3 INT(5) NOT NULL,
    soq4 INT(5) NOT NULL,
    soq5 INT(5) NOT NULL,
    soq6 INT(5) NOT NULL,
    soq7 INT(5) NOT NULL,
    soq8 INT(5) NOT NULL,
    soq9 INT(5) NOT NULL,
    soq10 INT(5) NOT NULL    
);
