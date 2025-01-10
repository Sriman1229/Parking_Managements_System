 phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2021 at 08:44 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3
create database parking4;
use parking4;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: vpms_py
--

-- --------------------------------------------------------

--
-- Table structure for table admin
--

CREATE TABLE admin (
  id int(255) NOT NULL,
  username varchar(30) DEFAULT NULL,
  password varchar(30) DEFAULT NULL,
  created_at varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table admin
--

INSERT INTO admin (id, username, password, created_at) VALUES
(1, 'admin', 'password', NULL);

-- --------------------------------------------------------

--
-- Table structure for table slots
--

CREATE TABLE slots (
  id int(255) NOT NULL,
  vehicle_id varchar(30) DEFAULT NULL,
  space_for int(25) DEFAULT NULL,
  is_empty int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table slots
--

INSERT INTO slots (id, vehicle_id, space_for, is_empty) VALUES
(1, '', 2, 1),
(2, '', 2, 1),
(3, '', 2, 1),
(4, '7', 2, 0),
(5, '8', 2, 0),
(6, NULL, 2, 1),
(7, NULL, 2, 1),
(8, NULL, 2, 1),
(9, NULL, 2, 1),
(10, NULL, 2, 1),
(11, NULL, 2, 1),
(12, NULL, 2, 1),
(13, NULL, 2, 1),
(14, NULL, 2, 1),
(15, NULL, 2, 1),
(16, NULL, 2, 1),
(17, NULL, 2, 1),
(18, NULL, 2, 1),
(19, NULL, 2, 1),
(20, NULL, 2, 1),
(21, NULL, 2, 1),
(22, NULL, 2, 1),
(23, NULL, 2, 1),
(24, NULL, 2, 1),
(25, NULL, 2, 1),
(26, NULL, 2, 1),
(27, NULL, 2, 1),
(28, NULL, 2, 1),
(29, NULL, 2, 1),
(30, NULL, 2, 1),
(31, '', 4, 1),
(32, '', 4, 1),
(33, '', 4, 1),
(34, NULL, 4, 1),
(35, NULL, 4, 1),
(36, NULL, 4, 1),
(37, NULL, 4, 1),
(38, NULL, 4, 1),
(39, NULL, 4, 1),
(40, NULL, 4, 1),
(41, NULL, 4, 1),
(42, NULL, 4, 1),
(43, NULL, 4, 1),
(44, NULL, 4, 1),
(45, NULL, 4, 1),
(46, NULL, 4, 1),
(47, NULL, 4, 1),
(48, NULL, 4, 1),
(49, NULL, 4, 1),
(50, NULL, 4, 1),
(51, NULL, 4, 1),
(52, NULL, 4, 1),
(53, NULL, 4, 1),
(54, NULL, 4, 1),
(55, NULL, 4, 1),
(56, NULL, 4, 1),
(57, NULL, 4, 1),
(58, NULL, 4, 1),
(59, NULL, 4, 1),
(60, NULL, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table vehicles
--

CREATE TABLE vehicles (
  id int(255) NOT NULL,
  name varchar(30) DEFAULT NULL,
  mobile varchar(30) DEFAULT NULL,
  entry_time varchar(30) DEFAULT NULL,
  exit_time varchar(30) DEFAULT NULL,
  is_exit varchar(30) DEFAULT NULL,
  vehicle_no varchar(30) DEFAULT NULL,
  vehicle_type varchar(30) DEFAULT NULL,
  created_at varchar(30) DEFAULT NULL,
  updated_at varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table vehicles
--

INSERT INTO vehicles (id, name, mobile, entry_time, exit_time, is_exit, vehicle_no, vehicle_type, created_at, updated_at) VALUES
(1, 'Christine Moore', '6785556900', '2021-05-02 00:50:26', '2021-05-02 00:54:19', '1', '3033', '4', '2021-05-02 00:50:26', '2021-05-02 00:50:26'),
(2, 'John Walker', '6715682100', '2021-05-02 00:51:00', '2021-05-02 00:54:47', '1', '8626', '4', '2021-05-02 00:51:00', '2021-05-02 00:51:00'),
(3, 'Will Williams', '6700265800', '2021-05-02 00:51:41', '2021-05-02 00:54:48', '1', '1016', '4', '2021-05-02 00:51:41', '2021-05-02 00:51:41'),
(4, 'Ivy Adams', '6703158600', '2021-05-02 00:52:07', '2021-05-02 00:54:48', '1', '9050', '2', '2021-05-02 00:52:07', '2021-05-02 00:52:07'),
(5, 'Bruno Doee', '9124560002', '2021-05-02 00:52:23', '2021-05-02 00:54:37', '1', '6666', '2', '2021-05-02 00:52:23', '2021-05-02 00:52:23'),
(6, 'Jack', '9124554210', '2021-05-02 00:53:06', '2021-05-02 00:55:05', '1', '6220', '2', '2021-05-02 00:53:06', '2021-05-02 00:53:06'),
(7, 'Liam Johnson', '930001240', '2021-05-02 00:53:26', '', '0', '2020', '2', '2021-05-02 00:53:26', '2021-05-02 00:53:26'),
(8, 'Ethan', '9342012560', '2021-05-02 00:53:53', '', '0', '2022', '2', '2021-05-02 00:53:53', '2021-05-02 00:53:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table admin
--
ALTER TABLE admin
  ADD PRIMARY KEY (id);

--
-- Indexes for table slots
--
ALTER TABLE slots
  ADD PRIMARY KEY (id);

--
-- Indexes for table vehicles
--
ALTER TABLE vehicles
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table admin
--
ALTER TABLE admin
  MODIFY id int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table slots
--
ALTER TABLE slots
  MODIFY id int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table vehicles
--
ALTER TABLE vehicles
  MODIFY id int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- Table structure for table payments
CREATE TABLE payments (
  id int(255) NOT NULL,
  vehicle_id int(255) NOT NULL,
  amount decimal(10,2) NOT NULL,
  payment_time datetime DEFAULT CURRENT_TIMESTAMP,
  payment_method varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Table structure for table staff
CREATE TABLE staff (
  id int(255) NOT NULL,
  name varchar(100) NOT NULL,
  contact_number varchar(15) NOT NULL,
  email varchar(100) DEFAULT NULL,
  position varchar(50) DEFAULT NULL,
  shift_start time DEFAULT NULL,
  shift_end time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Indexes and primary keys for new tables
ALTER TABLE payments
  ADD PRIMARY KEY (id),
  ADD KEY vehicle_id (vehicle_id);

ALTER TABLE staff
  ADD PRIMARY KEY (id);


-- AUTO_INCREMENT for new tables
ALTER TABLE payments
  MODIFY id int(255) NOT NULL AUTO_INCREMENT;
ALTER TABLE staff
  MODIFY id int(255) NOT NULL AUTO_INCREMENT;

-- Foreign keys for reference integrity
ALTER TABLE payments
  ADD CONSTRAINT payments_ibfk_1 FOREIGN KEY (vehicle_id) REFERENCES vehicles (id);

-- Table structure for table support
CREATE TABLE support (
  id int(255) NOT NULL,
  user_id int(255) DEFAULT NULL,
  subject varchar(255) NOT NULL,
  description text NOT NULL,
  status varchar(50) DEFAULT 'Open', -- Example statuses: Open, In Progress, Resolved, Closed
  created_at datetime DEFAULT CURRENT_TIMESTAMP,
  updated_at datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Indexes and primary keys for the support table
ALTER TABLE support
  ADD PRIMARY KEY (id),
  ADD KEY user_id (user_id);

-- AUTO_INCREMENT for the support table
ALTER TABLE support
  MODIFY id int(255) NOT NULL AUTO_INCREMENT;

-- Foreign key relationship (optional, based on whether you have a user or staff table this can refer to)
-- Here assuming user_id could link to a staff or admin table if such use is appropriate
-- ALTER TABLE support
--   ADD CONSTRAINT support_ibfk_1 FOREIGN KEY (user_id) REFERENCES staff (id);

-- Table structure for table parking_analytics
CREATE TABLE parking_analytics (
  id int(255) NOT NULL,
  date date NOT NULL,
  total_vehicles int(255) DEFAULT 0,
  total_revenue decimal(10,2) DEFAULT 0.00,
  average_parking_duration decimal(10,2) DEFAULT 0.00, -- in hours
  occupancy_rate decimal(5,2) DEFAULT 0.00, -- percentage of occupied slots
  created_at datetime DEFAULT CURRENT_TIMESTAMP,
  updated_at datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Indexes and primary keys for the parking_analytics table
ALTER TABLE parking_analytics
  ADD PRIMARY KEY (id);

-- AUTO_INCREMENT for the parking_analytics table
ALTER TABLE parking_analytics
  MODIFY id int(255) NOT NULL AUTO_INCREMENT;
  
  CREATE TABLE users (
  user_id INT NOT NULL AUTO_INCREMENT,
  username VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password_hash VARCHAR(255) NOT NULL,
  registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (user_id)
);
use parking4;
CREATE TABLE reviews (
  id int(255) NOT NULL AUTO_INCREMENT,
  user_id int(255) NOT NULL,
  vehicle_id int(255) NOT NULL,
  rating int(11) NOT NULL,
  comment text,
  created_at datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  KEY user_id (user_id),
  KEY vehicle_id (vehicle_id),
  CONSTRAINT fk_user_id FOREIGN KEY (user_id) REFERENCES users (user_id),
  CONSTRAINT fk_vehicle_id FOREIGN KEY (vehicle_id) REFERENCES vehicles (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

drop table payments;
CREATE TABLE payments (
  id int(255) NOT NULL AUTO_INCREMENT,
  vehicle_id int(255) NOT NULL,
  amount decimal(10,2) NOT NULL,
  payment_time datetime DEFAULT CURRENT_TIMESTAMP,
  payment_method varchar(50) DEFAULT NULL,
  user_name varchar(100) NOT NULL,
  mobile_number varchar(20) NOT NULL,
  vehicle_number varchar(20) NOT NULL,
  parking_duration decimal(10,2) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (vehicle_id) REFERENCES vehicles (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
use parking4;
ALTER TABLE payments
  MODIFY id int(255) NOT NULL AUTO_INCREMENT;
drop table parking_analytics;  

CREATE TABLE parking_analytics (
  id int(255) NOT NULL AUTO_INCREMENT,
  date date NOT NULL,
  total_vehicles int(255) DEFAULT 0,
  total_revenue decimal(10,2) DEFAULT 0.00,
  average_parking_duration decimal(10,2) DEFAULT 0.00,
  created_at datetime DEFAULT CURRENT_TIMESTAMP,
  updated_at datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DELIMITER //

CREATE TRIGGER update_parking_analytics
AFTER INSERT ON payments
FOR EACH ROW
BEGIN
    DECLARE total_amount DECIMAL(10,2);
    DECLARE total_vehicles_count INT;
    
    -- Get total amount for the current date
    SELECT SUM(amount) INTO total_amount
    FROM payments
    WHERE DATE(payment_time) = NEW.payment_time;
    
    -- Get total number of vehicles for the current date
    SELECT COUNT(id) INTO total_vehicles_count
    FROM payments
    WHERE DATE(payment_time) = NEW.payment_time;
    
    -- Update parking_analytics table
    UPDATE parking_analytics
    SET total_vehicles = total_vehicles_count,
        total_revenue = total_amount,
        updated_at = NOW()
    WHERE date = DATE(NEW.payment_time);
END //

DELIMITER ;
desc table vehicles;
