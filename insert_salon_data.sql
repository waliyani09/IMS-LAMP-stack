--product data to be added
--CREATE TABLE product(
--    sku INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
--    pName VARCHAR(10) NOT NULL,
--    ppu DOUBLE(5,2) NOT NULL,
--    qoh DOUBLE(5,2) NOT NULL,
--    par INT(5) NOT NULL
--);
INSERT INTO product (pName,ppu,qoh,par) VALUES ('thread', 1.5, 25, 10);
INSERT INTO product (pName,ppu,qoh,par) VALUES ('chocolate wax', 2.5, 15, 5);
INSERT INTO product (pName,ppu,qoh,par) VALUES ('facial bleach', 3, 10, 5);
INSERT INTO product (pName,ppu,qoh,par) VALUES ('massaging cream', 5, 15, 5);
INSERT INTO product (pName,ppu,qoh,par) VALUES ('waxing strips', 0.5, 20, 10);
INSERT INTO product (pName,ppu,qoh,par) VALUES ('baby powder', 1, 6, 3);
INSERT INTO product (pName,ppu,qoh,par) VALUES ('aloe vera gel', 3, 20, 10);
INSERT INTO product (pName,ppu,qoh,par) VALUES ('eyelashes', 3, 50, 30);
INSERT INTO product (pName,ppu,qoh,par) VALUES ('eyelashes glue', 4, 8, 5);
INSERT INTO product (pName,ppu,qoh,par) VALUES ('receipt paper', 1.5, 4, 2);
INSERT INTO product (pName,ppu,qoh,par) VALUES ('nothing', 0, 0, 0);


--CREATE TABLE service(
--    serviceid INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
--    sName VARCHAR(10) NOT NULL,
--    sku1 INT(5) NOT NULL,
--    sku2 INT(5) NOT NULL,
--    sku3 INT(5) NOT NULL,
--    CONSTRAINT sku1 FOREIGN KEY (sku1) REFERENCES product(sku),
--    CONSTRAINT sku2 FOREIGN KEY (sku2) REFERENCES product(sku),
--    CONSTRAINT sku3 FOREIGN KEY (sku3)   REFERENCES product(sku),
--    q1 DOUBLE(5,2) NOT NULL,
--    q2 DOUBLE(5,2) NOT NULL,
--    q3 DOUBLE(5,2) NOT NULL
--);
INSERT INTO service (sName,sku1,sku2,sku3,q1,q2,q3) VALUES ('eyebrow threading',1,7,11,0.5,0.5,0);
INSERT INTO service (sName,sku1,sku2,sku3,q1,q2,q3) VALUES ('eyebrow wax',2,5,7,0.5,0.5,0.5);
INSERT INTO service (sName,sku1,sku2,sku3,q1,q2,q3) VALUES ('facial',3,4,11,0.5,0.5,0.5);
INSERT INTO service (sName,sku1,sku2,sku3,q1,q2,q3) VALUES ('eyelash extension',7,8,9,0.5,0.5,0.5);
INSERT INTO service (sName,sku1,sku2,sku3,q1,q2,q3) VALUES ('print receipt',10,11,11,0.5,0.5,0.5);



