-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 15, 2012 at 07:29 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database:  propertymarket 
--

-- --------------------------------------------------------

--
-- Table structure for table  allsite 
--

CREATE TABLE    allsite  (
   sr_no  int(10) NOT NULL  ,
   title  character(50) NOT NULL,
   address  character(200) NOT NULL,
   area  character(50) NOT NULL,
   image  character(200) NOT NULL,
   city  character(20) NOT NULL,
   min_rate  float NOT NULL,
   max_rate  float NOT NULL,
   bedroom  smallint NOT NULL,
  PRIMARY KEY ( sr_no )
);

--
-- Dumping data for table  allsite 
--


-- --------------------------------------------------------

--
-- Table structure for table  city_master 
--

CREATE TABLE    city_master  (
   city_code  smallint NOT NULL  ,
   city_name  character(25) NOT NULL,
  PRIMARY KEY ( city_code )
) ;

--
-- Dumping data for table  city_master 
--

INSERT INTO  city_master  ( city_code ,  city_name ) VALUES
(10, 'Bikaner'),
(2, 'Kota'),
(3, 'Jodhpur'),
(4, 'Jaipur'),
(5, 'Ajmer'),
(6, 'Udaipur'),
(7, 'Bhilwara'),
(8, 'Ganganagar'),
(9, 'Bharatpur'),
(1, 'Ahmedabad'),
(11, 'Surat'),
(12, 'Vadodara'),
(13, 'Rajkot'),
(14, 'Bhavnagar'),
(15, 'Jamnagar'),
(16, 'Junagadh'),
(17, 'Gandhinagar'),
(18, 'Nadiad'),
(19, 'Morvi'),
(20, 'Surendranagar'),
(21, 'Gandhidham'),
(22, 'Veraval'),
(23, 'Navsari'),
(24, 'Bharuch'),
(25, 'Anand'),
(26, 'Porbandar'),
(27, 'Godhra'),
(28, 'Botad'),
(29, 'Mumbai'),
(30, 'Pune'),
(31, 'Nagpur'),
(32, 'Thane'),
(33, 'Nashik'),
(34, 'Solapur'),
(35, 'Amravathi'),
(36, 'Kolhapur'),
(37, 'Ratnagiri'),
(38, 'Mahabaleshwar');

-- --------------------------------------------------------

--
-- Table structure for table  featureproject 
--

CREATE TABLE    featureproject  (
   fp_id  smallint NOT NULL  ,
   Trans_type  smallint NOT NULL,
   comp  character(25) NOT NULL,
   saddress  character(500) NOT NULL,
   address  character(1000) NOT NULL,
   prop_code  smallint NOT NULL,
   city_code  smallint NOT NULL,
   min_price  smallint NOT NULL,
   max_price  smallint NOT NULL,
   bedroom  smallint NOT NULL,
   min_area  smallint NOT NULL,
   max_price_sq  smallint NOT NULL,
   landmark  smallint NOT NULL,
   status  character(15) NOT NULL,
  PRIMARY KEY ( fp_id )
) ;

--
-- Dumping data for table  featureproject 
--

INSERT INTO  featureproject  ( fp_id ,  Trans_type ,  comp ,  saddress ,  address ,  prop_code ,  city_code ,  min_price ,  max_price ,  bedroom ,  min_area ,  max_price_sq ,  landmark ,  status ) VALUES
(1, 2, 'khh', 'k', 'hdjfhdjf', 2, 10, 15, 2000000, 3, 1000, 2000, 0, 'approved'),
(2, 1, 'cccc', 'ddddd', 'e', 1, 20, 1500000, 6000000, 2, 4, 500, 1, 'pendding'),
(3, 2, 'fffff', 'ggggggg', 'l', 2, 10, 4000000, 30000000, 4, 1, 2, 1, 'approved'),
(4, 2, 'j', 'k', 'p', 2, 1, 1500000, 2000000, 3, 1000, 2000, 1, 'pendding'),
(5, 1, '2181678777', 'w', 'o', 3, 10, 2000000, 3000000, 0, 0, 1, 0, 'pendding'),
(6, 1, 'rohit', 'gh', 'jk', 10, 2, 1000000, 1500000, 3, 1233, 4555, 1, 'pendding'),
(7, 1, 'r', 'f', 's', 3, 2, 1500000, 1500000, 3, 0, 55, 1, 'pendding'),
(14, 0, 'rama', 'rishab travels', 'raja', 7, 5, 20000, 20000, 2, 1500, 0, 3, 'pendding'),
(18, 1, 'raja', 'rishabh', 'yyyyy', 3, 3, 1500000, 7500000, 2, 50000, 12, 4, ''),
(13, 0, 'raja', 'raja enterprise', 'rishabhdeo', 5, 4, 5000, 50000, 3, 2000, 0, 1, 'pendding'),
(15, 0, 'kanti', 'udiyapol', 'pathar gali', 10, 6, 10, 10, 1, 25, 0, 1, 'approved'),
(16, 0, 'khh', 'k', 'hdjfhdjf', 2, 10, 15, 2000000, 3, 1000, 0, 0, 'approved');

