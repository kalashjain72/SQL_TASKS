<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>contact us form php </title>
  </head>
  <body>
    <form action="db.php" method="post">
      <label for="employee_id">Employee id:</label>
      <input type="text" name="employee_id" required /><br /><br />

      <label for="employee_first_name">Employee First Name:</label>
      <input type="text" name="employee_first_name" required /><br /><br />
      
      <label for="employee_last_name">Employee Last Name:</label>
      <input type="text" name="employee_last_name" required /><br /><br />
      
      <label for="gradaution_percentile">Gradaution Percentile:</label>
      <input type="text" name="graduation_percentile" required /><br /><br />

      <label for="employee_salary">Employee Salary: </label>
      <input type="text" name="employee_salary" required /><br /><br />

      <label for="employee_code">Employee Code: </label>
      <input type="text" name="employee_code" required /><br /><br />

      <label for="employee_code_name">Employee Code Name: </label>
      <input type="text" name="employee_code_name" required /><br /><br />

      <label for="employee_domain">Employee domaim: </label>
      <input type="text" name="employee_domain" required /><br /><br />

      <input type="submit" value="Submit" />
    </form>
  </body>
</html>

