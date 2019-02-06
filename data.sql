# Dump of table hotels
# ------------------------------------------------------------

LOCK TABLES `hotels` WRITE;
/*!40000 ALTER TABLE `hotels` DISABLE KEYS */;

INSERT INTO `hotels` (`id`, `name`, `description`, `address`, `phone`, `location`, `popular`, `image`, `stars`, `reviews`, `calification`, `lat`, `lng`)
VALUES
	(1,'Sunset Key Guest Cottages','Dicam diceret ut ius, no epicuri dissentiet philosophia vix. Id usu zril tacimates neglegentur.','245 Front Street, Key West, USA','+1 (786) 728-7695',1,1,1,4,350,8.80,'24.561959','-81.813512'),
	(2,'Sanibel Sunset Beach Inn','Dicam diceret ut ius, no epicuri dissentiet philosophia vix. Id usu zril tacimates neglegentur.','3287 West Gulf Drive, Sanibel, USA','+1 (786) 728-7695',2,0,2,2,180,9.70,'26.427509','-82.100664'),
	(3,'Setai','Dicam diceret ut ius, no epicuri dissentiet philosophia vix. Id usu zril tacimates neglegentur.','2001 Collins Avenue, Miami Beach, USA','+1 (786) 728-7695',3,1,3,5,400,9.30,'25.796145','-80.128673');

/*!40000 ALTER TABLE `hotels` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table locations
# ------------------------------------------------------------

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;

INSERT INTO `locations` (`id`, `name`)
VALUES
	(1,'Key West'),
	(2,'Sanibel'),
	(3,'Miami Beach');

/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table room_status
# ------------------------------------------------------------

LOCK TABLES `room_status` WRITE;
/*!40000 ALTER TABLE `room_status` DISABLE KEYS */;

INSERT INTO `room_status` (`id`, `name`, `color`)
VALUES
	(1,'Available','green'),
	(2,'On Request','gold'),
	(3,'Sold Out','red');

