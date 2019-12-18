USE injection_demo;

DROP TABLE IF EXISTS users;
CREATE TABLE users (
    id          INT             NOT NULL,
    username    VARCHAR(32)     NOT NULL,
    password    VARCHAR(128)    NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO `users` VALUES (1,'Alice','letmein'),
 (2,'Bob','secret');
