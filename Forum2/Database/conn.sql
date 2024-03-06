-- Database name : forum

CREATE TABLE categories (
   category_id INT AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(225),
    category_description VARCHAR(225),
    category_datetime TIMESTAMP
);


CREATE TABLE comments (
    comment_id INT AUTO_INCREMENT PRIMARY KEY,
    c_name VARCHAR(30),
    comment_content TEXT,
    thread_id INT,
    comment_time TIMESTAMP
);


CREATE TABLE threads (
    thread_id INT AUTO_INCREMENT PRIMARY KEY,
    thread_name VARCHAR(30),
   thread_title VARCHAR(225),
   thread_desc TEXT,
    thread_cat_id INT,
    timestamp TIMESTAMP
);