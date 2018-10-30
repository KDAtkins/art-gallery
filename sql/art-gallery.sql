DROP TABLE IF EXISTS image;

CREATE TABLE image (
	imageid INT(16) NOT NULL,
	imageCategory CHAR(20) NOT NULL,
	imageName CHAR(36) NOT NULL,
	image longblob NOT NULL,
	PRIMARY KEY (imageid)
);