<?php
/**
 *Author: Marielle Harrell
 *Date: 10/7/2022
 *File: vehicle.class.php
 *Description: define the vehicle class
 */

abstract class Employee extends Person2 implements Payable {
    private $person, $ssn;

    //static data member to count the number of invoices in the system
    private static $employee_count = 0;

    //constructor
    public function __construct($person, $ssn, $first, $last){
        parent::__construct($first, $last);
        $this->person = $person;
        $this->ssn = $ssn;

        self::$employee_count++;
    }

    /**
     * @return mixed
     */
//    public function getPerson()
//    {
//        return $this->person;
//    }

    /**
     * @param mixed $person
     */
    public function setPerson($person)
    {
        $this->person = $person;
    }

    /**
     * @return mixed
     */
    public function getSsn()
    {
        return $this->ssn;
    }

    /**
     * @param mixed $ssn
     */
    public function setSsn($ssn)
    {
        $this->ssn = $ssn;
    }

    //get invoice count
    public function getEmployeeCount() {
        return self:: $employee_count;
    }


    //an abstract method
    abstract public function getPaymentAmount();

    abstract public function getPerson();



    //display the details of a student
    public function toString()
    {
        echo "****************************************************";
        echo " <br> <h2>Employee</h2> <br>";
        echo "Name: ", $this->getFirst(), " " , $this->getLast(), "<br>";
        echo "Social Security Number: ", $this->getSsn(), "<br>";

    }

}