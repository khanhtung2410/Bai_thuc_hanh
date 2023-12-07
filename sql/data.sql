CREATE TABLE flight(
    id INT AUTO_INCREMENT,
    origin varchar(100) NOT NULL,
    destination varchar(100) NOT null,
    duration INT,
    PRIMARY KEY (id)
);
INSERT INTO flight(origin,destination,duration) VALUES ('ha noi','hai phong',415);
INSERT INTO flight(origin,destination,duration) VALUES ('da nana','hcm',455);
INSERT INTO flight(origin,destination,duration) VALUES ('nghe an','quang ninh',415);
INSERT INTO flight(origin,destination,duration) VALUES ('ha noi','hcm',768);