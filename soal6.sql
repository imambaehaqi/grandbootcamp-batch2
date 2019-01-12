-- 1. Create Database
CREATE DATABASE batch2;
	USE batch2;

-- 2. Create tabel categories
CREATE TABLE categories (
	id INT PRIMARY KEY AUTO_INCREMENT,name VARCHAR(100)
);

-- 3. Mengisi record ke table categories
INSERT INTO `categories`
	(`id`, `name`)
	VALUES(NULL, 'nurhadi'),(NULL, 'aldo'),(NULL, 'dodi');

-- 4. Create table hobbies
CREATE TABLE hobbies(
    id INT PRIMARY KEY AUTO_INCREMENT, person_id INT, name VARCHAR(100)
);

-- 5. Mengisi record ke table hobbies
INSERT INTO `hobbies`
(`id`, `person_id`, `name`)
VALUES (NULL, '1', 'Bird watching'),(NULL, '1', 'Martial arts'),(NULL, '2', 'Hiking'),(NULL, '1', 'Archery'),(NULL, '2', 'Beekeeping'),(NULL, '3', 'Book restoration');

-- 6. Create relasi sesuai pada soal
SELECT hobbies.person_id, categories.name, GROUP_CONCAT(' ', hobbies.name) as person_hobbies
FROM hobbies
INNER JOIN categories
ON categories.id = hobbies.person_id
GROUP BY hobbies.person_id;
