<?php
/**
 *Author: Marielle Harrell
 *Date: 10/10/2022
 *File: payable.class.php
 *Description:
 */

//interface
interface Payable  {

    public function getPaymentAmount();

    public function toString();
}
?>