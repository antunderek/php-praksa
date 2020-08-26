CREATE TABLE tasks (
    id INT NOT NULL AUTO_INCREMENT,
    description VARCHAR (255) NOT NULL,
    due TIMESTAMP NOT NULL,
    complete TINYINT (1) NOT NULL,
    PRIMARY KEY(id)
);

INSERT INTO tasks(description, due, complete) VALUES ('Learn oop', NOW(), 0);
INSERT INTO tasks(description, due, complete) VALUES ('Drink coffee', NOW(), 1);
