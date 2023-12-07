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
CREATE TABLE passenger(
 id int AUTO_INCREMENT,
    name varchar(50) not null,
    flight_id int not null,
    FOREIGN KEY(flight_id) REFERENCES flight(id)
);
INSERT INTO passenger(name,flight_id) values ('nguyen hoang long',1);
INSERT INTO passenger(name,flight_id) values ('nguyen long',1);
INSERT INTO passenger(name,flight_id) values ('nguyen hoang long',2);
INSERT INTO passenger(name,flight_id) values ('nguyen hoang',3);
DELETE FROM flight WHERE desination ='hcm';
UPDATE flight SET duration = 400 WHERE origin == 'ha noi' AND destination = 'hai phong';