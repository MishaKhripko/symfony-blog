CREATE DATABASE symfony;
use symfony;

#Users-Post	OneToMany	|	
#Users-Comments	OneToMany	|	
CREATE TABLE users(
	login varchar(8) NOT NULL, #логін користувача (ключ)
	pswd varchar(8) NOT NULL, #пароль користувача
	rangUser enum('user','admin'),  #визначення статуса користувача
	nameUser varchar(16) NOT NULL, #імя користувача
	PRIMARY KEY (login)
);

#Post-Users	ManyToOne	|	Unidirectional	5.1
#Post-Comments	OneToMany	|	
CREATE TABLE post(
	idPost int NOT NULL, #(ключ)
	title varchar(64) NOT NULL, #тітл поста
	body text NOT NULL, #зміст посту
	login varchar(8) NOT NULL, #автор публікації
	dateCreated datetime NOT NULL, #дата публікації
	PRIMARY KEY (idPost),
	FOREIGN KEY (login) REFERENCES users(login)# #пост має звязок з користувачем
);

#Comments-Users	OneToOne	|	
#Comments-Post	OneToOne	|	
CREATE TABLE comments(
	idComment int NOT NULL, #(ключ)
	text text NOT NULL, #зміст коментаря
	login varchar(8) NOT NULL, #автор коментаря
	dateCreated datetime NOT NULL, #дата публікації
	idPost int NOT NULL, #пост коментаря
	PRIMARY KEY (idComment), #
	FOREIGN KEY (login) REFERENCES users(login), #пост має звязок з користувачем, що його відправив.
	FOREIGN KEY (idPost) REFERENCES post(idPost) #пост має звязок з постом, до якого він прикріплений.
);
SELECT CONCAT('ALTER TABLE `', t.`TABLE_SCHEMA` ,  '`.`', t.`TABLE_NAME` ,  '` CONVERT TO CHARACTER SET utf8 COLLATE cp1251;' ) AS sqlcode 
FROM  `information_schema`.`TABLES` t 
WHERE 1 AND t.`TABLE_SCHEMA` =  'university' 
ORDER BY 1 LIMIT 0 , 90;

CREATE TABLE post (id INT UNSIGNED AUTO_INCREMENT NOT NULL, userlogin VARCHAR(8) DEFAULT NULL, title VARCHAR(64) NOT NULL, body LONGTEXT NOT NULL, created DATETIME NOT NULL, INDEX IDX_5A8A6C8D8DACF7C2 (userlogin), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;
CREATE TABLE comment (id INT UNSIGNED AUTO_INCREMENT NOT NULL, userlogin VARCHAR(8) DEFAULT NULL, blogid INT UNSIGNED DEFAULT NULL, thiscomment VARCHAR(256) NOT NULL, created DATETIME NOT NULL, INDEX IDX_9474526C8DACF7C2 (userlogin), INDEX IDX_9474526C7801DAE1 (blogid), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;
CREATE TABLE user (login VARCHAR(8) NOT NULL, pswd VARCHAR(8) NOT NULL, name_user VARCHAR(16) NOT NULL, rang_user TINYINT(1) DEFAULT '0' NOT NULL, PRIMARY KEY(login)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;
ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8D8DACF7C2 FOREIGN KEY (userlogin) REFERENCES user (login);
ALTER TABLE comment ADD CONSTRAINT FK_9474526C8DACF7C2 FOREIGN KEY (userlogin) REFERENCES user (login);
ALTER TABLE comment ADD CONSTRAINT FK_9474526C7801DAE1 FOREIGN KEY (blogid) REFERENCES post (id);
