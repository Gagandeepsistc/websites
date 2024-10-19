CREATE DATABASE pet_sitting_service;

USE pet_sitting_service;

CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    service_type VARCHAR(50),
    customer_name VARCHAR(100),
    pet_name VARCHAR(100),
    date_of_service DATE,
    time_of_service TIME,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


USE pet_sitting_service;

CREATE TABLE pet_sitters (
    id INT AUTO_INCREMENT PRIMARY KEY,
    sitter_name VARCHAR(100),
    town VARCHAR(100),
    service_type VARCHAR(100),
    contact_info VARCHAR(150),
    rating DECIMAL(2,1)
);
INSERT INTO pet_sitters (sitter_name, town, service_type, contact_info, rating)
VALUES ('John Doe', 'Sydney', 'Doggy Day Care', 'john@example.com', 4.5),
       ('Jane Smith', 'Melbourne', 'Dog Boarding', 'jane@example.com', 5.0),
       ('Mary Johnson', 'Sydney', 'Dog Walking', 'mary@example.com', 4.8);


CREATE TABLE feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(100),
    user_email VARCHAR(100),
    message TEXT,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
