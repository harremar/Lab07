<?php
/**
 *Author: Marielle Harrell
 *Date: 10/7/2022
 *File: car.class.php
 *Description:
 */

class HourlyEmployee extends Employee {
    private $wage, $hours;

    //constructor
    public function __construct($person, $ssn, $first, $last, $wage, $hours)
    {
        Employee::__construct($person, $ssn, $first, $last);
        $this->wage = $wage;
        $this->hours = $hours;
    }

    /**
     * @return mixed
     */
    public function getWage()
    {
        return $this->wage;
    }

    /**
     * @param mixed $wage
     */
    public function setWage($wage)
    {
        $this->wage = $wage;
    }

    /**
     * @return mixed
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * @param mixed $hours
     */
    public function setHours($hours)
    {
        $this->hours = $hours;
    }


    //the horn method simulates the sound
    public function getPerson()
    {
        return "Hourly Employee";
    }

    public function getPaymentAmount()
    {
        return $this->hours * $this->wage;
    }

    public function toString(){
        echo "****************************************************";
        echo "<br><b>", $this->getPerson(), ":</b><br>";
        echo "Name: ", $this->getFirst(), " ", $this->getLast(), "<br>";
        echo "Social Security Number: ", $this->getSsn(), "<br>";
        printf('Wage per hour: $%.2f ', $this->getWage());
        echo "<br>";
        echo "Hours: ", $this->getHours(), "<br>";
        printf('Earnings: $%.2f ', $this->getPaymentAmount());

    }
}