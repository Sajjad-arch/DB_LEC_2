CREATE TABLE Department (
dept_id INT PRIMARY KEY,
dept_name VARCHAR(50),
location VARCHAR(50),
budget INT
);

CREATE TABLE Employee (
emp_id INT PRIMARY KEY,
name VARCHAR(50),
salary INT,
dept_id INT,
FOREIGN KEY (dept_id)
REFERENCES Department(dept_id)
);

INSERT INTO Department
(dept_id, dept_name, location,
budget)
VALUES
(1, 'HR', 'Rajshahi', 700000),
(2, 'IT', 'Sylhet', 850000),
(3, 'Finance', 'Chittagong',
600000),
(4, 'Marketing', 'Dhaka',
NULL);
INSERT INTO Employee (emp_id,
name, salary, dept_id)
VALUES
(101, 'Arif', 45000, 1),
(102, 'Nila', 60000, 2),
(103, 'Sumon', 55000, 3),
(104, 'Rina', 65000, 2),
(105, 'Karim', NULL, 4),
(106, 'Jamil', 50000, 3);
