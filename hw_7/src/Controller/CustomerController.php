<?php

namespace App\Controller;

use App\Entity\Customer;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomerController extends AbstractController
{
    #[Route('/customer/{customer_id}', name: 'customer')]
    public function getCustomer($customer_id,ManagerRegistry $managerRegistry): Response
    {
        $manager = $managerRegistry->getRepository(Customer::class);
        $customer = $manager->find($customer_id);
        $name = $customer->getName();
        $birthday = $customer->getBirthday();
        echo "<div> Customer name: $name </div>";
        echo "<h1> Customer birthday: $birthday </h1>";
        foreach($customer->getNumbers() as $numbers){
            $number = $numbers->getNumberPhone();
            echo "<div> Customer number: $number </div>";
        }
        foreach($customer->getAdresses() as $adresses){
            $adress = $adresses->getAdressName();
            echo "<div> Customer number: $adress </div>";
        }
        die();
    }
}