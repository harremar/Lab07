<?php
/**
 *Author: Marielle Harrell
 *Date: 10/10/2022
 *File: test_payable.php
 *Description:
 */

require ('person.class.php');

//convert a camel cased string to an underscored string
function camelCaseToUnderscore($str) {
    //store all characters in an array
    $characters = str_split($str);

    //covert the first character to a lowercase
    $characters[0] = strtolower($characters[0]);

    //exam all characters in the array
    //if a character is uppercase, replace it with a lowercase and prefix it with an underscore
    foreach ($characters as &$character) {
        if (ord($character) >= ord('A') && ord($character) <= ord('Z'))
            $character = '_' . strtolower($character);
    }

    //convert all elements in the array into a string and return the string
    return implode('', $characters);
}

spl_autoload_register(function($class_name){
    require_once camelCaseToUnderscore($class_name) . '.class.php';
});
?>

<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
        <meta name="author" content="Admin" />

        <title>The Person class and its subclasses</title>
    </head>

    <body>

        <?php
        //add your code here
        echo "<h2> Payroll System Programmed with OOP </h2>";


//        //creating invoice
        $i1 = new Invoice("01234 (seat)", 2, 375.00);
        $i2 = new Invoice("56789 (tire)", 4, 79.95);


        //print information about invoices
        $i1->toString();
        echo "<br /><br />";
        $i2->toString();
        echo "<br /><br />";

        // $s1 = new SalaryEmployee("Salary", "111-11-1111", "John", "Smith", 800, 30);
        // $s1->toString();
        // echo "<br /><br />";

        $h1 = new HourlyEmployee("Hourly", "222-22-2222", "Karen", "Price", 16.75, 40);
        $h1->toString();
        echo "<br /><br />";

        // $c1 = new CommissionEmployee("Commission", "333-33-3333", "Sue", "Jones", 10000, 0.06);
        // $c1->toString();
        // echo "<br /><br />";

        // $b1 = new BaseEmployee("based", "444-44-4444", "Bob", "Lewis", 5000, 0.04, 300);
        // $b1->toString();
        // echo "<br /><br />";

        echo "****************************************************";

        echo "<br><b> Number of Invoices: " . Invoice::getInvoiceCount() . "</b>";
        // echo "<br><b> Number of Employees: " . Employee::getEmployeeCount() . "</b>";



        ?>

    </body>
</html>