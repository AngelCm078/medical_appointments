create database medical_appointments;
use medical_appointments;

CREATE TABLE patient (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name_patient VARCHAR(50) NOT NULL,
    surname_patient VARCHAR(50) NOT NULL,
    identification bigint(10) NOT NULL,
    birthdate VARCHAR(10) NOT NULL,
    city VARCHAR(50) not null,
    neighborhood VARCHAR(50) not null,
    cell_phone_number bigint(10) not null
);
