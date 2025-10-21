-- Database setup script for student management system
-- This script creates the necessary tables and indexes for managing students and classes
-- Last updated: 2025-10-21

-- First, drop existing tables in correct order (due to foreign key constraints)
DROP TABLE IF EXISTS student;  -- Drop child table first
DROP TABLE IF EXISTS klasse;   -- Then drop parent table

-- Create klasse (class) table - Parent table
CREATE TABLE klasse (
    klassekode CHAR(5) NOT NULL,
    klassenavn VARCHAR(50) NOT NULL,
    studiumkode VARCHAR(50) NOT NULL,
    PRIMARY KEY (klassekode)
);

-- Create student table
CREATE TABLE student (
    brukernavn CHAR(7) NOT NULL,
    fornavn VARCHAR(50) NOT NULL,
    etternavn VARCHAR(50) NOT NULL,
    klassekode CHAR(5) NOT NULL,
    PRIMARY KEY (brukernavn),
    FOREIGN KEY (klassekode) REFERENCES klasse (klassekode)
);

-- Insert sample data for klasse
INSERT INTO klasse (klassekode, klassenavn, studiumkode) VALUES
('IT1', 'IT og ledelse 1. år', 'ITLED'),
('IT2', 'IT og ledelse 2. år', 'ITLED'),
('IT3', 'IT og ledelse 3. år', 'ITLED');

-- Create indexes for better performance
CREATE INDEX idx_student_klassekode ON student(klassekode);
CREATE INDEX idx_student_etternavn ON student(etternavn);
CREATE INDEX idx_klasse_studiumkode ON klasse(studiumkode);

-- Insert sample data for student
INSERT INTO student (brukernavn, fornavn, etternavn, klassekode) VALUES
('gb', 'Geir', 'Bjarvin', 'IT1'),
('mrj', 'Marius R.', 'Johannessen', 'IT1'),
('tb', 'Tove', 'Bøe', 'IT2');