-- --------------------------------------------------------

--
-- Table structure for table  postrequirment 
--

CREATE TABLE    postrequirment  (
   post_id  integer NOT NULL  ,
   reg_id  integer NOT NULL,
   type  character(25) NOT NULL,
   prop_code  integer NOT NULL,
   city_code  integer NOT NULL,
   min_budget  integer NOT NULL,
   max_budget  integer NOT NULL,
  PRIMARY KEY ( post_id )
)  ;

--
-- Dumping data for table  postrequirment 
--

INSERT INTO  postrequirment  ( post_id ,  reg_id ,  type ,  prop_code ,  city_code ,  min_budget ,  max_budget ) VALUES
(1, 0, 'Buy', 0, 2, 0, 0),
(2, 0, 'Buy', 0, 2, 2000000, 6000000),
(3, 0, 'Buy', 0, 2, 2000000, 6000000),
(4, 0, 'Buy', 0, 2, 200000000, 200000000),
(5, 0, 'Buy', 0, 2, 200000000, 200000000),
(6, 0, 'Buy', 0, 2, 2000000, 6000000),
(7, 0, 'Buy', 0, 2, 200000000, 200000000),
(8, 0, 'Buy', 0, 2, 2000000, 5000000),
(9, 0, 'Buy', 0, 2, 2000000, 3000000),
(10, 0, 'Buy', 0, 2, 2000000, 3000000),
(11, 0, 'Buy', 0, 3, 2000000, 4000000),
(12, 0, 'Buy', 0, 2, 2000000, 4000000),
(13, 0, 'Buy', 0, 3, 1000000, 5000000),
(14, 0, 'Buy', 0, 3, 1000000, 4000000),
(15, 0, 'Rent', 0, 1, 200000000, 200000000),
(16, 0, 'Buy', 0, 1, 1000000, 5000000),
(17, 0, 'Buy', 0, 1, 1000000, 10000000),
(18, 0, 'Buy', 0, 1, 1000000, 50000000),
(19, 0, 'Buy', 0, 1, 1000000, 100000000),
(20, 0, 'Buy', 0, 2, 1000000, 5000000),
(21, 0, 'Buy', 0, 2, 1000000, 6000000),
(22, 0, 'Buy', 0, 2, 1000000, 6000000),
(23, 0, 'Buy', 0, 12, 1000000, 4000000),
(24, 26, 'Rent', 1, 13, 1500000, 5000000),
(25, 1, 'Buy', 2, 1, 1500000, 3000000),
(26, 0, 'Buy', 0, 1, 0, 30000000),
(27, 0, 'Buy', 0, 1, 0, 30000000),
(28, 0, 'Buy', 0, 1, 0, 50000000),
(29, 0, 'Buy', 0, 1, 0, 5000000),
(30, 0, 'Rent', 0, 1, 0, 200000000),
(31, 0, 'Buy', 0, 1, 0, 5000000),
(32, 0, 'Buy', 0, 1, 0, 7500000),
(33, 0, 'Buy', 0, 1, 0, 10000000),
(34, 0, 'Buy', 0, 1, 0, 200000000),
(35, 0, 'Buy', 0, 1, 0, 200000000),
(36, 0, 'Buy', 0, 1, 0, 200000000),
(37, 0, 'Buy', 0, 1, 0, 200000000),
(38, 0, 'Buy', 0, 1, 0, 200000000),
(39, 0, 'Buy', 0, 1, 0, 200000000),
(40, 0, 'Buy', 0, 1, 0, 200000000),
(41, 0, 'Rent', 0, 1, 0, 200000000),
(42, 0, 'Rent', 0, 1, 0, 200000000),
(43, 0, 'Buy', 0, 1, 0, 200000000),
(44, 0, 'Rent', 0, 1, 0, 200000000),
(45, 0, 'Rent', 0, 1, 0, 200000000),
(46, 0, 'Buy', 0, 1, 0, 200000000),
(47, 0, 'Buy', 0, 1, 0, 200000000),
(48, 0, 'Rent', 0, 1, 0, 200000000),
(49, 0, 'Buy', 0, 1, 0, 200000000),
(50, 0, 'Buy', 0, 1, 0, 200000000),
(51, 0, 'Buy', 0, 1, 0, 200000000),
(52, 0, 'Buy', 0, 1, 0, 200000000),
(53, 0, 'Buy', 0, 1, 0, 200000000),
(54, 0, 'Buy', 0, 1, 0, 200000000),
(55, 0, 'Rent', 0, 1, 0, 200000000),
(56, 0, 'Buy', 0, 1, 0, 200000000),
(57, 0, 'Buy', 0, 1, 0, 200000000),
(58, 0, 'Buy', 0, 1, 0, 200000000),
(59, 0, 'Buy', 0, 1, 0, 200000000),
(60, 0, 'Buy', 0, 1, 0, 200000000),
(61, 0, 'Buy', 0, 1, 0, 200000000),
(62, 0, 'Buy', 0, 1, 0, 200000000),
(63, 0, 'Buy', 0, 1, 0, 1000000),
(64, 0, 'Buy', 0, 1, 0, 0),
(65, 27, 'Rent', 0, 1, 200000000, 200000000);

