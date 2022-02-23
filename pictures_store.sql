DROP DATABASE IF EXISTS pictures_store;
CREATE DATABASE pictures_store;
use pictures_store;
DROP table if exists pictures;
create table pictures(
    id Serial PRIMARY KEY,
    img_name VARCHAR(60),
    size INT,
    src VARCHAR(200),
    view_count INT DEFAULT 0
);

INSERT INTO pictures (img_name,size,src) VALUES
    ('img1.jpeg',43,'./img/img1.jpeg'),
    ('img2.jpeg',6,'./img/img2.jpeg'),
    ('img3.jpeg',10,'./img/img3.jpeg'),
    ('img4.jpeg',6,'./img/img4.jpeg'),
    ('img5.jpeg',6,'./img/img5.jpeg'),
    ('img6.jpeg',9,'./img/img6.jpeg');
