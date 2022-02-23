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
        foreach($customer->getNumbers() as $number){
            var_dump($number);
        }
        foreach($customer->getAdresses() as $adress){
            var_dump($adress);
        }
        die();
    }
}