-- --------------------------------------------------------

--
-- Table structure for table  propertygallery 
--

CREATE TABLE    propertygallery  (
   id  smallint NOT NULL  ,
   img  character(100) NOT NULL,
   Description  character(25) NOT NULL,
   Title  character(25) NOT NULL,
   Paid  numeric(1,0) NOT NULL  '0',
   StartDate  timestamp NOT NULL  CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
   Url  character(100) NOT NULL,
   EndDate  timestamp NOT NULL  '0000-00-00 00:00:00',
  PRIMARY KEY ( id )
);

--
-- Dumping data for table  propertygallery 
--

INSERT INTO  propertygallery  ( id ,  img ,  Description ,  Title ,  Paid ,  StartDate ,  Url ,  EndDate ) VALUES
(1, '1.png', 'Sector-37C,Gurgaon', 'Imperia Strucures', 1, '2012-11-03 14:34:31', 'http://www.yahoo.com', '0000-00-00 00:00:00'),
(74, 'resized_ANKIT.jpg ', 'rohit.vanavat@gmail.', 'rohit', 1, '2012-11-20 15:06:34', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table  property_for_salling 
--

CREATE TABLE    property_for_salling  (
   sr_no  bigsmallint NOT NULL  ,
   name  character(30) NOT NULL,
   profile  character(10) NOT NULL,
   company_name  character(30)  NULL,
   company_address  character(50)  NULL,
   country  character(20) NOT NULL,
   city  character(20) NOT NULL,
   url  character(30) NOT NULL,
   mobile_no  character(15) NOT NULL,
   landline_no  character(15) NOT NULL,
   email  character(30) NOT NULL,
   listing_type  character(10)  NULL,
   transaction_type  character(10)  NULL,
   property_type  character(10)  NULL,
   new_or_resale_property  character(10)  NULL,
   property_city  character(20)  NULL,
   area  character(20)  NULL,
   total_price  character(20)  NULL,
   bedroom  character(10)  NULL,
   floor_no  character(10)  NULL,
   Property_description  character(200)  NULL,
   bathroom  character(10)  NULL,
   total_floor_in_building  character(10)  NULL,
   time_to_possession  character(30) NOT NULL,
   age_of_construction  character(10)  NULL,
   furnished  character(10)  NULL,
   facing  character(10)  NULL,
   ownership_type  character(10)  NULL,
   aminities  character(50)  NULL,
   near_landmark  character(50)  NULL,
   property_image  character(100)  NULL,
  PRIMARY KEY ( sr_no )
)        22 ;

--
-- Dumping data for table  property_for_salling 
--

INSERT INTO  property_for_salling  ( sr_no ,  name ,  profile ,  company_name ,  company_address ,  country ,  city ,  url ,  mobile_no ,  landline_no ,  email ,  listing_type ,  transaction_type ,  property_type ,  new_or_resale_property ,  property_city ,  area ,  total_price ,  bedroom ,  floor_no ,  Property_description ,  bathroom ,  total_floor_in_building ,  time_to_possession ,  age_of_construction ,  furnished ,  facing ,  ownership_type ,  aminities ,  near_landmark ,  property_image ) VALUES
(1, '2', 'ramakant', '', '', '91|1', 'S24', '''.''', '654641652', '656561611', 'fgndgngnghdghmghdmhgmghm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'ashopk', ' Agent', '', '', '44|6', 'S45', '', '3146451', '331311', 'hvhbbjb ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'thfgth', ' Agent', NULL, NULL, '1|28', 'S37', '', '52342', '2402402', 'fgbf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'hthgdf', ' Individua', NULL, NULL, '375|32', 'S45', '', '6534', '4346', '345345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'f', 'Individual', NULL, NULL, '994|27', 'S35', '', '52452', '5245245', '542354', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'ss', 'Individual', NULL, NULL, '43|26', 'S38', '', '365433', '545345', '3453453', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'hh', ' Agent', NULL, NULL, '684|18', 'S45', '', '4242', '54545', '5445', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'gg', 'Individual', NULL, NULL, '994|27', 'S38', '', '5325', '545', '545', 'fhfh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'yy', ' Agent', NULL, NULL, '1|28', 'S37', '', '2554', '545', '4545', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'ii', 'Builder', NULL, NULL, '973|29', 'S103', '', '3', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'hyjfg', ' Agent', NULL, NULL, '91|1', 'S356', '', '3232', '2', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'qq', 'Builder', NULL, NULL, '43|26', 'S37', '', '544534', '345454', '3453', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'ooo', ' Agent', NULL, NULL, '91|1', 'S318', '', '524544', '56441', 'dggfg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'jj', 'Individual', NULL, NULL, '973|29', 'S35', '', '52441', '65441', 'bcvbc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'hhhhhhh', ' Agent', NULL, NULL, '973|29', 'S3', '', '45245', '545245', 'ghjfgh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'fdsdd', 'Builder', NULL, NULL, '965|117', 'S23', '', '3544', '54441', 'fghfcghgf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'fgfggg', 'Individual', NULL, NULL, '61|2', 'S170', '', '635365', '4564564', 'fghfdg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'kkkk', ' Agent', NULL, NULL, '1|28', 'other_S39', '', '5114', '1121', 'jhghbv', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'ssss', 'Individual', NULL, NULL, '43|26', 'S36', '', '1111', '11654654', 'hjgnfg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'rt', ' Agent', NULL, NULL, '1|14', 'S26', '', '9887671452', '654456', 'sfdvdxv', 'Basic', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, '', '', NULL, NULL, '91|1', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table  property_master 
--

CREATE TABLE    property_master  (
   prop_code  smallint NOT NULL  ,
   Prop_name  character(30) NOT NULL,
  PRIMARY KEY ( prop_code )
)        19 ;

--
-- Dumping data for table  property_master 
--

INSERT INTO  property_master  ( prop_code ,  Prop_name ) VALUES
(1, 'Residential Property'),
(2, 'Apartment'),
(3, 'Independent House/villa'),
(4, 'Independent/Builder Floor'),
(5, 'Ploat/Land'),
(6, 'Farm House'),
(7, 'Services/Studio Apartment'),
(8, 'Other Residential'),
(9, 'Commercial Property'),
(10, 'Land'),
(11, 'office'),
(12, 'office in IT Park/SEZ'),
(13, 'Business Center'),
(14, 'Warehouse/Godown'),
(15, 'Industrial Setup'),
(16, 'Shop'),
(17, 'Showroom'),
(18, 'Other Commercial');

-- --------------------------------------------------------

--
-- Table structure for table  registration 
--

CREATE TABLE    registration  (
   reg_id  smallint NOT NULL  ,
   trans_type  character(15) NOT NULL,
   full_name  character(30) NOT NULL,
   username  character(30) NOT NULL,
   password  character(30) NOT NULL,
   city_code  int(30) NOT NULL,
   mob_country_code  smallint NOT NULL,
   mobile_no  bigint(20) NOT NULL,
   area_code  smallint NOT NULL,
   landline  int(25) NOT NULL,
   website  character(100) NOT NULL,
   email  character(30) NOT NULL,
   address  character(100) NOT NULL,
  PRIMARY KEY ( reg_id )
)        45 ;

--
-- Dumping data for table  registration 
--

INSERT INTO  registration  ( reg_id ,  trans_type ,  full_name ,  username ,  password ,  city_code ,  mob_country_code ,  mobile_no ,  area_code ,  landline ,  website ,  email ,  address ) VALUES
(1, 'Individual', 'rohit vanavat', 'rohit', 'vana', 1, 91, 9413020620, 2907, 230706, '', 'rohit.vanavat@gmail.com', 'rishabhdeo'),
(2, 'Individual', 'devesh', 'dev', 'dev', 3, 91, 5555555555, 2, 2147483647, '', 'devsoft@hotmail.com', 'udaipur'),
(3, 'Individual', 'ram', 'ram', 'lax', 2, 91, 9413020620, 0, 2147483647, '', 'rajsamsoft@yahoo.com', 'rishabhdeo'),
(4, 'Individual', 'dev', 'deva', '666', 19, 91, 9787654431, 589, 2147483647, '', 'rohit.vanavat@yahoo.com', 'fddgfgv'),
(6, 'Agent', 'dev1', 'deva1', '555', 17, 91, 9787654431, 589, 2147483647, '', 'rohit.vanavat@yahoo.com', 'fddgfgv'),
(7, 'Agent', 'dev2', 'deva2', '8989', 20, 91, 9787654431, 589, 2147483647, '', 'rohit.vanavat@yahoo.com', 'fddgfgv'),
(8, 'Agent', 'dev3', 'deva3', '5858', 12, 91, 9787654431, 589, 2147483647, '', 'rohit.vanavat@yahoo.com', 'fddgfgv'),
(9, 'Builder', 'roja', 'rohit', 'rohit', 5, 91, 9413020620, 2907, 230706, '', 'rohit.vanavat@yahoo.com', 'ledfjch'),
(10, 'Individual', 'r1', 'rohit', '123', 8, 91, 2222, 0, 2323, '', 'rohit.vanavat@yahoo.com', 'lcjixhxj'),
(11, 'Agent', 'ankit', 'singh', '123', 14, 91, 230706, 2020, 258963, '', 'r.v@dmail.com', 'dnvxchvdhcvhd'),
(12, '', '', '', '', 9, 0, 94120, 0, 0, '', 's5ssss.ss!@dmail.com', ''),
(13, '', '', '', '', 5, 0, 9555555555, 0, 0, '', 'rohit.vanavat@yahoo.com', ''),
(14, '', '', 'rohit jaina', '123456', 11, 0, 941205000, 0, 0, '', '555555$www@fmail.com', ''),
(15, '', '', 'kdjghf', 'ihdfi', 37, 0, 6546464, 0, 0, '', 'mbjnv', ''),
(16, '', '', 'idefhi', 'jgdjfg', 5, 0, 564646, 0, 0, '', 'hgjjkg', ''),
(17, '', '', 'idefhi', '555', 5, 0, 564646, 0, 0, '', 'hgjjkg', ''),
(18, '', '', 'gf', '', 1, 0, 0, 0, 0, '', '', ''),
(19, '', '', 'rrr', '', 1, 0, 0, 0, 0, '', '', ''),
(20, '', '', 'rrr', '', 1, 0, 0, 0, 0, '', '', ''),
(21, '', '', '.ljkjh', '', 1, 0, 0, 0, 0, '', '', ''),
(22, '', '', 'yyyy', '222', 2, 0, 0, 0, 0, '', '', ''),
(23, '', '', 'hfgh', '', 1, 0, 0, 0, 0, '', '', ''),
(24, '', '', 'kihy', '', 3, 0, 0, 0, 0, '', '', ''),
(25, '', '', 'ankit', 'singh', 17, 0, 9585895556, 0, 0, '', 'roooror', ''),
(26, '', '', 'ankit', 'dddddd', 13, 0, 5555555555, 0, 0, '', '44444444', ''),
(27, '', '', '', '', 1, 91, 0, 0, 0, '', '', ''),
(28, '', '', '', '', 1, 91, 0, 0, 0, '', '', ''),
(29, '', '', 'rohit', 'vana', 1, 91, 0, 0, 0, '', '', ''),
(30, '', '', 'vsd', '', 1, 91, 0, 0, 0, '', '', ''),
(31, '', '', 'rohit', '', 1, 91, 0, 0, 0, '', '', ''),
(32, '', '', 'rohit', '', 1, 91, 0, 0, 0, '', '', ''),
(33, '', '', 'rohit', '', 1, 91, 0, 0, 0, '', '', ''),
(34, '', '', 'rohit', '', 1, 91, 0, 0, 0, '', '', ''),
(35, '', '', 'rohit', '', 1, 91, 0, 0, 0, '', '', ''),
(36, '', '', 'rohit', '', 1, 91, 0, 0, 0, '', '', ''),
(37, '', 'roja', 'sam', '123456', 3, 91, 9413020620, 2907, 230706, '', 'r', ''),
(38, '', '', '', '', 1, 0, 0, 0, 0, '', '', ''),
(39, 'Agent', 'ram', 'ramlal', '123456', 5, 91, 9413020620, 2907, 230906, '', 'rohit', '113131'),
(40, 'Individual', 'rama', 'rdx', 'rdx', 5, 91, 94561233, 202, 2305026, '', 'raja.com', 'rohit jain and company'),
(41, 'Individual', 'rama', '', 'vana', 1, 91, 0, 0, 0, '', '', ''),
(42, '', 'rohit123', 'sds', 'sds', 1, 91, 0, 0, 0, '', '', ''),
(43, ' Agent', 'rohit123', 'fff', '1233', 1, 91, 0, 0, 0, '', '', ''),
(44, 'Individual', 'ere', 'yyy', '222', 3, 91, 312323, 3232, 6897, '', '4654', '5454');

-- --------------------------------------------------------

--
-- Table structure for table  rent 
--

CREATE TABLE    rent  (
   rent_id  smallint NOT NULL  ,
   reg_id  smallint NOT NULL,
   list_type  character(20) NOT NULL,
   prop_code  smallint NOT NULL,
   city_code  smallint NOT NULL,
   min_area  smallint NOT NULL,
   max_area  smallint NOT NULL,
   rent_price  smallint NOT NULL,
   nego  character(10) NOT NULL,
   min_bedroom  smallint NOT NULL,
   max_bedroom  smallint NOT NULL,
   bathroom  smallint NOT NULL,
   am_pb  character(20) NOT NULL,
   am_rwh  character(20) NOT NULL,
   am_club  character(20) NOT NULL,
   am_lift  character(20) NOT NULL,
   am_sp  character(20) NOT NULL,
   am_rp  character(20) NOT NULL,
   am_security  character(20) NOT NULL,
   am_gym  character(20) NOT NULL,
   am_sq  character(20) NOT NULL,
   am_vc  character(20) NOT NULL,
   am_park  character(20) NOT NULL,
   land_sm  character(20) NOT NULL,
   land_school  character(20) NOT NULL,
   land_hos  character(20) NOT NULL,
   land_atm  character(20) NOT NULL,
   upload_img  character(100) NOT NULL,
   desc  character(1000) NOT NULL,
  PRIMARY KEY ( rent_id )
)        5 ;

--
-- Dumping data for table  rent 
--

INSERT INTO  rent  ( rent_id ,  reg_id ,  list_type ,  prop_code ,  city_code ,  min_area ,  max_area ,  rent_price ,  nego ,  min_bedroom ,  max_bedroom ,  bathroom ,  am_pb ,  am_rwh ,  am_club ,  am_lift ,  am_sp ,  am_rp ,  am_security ,  am_gym ,  am_sq ,  am_vc ,  am_park ,  land_sm ,  land_school ,  land_hos ,  land_atm ,  upload_img ,  desc ) VALUES
(1, 2, 'Fast Response', 3, 8, 2000, 600, 20000, 'yes', -1, 2, 8, '', 'Rain Water Harvestin', 'Club', 'Lift', 'Swimming Pool', 'Reserved Parking', 'Security', 'Gym', 'Servant Quarters', 'Vaastu Compliant', 'Park', 'Shopping Mall', 'School', 'Hospital', 'ATM', 'MENU2_27.png', 'DXCD'),
(4, 1, 'Fast Response', 6, 3, 500, 1000, 50000, 'yes', 1, 2, 2, 'Power Backup', 'Rain Water Harvestin', 'Club', 'Lift', 'Swimming Pool', 'Reserved Parking', 'Security', 'Gym', 'Servant Quarters', 'Vaastu Compliant ', 'Park', 'Shopping Mall', 'School', 'Hospital', 'ATM', 'side-img.png', 'mkdihfcj'),
(3, 1, 'Fast Response', 10, 19, 500, 600, 20000, 'yes', 2, 4, 0, 'Power Backup', 'Rain Water Harvestin', 'Club', 'Lift', 'Swimming Pool', 'Reserved Parking', 'Security', 'Gym', 'Servant Quarters', '', 'Park', 'Shopping Mall', 'School', 'Hospital', 'ATM', 'side-img.png', 'ldoshfvjsdjkzhcv');

-- --------------------------------------------------------

--
-- Table structure for table  sell 
--

CREATE TABLE    sell  (
   sell_id  smallint NOT NULL  ,
   reg_id  smallint NOT NULL,
   list_type  character(30) NOT NULL,
   prop_code  smallint NOT NULL,
   prop_type  character(30) NOT NULL,
   city_code  smallint NOT NULL,
   min_area  smallint NOT NULL,
   max_area  smallint NOT NULL,
   min_price  character(11) NOT NULL,
   max_price  character(11) NOT NULL,
   sqft  smallint NOT NULL,
   nego  character(10) NOT NULL,
   min_bedroom  character(30) NOT NULL,
   max_bedroom  character(30) NOT NULL,
   bathroom  smallint NOT NULL,
   floor  smallint NOT NULL,
   possession  character(30) NOT NULL,
   construction  character(30) NOT NULL,
   furnished  character(30) NOT NULL,
   facing  character(30) NOT NULL,
   ownership_type  character(30) NOT NULL,
   am_pb  character(20) NOT NULL,
   am_rwh  character(20) NOT NULL,
   am_club  character(20) NOT NULL,
   am_lift  character(20) NOT NULL,
   am_sp  character(20) NOT NULL,
   am_rp  character(20) NOT NULL,
   am_security  character(20) NOT NULL,
   am_gym  character(20) NOT NULL,
   am_sq  character(20) NOT NULL,
   am_vc  character(20) NOT NULL,
   am_park  character(11) NOT NULL,
   land_sm  character(20) NOT NULL,
   land_school  character(20) NOT NULL,
   land_hos  character(20) NOT NULL,
   land_atm  character(20) NOT NULL,
   upload_img  character(100) NOT NULL,
   desc  character(1000) NOT NULL,
  PRIMARY KEY ( sell_id )
)        18 ;

--
-- Dumping data for table  sell 
--

INSERT INTO  sell  ( sell_id ,  reg_id ,  list_type ,  prop_code ,  prop_type ,  city_code ,  min_area ,  max_area ,  min_price ,  max_price ,  sqft ,  nego ,  min_bedroom ,  max_bedroom ,  bathroom ,  floor ,  possession ,  construction ,  furnished ,  facing ,  ownership_type ,  am_pb ,  am_rwh ,  am_club ,  am_lift ,  am_sp ,  am_rp ,  am_security ,  am_gym ,  am_sq ,  am_vc ,  am_park ,  land_sm ,  land_school ,  land_hos ,  land_atm ,  upload_img ,  desc ) VALUES
(1, 1, 'Fast Response', 16, 'New Property', 2, 0, 2000, '20000000', '40000000', 5000, 'no', '2', '4', 5, 14, '5', '5', 'Furnished', 'West', '1', 'Power Backup', 'Rain Water Harvestin', 'Club', 'Lift', 'Swimming Pool', 'Reserved Parking', 'Security', 'Gym', 'Servant Quarters', 'Vaastu Compliant', 'Park', 'Shopping Mall', 'School', 'Hospital', 'ATM', '', 'rohit kumar jain'),
(2, 2, 'Basic', 1, 'New Property', 2, 2000, 2000, '3000000', '5000000', 5000, 'no', '1', '5', 4, 16, '3', '5', 'Unfurnished', 'North West', '2', 'Power Backup', '', 'Club', 'Lift', 'Swimming Pool', 'Reserved Parking', 'Security', 'Gym', 'Servant Quarters', 'Vaastu Compliant', 'Park', 'Shopping Mall', 'School', 'Hospital', 'ATM', '', 'rohit kumar jain'),
(4, 4, 'Basic', 1, 'New Property', 2, 2000, 2000, '2500', '3000', 500, 'yes', 'min 1 Bedroom', 'min 3 Bedroom', 3, 2, '30 - 60 days', '0 - 2 Years old', 'Semi-furnished', 'East', 'Semi-furnished', 'Power Backup', 'Rain Water Harvestin', 'Club', 'Lift', 'Swimming Pool', 'Reserved Parking', 'Security', 'Gym', 'Servant Quarters', 'Vaastu Compliant ', 'Park', 'Shopping Mall', 'School', 'Hospital', 'ATM', '', 'rohit kumar jain'),
(5, 5, 'Basic', 1, 'New Property', 2, 2500, 3000, '2000000', '5000000', 500, 'yes', 'min 1 Bedroom', 'min 3 Bedroom', 3, 2, '30 - 60 days', '0 - 2 Years old', 'Semi-furnished', 'East', 'Semi-furnished', 'Power Backup', 'Rain Water Harvestin', 'Club', 'Lift', 'Swimming Pool', 'Reserved Parking', 'Security', 'Gym', 'Servant Quarters', 'Vaastu Compliant ', 'Park', 'Shopping Mall', 'School', 'Hospital', 'ATM', '', 'rohit kumar jain'),
(6, 6, 'Fast Response', 1, 'Resale Property', 6, 2500, 3000, '2000000', '5000000', 500, 'yes', '2', '4', 3, 2, '', '0', 'Semi-furnished', 'East', '', 'Power Backup', 'Rain Water Harvestin', 'Club', 'Lift', 'Swimming Pool', 'Reserved Parking', 'Security', 'Gym', 'Servant Quarters', '', 'Park', 'Shopping Mall', 'School', 'Hospital', 'ATM', '', 'rohit kumar jain'),
(7, 7, 'Basic', 1, 'Resale Property', 10, 5000000, 2000, '2500', '3000', 500, 'yes', 'min 1 Bedroom', 'min 3 Bedroom', 3, 2, '30 - 60 days', '0 - 2 Years old', 'Semi-furnished', 'East', 'Semi-furnished', 'Power Backup', 'Rain Water Harvestin', 'Club', 'Lift', 'Swimming Pool', 'Reserved Parking', 'Security', 'Gym', 'Servant Quarters', 'Vaastu Compliant ', 'Park', 'Shopping Mall', 'School', 'Hospital', 'ATM', '', 'rohit kumar jain'),
(8, 8, 'Basic', 1, 'Resale Property', 10, 5000000, 200, '2500', '3000', 500, 'yes', 'min 1 Bedroom', 'min 3 Bedroom', 3, 2, '30 - 60 days', '0 - 2 Years old', 'Semi-furnished', 'East', 'Semi-furnished', 'Power Backup', 'Rain Water Harvestin', 'Club', 'Lift', 'Swimming Pool', 'Reserved Parking', 'Security', 'Gym', 'Servant Quarters', 'Vaastu Compliant ', 'Park', 'Shopping Mall', 'School', 'Hospital', 'ATM', '', 'rohit kumar jain'),
(9, 9, 'Basic', 1, 'Resale Property', 1, 5000000, 200, '1000000', '', 2, 'yes', '-1', '-1', 3, 2, '', '4', 'Unfurnished', 'East', '1', 'Power Backup', 'Rain Water Harvestin', 'Club', 'Lift', 'Swimming Pool', 'Reserved Parking', 'Security', 'Gym', 'Servant Quarters', '', 'Park', 'Shopping Mall', 'School', 'Hospital', 'ATM', '', 'rohit kumar jain'),
(11, 0, 'Basic', 1, 'Resale Property', 10, 5000000, 200, '1000000', '', 2, 'yes', 'min 1 Bedroom', 'min 3 Bedroom', 3, 2, '30 - 60 days', '0 - 2 Years old', 'Semi-furnished', 'East', 'Semi-furnished', 'Power Backup', 'Rain Water Harvestin', 'Club', 'Lift', 'Swimming Pool', 'Reserved Parking', 'Security', 'Gym', 'Servant Quarters', 'Vaastu Compliant ', 'Park', 'Shopping Mall', 'School', 'Hospital', 'ATM', '', 'rohit kumar jain'),
(12, 0, 'Basic', 1, 'Resale Property', 10, 5000000, 200, '1000000', '50000000', 2, 'yes', 'min 1 Bedroom', 'min 3 Bedroom', 3, 2, '30 - 60 days', '0 - 2 Years old', 'Semi-furnished', 'East', 'Semi-furnished', 'Power Backup', 'Rain Water Harvestin', 'Club', 'Lift', 'Swimming Pool', 'Reserved Parking', 'Security', 'Gym', 'Servant Quarters', 'Vaastu Compliant ', 'Park', 'Shopping Mall', 'School', 'Hospital', 'ATM', '', 'rohit kumar jain'),
(13, 0, 'Basic', 1, 'Resale Property', 10, 5000000, 200, '1000000', '50000000', 50, 'yes', 'min 1 Bedroom', 'min 3 Bedroom', 3, 2, '30 - 60 days', '0 - 2 Years old', 'Semi-furnished', 'East', 'Semi-furnished', 'Power Backup', 'Rain Water Harvestin', 'Club', 'Lift', 'Swimming Pool', 'Reserved Parking', 'Security', 'Gym', 'Servant Quarters', 'Vaastu Compliant ', 'Park', 'Shopping Mall', 'School', 'Hospital', 'ATM', '', 'rohit kumar jain'),
(14, 0, 'Basic', 1, 'Resale Property', 10, 5000000, 200, '1000000', '50000000', 50, 'yes', '2', '5', 3, 11, '5', '0', 'Unfurnished', 'South', '3', 'Power Backup', 'Rain Water Harvestin', 'Club', 'Lift', 'Swimming Pool', 'Reserved Parking', 'Security', 'Gym', 'Servant Quarters', 'Vaastu Compliant ', 'Park', 'Shopping Mall', 'School', 'Hospital', 'ATM', '', 'rohit kumar jain'),
(15, 0, 'Basic', 1, 'Resale Property', 5, 80000, 90000, '1000000', '10000000', 5000, 'no', '2', '5', 10, 15, '5', '10', 'Semi-furnished', 'West', '2', 'Power Backup', 'Rain Water Harvestin', 'Club', 'Lift', 'Swimming Pool', 'Reserved Parking', 'Security', 'Gym', 'Servant Quarters', 'Vaastu Compliant ', 'Park', 'Shopping Mall', 'School', 'Hospital', 'ATM', 'MENU2_27.png', 'rohit jain'),
(17, 0, 'Fast Response', 2, 'New Property', 17, 0, 0, '1000000', '5000000', 5000, 'yes', '1', '4', 2, 15, '3', '5', 'Unfurnished', 'West', '1', 'Power Backup', 'Rain Water Harvestin', 'Club', 'Lift', 'Swimming Pool', 'Reserved Parking', 'Security', 'Gym', 'Servant Quarters', 'Vaastu Compliant ', 'Park', 'Shopping Mall', 'School', 'Hospital', 'ATM', 'side-img.png', 'sdfv');
