In order for this to work the user must create a Mysqli database that is either called "project" or
go into the connection.php and change the connection to the name of your database.

Then you must create a table called "product" with the following rows:
Brand - varchar2 50length
Product - varchar2 50length
Size - varchar2 50length
Image - varchar2 50length


With the following entries ( entries can be anything but use the following in order for it to work with the images supplier)

ID	Brand 		Product 	Size	 Image
1	Sony		PS4		500GB	 PS4.png
2	Sony		PS4		250GB	 PS4.png
3	Microsoft	Xbox1		250GB	 Xbox1.png
4	Microsoft	Xbox360		300GB	 Xbox360.png
5	Nintendo	Switch		250GB	 Switch.png
6	Nintendo	NDS		50GB	 Nds.png


This is just the Advnace search mechanism working with example Adding more information / change images or topic of the search can be
easily changed. 


Also has the mechanic of seatching via search bar by entering Attributes that can be searched by ie Name Brand Size etc etc 

CREATE TABLE `project`.`product` ( `Brand` VARCHAR(50) NOT NULL , `Product` VARCHAR(50) NOT NULL , `Size` VARCHAR(50) NOT NULL , `Image` VARCHAR(50) NOT NULL ) ENGINE = InnoDB;
Expand Requery Edit Explain Profiling Bookmark Database : project Queried time : 9:38:4


INSERT INTO `product` (`Brand`, `Product`, `Size`, `Image`) VALUES ('Sony', 'PS4', '500GB', '250GB'), ('Sony', 'PS4', '250GB', '250GB');
INSERT INTO `product` (`Brand`, `Product`, `Size`, `Image`) VALUES ('Microsoft', 'Xbox1', '250GB', 'Xbox1.png'), ('Microsoft', 'Xbox360', '300GB', 'Xbox360.png');
INSERT INTO `product` (`Brand`, `Product`, `Size`, `Image`) VALUES ('Nintendo', 'Switch', '250GB', 'Switch.png'), ('Nintendo', 'NDS', '50GB', 'Nds.png');


