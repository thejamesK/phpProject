# phpProject
1.TWORZYMY BAZE DANYCH USERÓW <br />
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

2.TWORZYMY BAZE DANYCH USERÓW <br />
CREATE TABLE repairs (
id int(11) NOT NULL auto_increment,
name varchar(100) NOT NULL,
qty int(5) NOT NULL,
repair varchar(500) NOT NULL,
users_id int(11) NOT NULL,
PRIMARY KEY (id),
CONSTRAINT FK_repair_1
FOREIGN KEY (users_id) REFERENCES users(id)
ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB;

3.KOPIUJEMY FOLDER PHPPROJECT DO XAMPP/HTDOCS <br />

4.WPISUJEMY W PRZEGLADARKE LINK localhost/phpproject/ <br />

