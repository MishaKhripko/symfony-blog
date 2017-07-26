CREATE DATABASE symfony;
use symfony;

CREATE TABLE users(
	login varchar(8) NOT NULL, #логін користувача (ключ)
    pswd varchar(8) NOT NULL, #пароль користувача
    rangUser enum('user','admin'),  #визначення статуса користувача
    nameUser varchar(16) NOT NULL, #ім'я користувача
    PRIMARY KEY (login)
);
CREATE TABLE post(
	idPost int NOT NULL, #(ключ)
	title varchar(64) NOT NULL, #тітл поста
    body text NOT NULL, #зміст посту
    author varchar(32) NOT NULL, #посилання на автора
    login varchar(8) NOT NULL, #автор публікації
    dateCreated datetime NOT NULL, #дата публікації
    PRIMARY KEY (idPost),
    FOREIGN KEY (login) REFERENCES users(login) #пост має зв'язок з користувачем
);
CREATE TABLE comments(
	idComment int NOT NULL, #(ключ)
    itComment text NOT NULL, #зміст коментаря
    login varchar(8) NOT NULL, #автор коментаря
    dateCreated datetime NOT NULL, #дата публікації
    idPost int NOT NULL, #пост коментаря
    PRIMARY KEY (idComment), #
    FOREIGN KEY (login) REFERENCES users(login), #пост має зв'язок з користувачем, що його відправив.
    FOREIGN KEY (idPost) REFERENCES post(idPost) #пост має зв'язок з постом, до якого він прикріплений.
);
SELECT CONCAT('ALTER TABLE `', t.`TABLE_SCHEMA` ,  '`.`', t.`TABLE_NAME` ,  '` CONVERT TO CHARACTER SET utf8 COLLATE cp1251;' ) AS sqlcode 
FROM  `information_schema`.`TABLES` t 
WHERE 1 AND t.`TABLE_SCHEMA` =  'university' 
ORDER BY 1 LIMIT 0 , 90;