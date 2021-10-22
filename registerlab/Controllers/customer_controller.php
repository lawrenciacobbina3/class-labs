<?php

require('../Modules/customer_class.php');

function addCustomerController ($name,$email,$pswd,$country,$city,$contact,$role){

    return $customer_actions->addCustomer($name,$email,$pswd,$country,$city,$contact);
}


function editCustomerController ($name,$country,$city,$contact){

    return $customer_actions->editCustomer($name,$country,$city,$contact);
}

function removeCustomerController ($name,$email,$pswd,$country,$city,$contact){

    return $customer_actions->removeCustomer($id);
}


>