-- 1. Show all columns from Employee
SELECT * FROM Employee;

-- 2. Find employees with salary less than 60000
SELECT * FROM Employee
WHERE salary < 60000;

-- 3. List employees with names containing 'i'
SELECT * FROM Employee
WHERE name LIKE '%i%';

-- 4. Sort employees by name in ascending order
SELECT * FROM Employee
ORDER BY name ASC;

-- 5. Find employees with salary greater than 50000
SELECT * FROM Employee
WHERE salary > 50000;
