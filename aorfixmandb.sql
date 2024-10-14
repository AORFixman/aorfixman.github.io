<<<<<<< HEAD
-- Disable foreign key checks
SET FOREIGN_KEY_CHECKS=0;

-- Drop existing tables if they exist
DROP TABLE IF EXISTS service;
DROP TABLE IF EXISTS customer;
DROP TABLE IF EXISTS admin;
DROP TABLE IF EXISTS device;
DROP TABLE IF EXISTS users;

-- Enable foreign key checks
SET FOREIGN_KEY_CHECKS=1;

-- --------------------------------------------------------
-- --------------------------------------------------------

CREATE TABLE service_orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(30) NOT NULL,
    service_type VARCHAR(100) NOT NULL,
    device_type VARCHAR(100) NOT NULL,
    issue TEXT NOT NULL,
    submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO service_orders (name, email, phone, service_type, device_type, issue)
VALUES ('Insyirah', 'insyirah@gmail.com', '0106524389', 'LCD Problem', 'Smartphone', 'Screen Replacement'),
       ('Amir', 'amir@gmail.com', '0167256188', 'LCD Problem', 'Laptop', 'White Screen'),
       ('Nukman', 'nukman@gmail.com', '0106534190', 'Battery Problem', 'Smartphone', 'battery kembung'),
       ('Nadrah', 'nadrah@gmail.com', '0175623899', 'Charging Port Problem', 'Tablet', 'cas tak masuk');


CREATE TABLE messages (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(50),
    subject VARCHAR(100),
    message TEXT,
    reg_date TIMESTAMP
);

CREATE TABLE quotes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    mobile VARCHAR(50) NOT NULL,
    email VARCHAR(255) NOT NULL,
    service VARCHAR(255) NOT NULL,
    special_note TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



COMMIT;
=======
-- Disable foreign key checks
SET FOREIGN_KEY_CHECKS=0;

-- Drop existing tables if they exist
DROP TABLE IF EXISTS service;
DROP TABLE IF EXISTS customer;
DROP TABLE IF EXISTS admin;
DROP TABLE IF EXISTS device;
DROP TABLE IF EXISTS users;

-- Enable foreign key checks
SET FOREIGN_KEY_CHECKS=1;

-- --------------------------------------------------------
-- --------------------------------------------------------

CREATE TABLE service_orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(30) NOT NULL,
    service_type VARCHAR(100) NOT NULL,
    device_type VARCHAR(100) NOT NULL,
    issue TEXT NOT NULL,
    submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO service_orders (name, email, phone, service_type, device_type, issue)
VALUES ('Insyirah', 'insyirah@gmail.com', '0106524389', 'LCD Problem', 'Smartphone', 'Screen Replacement'),
       ('Amir', 'amir@gmail.com', '0167256188', 'LCD Problem', 'Laptop', 'White Screen'),
       ('Nukman', 'nukman@gmail.com', '0106534190', 'Battery Problem', 'Smartphone', 'battery kembung'),
       ('Nadrah', 'nadrah@gmail.com', '0175623899', 'Charging Port Problem', 'Tablet', 'cas tak masuk');


CREATE TABLE messages (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(50),
    subject VARCHAR(100),
    message TEXT,
    reg_date TIMESTAMP
);

CREATE TABLE quotes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    mobile VARCHAR(50) NOT NULL,
    email VARCHAR(255) NOT NULL,
    service VARCHAR(255) NOT NULL,
    special_note TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



COMMIT;
>>>>>>> 960405ccdfda35b82e20b2f7deb00ba321a22647
