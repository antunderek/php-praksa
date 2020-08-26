create table users (
    id INT auto_increment NOT NULL,
    username VARCHAR(255) NOT NULL,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    password VARCHAR(255) NOT NULL,
    created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,      
    last_active TIMESTAMP, 
    PRIMARY KEY(id)
);


INSERT INTO users(username, first_name, last_name, password) VALUES ('alex', 'Alex', 'Garrett', '123');

INSERT INTO users(username, password, last_active) VALUES ('dale', '456', NOW());