/*!40000 ALTER TABLE `room_status` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table rooms
# ------------------------------------------------------------

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;

INSERT INTO `rooms` (`id`, `hotel`, `name`, `status`, `price`, `fee`, `promo`, `offers`, `policy`)
VALUES
	(1,1,'Studio Suite City Vew',1,89.00,20.00,0,'Meal Plan: Breakfast included','Penalty of 1 booked night(s) when cancelling after Nov 25, 2016 04:00 PM'),
	(2,1,'Studio Suite Courtyard',2,95.00,15.00,0,'Meal Plan: Breakfast included','Penalty of 1 booked night(s) when cancelling after Nov 25, 2016 04:00 PM'),
	(3,1,'Studio Suite Partial Ocean View',1,250.00,5.00,0,'Meal Plan: Breakfast included','Penalty of 1 booked night(s) when cancelling after Nov 25, 2016 04:00 PM'),
	(4,1,'Junior Suite',3,280.00,50.00,0,'Meal Plan: Breakfast included','Penalty of 1 booked night(s) when cancelling after Nov 25, 2016 04:00 PM'),
	(5,1,'1 Bedroom Suite City Vew',1,120.00,5.00,0,'Meal Plan: Breakfast included','Penalty of 1 booked night(s) when cancelling after Nov 25, 2016 04:00 PM'),
	(6,1,'1 Bedroom Suite Courtyard View',2,150.00,0.00,0,'Meal Plan: Breakfast included','Penalty of 1 booked night(s) when cancelling after Nov 25, 2016 04:00 PM'),
	(7,1,'BI-Level Suite',1,180.00,20.00,0,'Meal Plan: Breakfast included','Penalty of 1 booked night(s) when cancelling after Nov 25, 2016 04:00 PM'),
	(8,1,'1 Bedroom Suite Ocean View',2,200.00,25.00,1,'Meal Plan: Breakfast included','Penalty of 1 booked night(s) when cancelling after Nov 25, 2016 04:00 PM'),
	(9,1,'2 Bedroom City & Ocean View Suite',1,250.00,3.00,1,'Meal Plan: Breakfast included','Penalty of 1 booked night(s) when cancelling after Nov 25, 2016 04:00 PM'),
	(10,1,'2 Bedroom Ocean View Suite',3,320.00,40.00,1,'Meal Plan: Breakfast included','Penalty of 1 booked night(s) when cancelling after Nov 25, 2016 04:00 PM'),
	(11,2,'Studio Suite City Vew',1,89.00,20.00,0,'Meal Plan: Breakfast included','Penalty of 1 booked night(s) when cancelling after Nov 25, 2016 04:00 PM'),
	(12,2,'Studio Suite Courtyard',2,95.00,15.00,0,'Meal Plan: Breakfast included','Penalty of 1 booked night(s) when cancelling after Nov 25, 2016 04:00 PM'),
	(13,2,'Studio Suite Partial Ocean View',1,250.00,5.00,0,'Meal Plan: Breakfast included','Penalty of 1 booked night(s) when cancelling after Nov 25, 2016 04:00 PM'),
	(14,2,'Junior Suite',3,280.00,50.00,0,'Meal Plan: Breakfast included','Penalty of 1 booked night(s) when cancelling after Nov 25, 2016 04:00 PM'),
	(15,2,'1 Bedroom Suite City Vew',1,120.00,5.00,0,'Meal Plan: Breakfast included','Penalty of 1 booked night(s) when cancelling after Nov 25, 2016 04:00 PM'),
	(16,2,'1 Bedroom Suite Courtyard View',2,150.00,0.00,0,'Meal Plan: Breakfast included','Penalty of 1 booked night(s) when cancelling after Nov 25, 2016 04:00 PM'),
	(17,2,'BI-Level Suite',1,180.00,20.00,0,'Meal Plan: Breakfast included','Penalty of 1 booked night(s) when cancelling after Nov 25, 2016 04:00 PM'),
	(18,2,'1 Bedroom Suite Ocean View',2,200.00,25.00,1,'Meal Plan: Breakfast included','Penalty of 1 booked night(s) when cancelling after Nov 25, 2016 04:00 PM'),
	(19,2,'2 Bedroom City & Ocean View Suite',2,250.00,3.00,1,'Meal Plan: Breakfast included','Penalty of 1 booked night(s) when cancelling after Nov 25, 2016 04:00 PM'),
	(20,2,'2 Bedroom Ocean View Suite',3,320.00,40.00,1,'Meal Plan: Breakfast included','Penalty of 1 booked night(s) when cancelling after Nov 25, 2016 04:00 PM'),
	(21,3,'Studio Suite City Vew',1,89.00,20.00,0,'Meal Plan: Breakfast included','Penalty of 1 booked night(s) when cancelling after Nov 25, 2016 04:00 PM'),
	(22,3,'Studio Suite Courtyard',2,95.00,15.00,0,'Meal Plan: Breakfast included','Penalty of 1 booked night(s) when cancelling after Nov 25, 2016 04:00 PM'),
	(23,3,'Studio Suite Partial Ocean View',1,250.00,5.00,0,'Meal Plan: Breakfast included','Penalty of 1 booked night(s) when cancelling after Nov 25, 2016 04:00 PM'),
	(24,3,'Junior Suite',3,280.00,50.00,0,'Meal Plan: Breakfast included','Penalty of 1 booked night(s) when cancelling after Nov 25, 2016 04:00 PM'),
	(25,3,'1 Bedroom Suite City Vew',1,120.00,5.00,0,'Meal Plan: Breakfast included','Penalty of 1 booked night(s) when cancelling after Nov 25, 2016 04:00 PM'),
	(26,3,'1 Bedroom Suite Courtyard View',2,150.00,0.00,0,'Meal Plan: Breakfast included','Penalty of 1 booked night(s) when cancelling after Nov 25, 2016 04:00 PM'),
	(27,3,'BI-Level Suite',1,180.00,20.00,0,'Meal Plan: Breakfast included','Penalty of 1 booked night(s) when cancelling after Nov 25, 2016 04:00 PM'),
	(28,3,'1 Bedroom Suite Ocean View',2,200.00,25.00,1,'Meal Plan: Breakfast included','Penalty of 1 booked night(s) when cancelling after Nov 25, 2016 04:00 PM'),
	(29,3,'2 Bedroom City & Ocean View Suite',2,250.00,3.00,1,'Meal Plan: Breakfast included','Penalty of 1 booked night(s) when cancelling after Nov 25, 2016 04:00 PM'),
	(30,3,'2 Bedroom Ocean View Suite',3,320.00,40.00,1,'Meal Plan: Breakfast included','Penalty of 1 booked night(s) when cancelling after Nov 25, 2016 04:00 PM');

/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
UNLOCK TABLES;