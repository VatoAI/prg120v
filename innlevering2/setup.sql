-- Drop tables if they exist (in correct order due to foreign key)
DROP TABLE IF EXISTS student;
DROP TABLE IF EXISTS klasse;

-- Create klasse table
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

-- Insert sample data for student
INSERT INTO student (brukernavn, fornavn, etternavn, klassekode) VALUES
('gb', 'Geir', 'Bjarvin', 'IT1'),
('mrj', 'Marius R.', 'Johannessen', 'IT1'),
('tb', 'Tove', 'Bøe', 'IT2');