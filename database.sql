 CREATE TABLE users(

     userId int not null AUTO_INCREMENT PRIMARY KEY,
     firstName varchar(100),
     lastName varchar(100),
     UserEmail varchar(200) not null ,
     userPassword varchar(200) not null ,
     registerDate datetime


 );

 CREATE TABLE categories(
     categorieId int not null AUTO_INCREMENT PRIMARY KEY,
     categorieName varchar(100) not null
    

 );
INSERT INTO categories (categorieName) VALUES ('Oszd meg és uralkodj');
INSERT INTO categories (categorieName) VALUES ('Visszalépéses keresés');
INSERT INTO categories (categorieName) VALUES ('Mohó módszer');
INSERT INTO categories (categorieName) VALUES ('Dinamikus programozás');
INSERT INTO categories (categorieName) VALUES ('Elágazás és korlátozás');

 CREATE TABLE homepage(
	homepageId int PRIMARY KEY AUTO_INCREMENT,
    homepageName varchar(100) not null,
    homepageDescript varchar(255) not null
);
 CREATE TABLE pictures(
     pictureId int not null AUTO_INCREMENT PRIMARY KEY,
     homepageId int,
	 pictureName varchar(100),
     pictureNine varchar(150),
     FOREIGN KEY (homepageId) REFERENCES homepage(homepageId)

 ); 

 INSERT INTO homepage(homepageName,homepageDescript) VALUES ('fiok','Szeretnél minél több programozási feladatot megoldani?
De nincs még fiókod? 
Akkor csak annyi a dolgod, hogy regisztrálj!');
 INSERT INTO homepage(homepageName,homepageDescript) VALUES ('nyelv_icon','Ezeken a programozási nyelveken oldhatod/írhatod meg a feladatokat:'); 
  INSERT INTO homepage(homepageName,homepageDescript) VALUES ('logo','');
 INSERT INTO homepage (homepageName,homepageDescript) VALUES ('fiok','Kattints ide');
   
INSERT INTO pictures(homepageId,pictureName,pictureNine) VALUES(3,'regisz','icon/regisz.jpg');
INSERT INTO pictures(homepageId,pictureName,pictureNine) VALUES(2,'c++','icon/c++.jpg');
INSERT INTO pictures(homepageId,pictureName,pictureNine) VALUES(2,'c','icon/c.jpg');
INSERT INTO pictures(homepageId,pictureName,pictureNine) VALUES(2,'java','icon/java.jpg');
INSERT INTO pictures(homepageId,pictureName,pictureNine) VALUES(1,'logo','icon/logo.jpg');



 

 