-- create employee_code_table
CREATE TABLE employee_code_table (
    employee_code VARCHAR(10) PRIMARY KEY,
    employee_code_name VARCHAR(50),
    employee_domain VARCHAR(50)
);

-- create employee_salary_table
CREATE TABLE employee_salary_table (
    employee_id VARCHAR PRIMARY KEY,
    employee_salary VARCHAR(10),
    employee_code VARCHAR(10),
    FOREIGN KEY (employee_code) REFERENCES employee_code_table (employee_code)
);

-- create employee_details_table
CREATE TABLE employee_details_table (
    employee_id VARCHAR PRIMARY KEY,
    employee_first_name VARCHAR(50),
    employee_last_name VARCHAR(50),
    graduation_percentile DECIMAL(5,2)
);
