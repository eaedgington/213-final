

SELECT * from gallery;
INSERT INTO gallery 
	VALUES ('JVTA012','Louvre Museum','France');
INSERT INTO gallery 
	VALUES ('GCPSRD3','School of the Arts Institute of Chicago','Illinois');
INSERT INTO gallery 
	VALUES ('AMLCC04','Kunsthaus Zürich','Switzerland');
INSERT INTO gallery 
	VALUES ('CMCWP05','Arts Institute of Chicago','Illinois');
INSERT INTO gallery 
	VALUES ('VVGWS06','Kröller-Müller Museum','Netherlands');
    

SELECT * from artwork;
INSERT INTO artwork
	VALUES('AW012','The Astronomer','1668','Oil Paint','30,000,000','JVTA012','AD022');
INSERT INTO artwork
	VALUES('AW013','Paris Street; Rainy Day','1877','Oil Paint','20,000,000','GCPSRD3','AD023');
INSERT INTO artwork
	VALUES('AW014','Landscape with Cows and Camel','1914','Oil Paint','10,000,000','AMLCC04','AD024');
INSERT INTO artwork
	VALUES('AW015','Clifftop Walk at Pourville','1882','Oil Paint','50,000,000','CMCWP05','AD025');
INSERT INTO artwork
	VALUES('AW016','Willows at Sunset','1888','Oil Paint','40,000,000','VVGWS06','AD026');
    
SELECT * from customer;
INSERT INTO customer 
	VALUE('BT202','VVGWS06','AW016','Britney','Tang','New York','1991-10-01');
INSERT INTO customer 
	VALUE('CV249','AMLCC04','AW014','Cleo','Velez','Oregon','1989-12-12');
INSERT INTO customer 
	VALUE('EC305','GCPSRD3','AW013','Elsie','Christian','Florida','1999-02-11'); 
INSERT INTO customer 
	VALUE('IC109','JVTA012','AW012','Isaak','Croft','Illinois','1994-04-22'); 
INSERT INTO customer 
	VALUE('LC462','CMCWP05','AW015','Luna','Cartwright','New York','1993-07-20');     
    
    
SELECT * from artist;
INSERT INTO artist 
	VALUE('AD022','JVTA012','IC109','Johannes','Vermeer', 'Netherlands', 'Oil on Canvas');   
INSERT INTO artist 
	VALUE('AD023','GCPSRD3','EC305','Gustave','Caillebotte', 'France', 'Oil on Canvas'); 
INSERT INTO artist 
	VALUE('AD024','AMLCC04','CV249','August','Macke', 'Germany', 'Oil on Canvas'); 
INSERT INTO artist 
	VALUE('AD025','CMCWP05','LC462','Claude','Monet', 'France', 'Oil on Canvas');
INSERT INTO artist 
	VALUE('AD026','VVGWS06','BT202','Vincent','van Gogh', 'Netherlands', 'Oil on Canvas');     
    
SELECT * from contacts;
INSERT INTO contacts 
	VALUE('BT202','2124057779');
INSERT INTO contacts 
	VALUE('CV249','9713031603'); 
INSERT INTO contacts 
	VALUE('EC305','3056859476');
INSERT INTO contacts 
	VALUE('IC109','7733538265');
INSERT INTO contacts 
	VALUE('LC462','6075482722');