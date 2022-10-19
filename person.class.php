<?php
/**
 *Author: Marielle Harrell
 *Date: 10/10/2022
 *File: person.class.php
 *Description:
 */

class Person2{
    private $first, $last;

    //constructor
    public function __construct($first, $last){
        $this->first = $first;
        $this->last = $last;
    }

    /**
     * @return mixed
     */
    public function getFirst()
    {
        return $this->first;
    }

    /**
     * @param mixed $first
     */
    public function setFirst($first)
    {
        $this->first = $first;
    }

    /**
     * @return mixed
     */
    public function getLast()
    {
        return $this->last;
    }

    /**
     * @param mixed $last
     */
    public function setLast($last)
    {
        $this->last = $last;
    }



    //display the details of a student
    public function toString()
    {
        echo "****************************************************";
        echo " <br> <h2>Employee</h2> <br>";
        echo "Name: ", $this->getFirst(), " ", $this->getLast(), "<br>";

    }
}