<?php
/**
 *Author: Marielle Harrell
 *Date: 10/10/2022
 *File: invoice.class.php
 *Description:
 */

class Invoice implements Payable{
    //private data members for invoice details
    private $part_number, $part_description, $quantity, $price_per_item;

    //static data member to count the number of invoices in the system
    private static $invoice_count = 0;

    //constructor
    public function __construct($part_number, $quantity, $price_per_item)
    {
        $this->part_number = $part_number;
//        $this->part_description = $part_description;
        $this->quantity = $quantity;
        $this-> price_per_item = $price_per_item;

        self::$invoice_count++;
    }

    //public get methods
    public function getPartNumber() {
        return $this->part_number;
    }

    public function getPartDescription() {
        return $this->part_description;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getPricePerItem() {
        return $this->price_per_item;
    }

    public function getPaymentAmount() {
        return $this->quantity * $this->price_per_item;
    }

    //get invoice count
    public function getInvoiceCount() {
        return self:: $invoice_count;
    }

    //display the details of a student
    public function toString()
    {
        echo "****************************************************";
        echo " <br> <b>Invoice:</b> <br>";
        echo "Part number: ", $this->getPartNumber(), "<br>";
        echo "Quantity: ", $this->getQuantity(), "<br>";
        echo "Price per item: $", $this->getPricePerItem(), "<br>";
        printf('Payment: $%.2f ', $this->getPaymentAmount());

    }

}
