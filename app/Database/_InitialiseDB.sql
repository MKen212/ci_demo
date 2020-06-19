-- SQL Commands for creating MariaDB tables


-- News Table
CREATE TABLE news (
  id int(11) NOT NULL AUTO_INCREMENT,
  title varchar(128) NOT NULL,
  slug varchar(128) NOT NULL,
  body text NOT NULL,
  PRIMARY KEY (id),
  KEY slug (slug)
);

-- Users Table
CREATE TABLE users (
  ID int(11) NOT NULL AUTO_INCREMENT,
  FirstName varchar(50),
  LastName varchar(50),
  Email varchar(50),
  Password varchar(255),
  CreatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
  UpdatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
  PRIMARY KEY (ID)
);
