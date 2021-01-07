<?php
/**
 * Created by PhpStorm.
 * User: andranik
 * Date: 1/8/21
 * Time: 12:21 AM
 */

namespace App\Controller;

use App\Entity\PhoneBook;
use App\Validator\CountryCode;
use App\Validator\TimeZone;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Validation;

class PhoneBookController
{
    public function listAction(Request $request, EntityManager $em)
    {
        //TODO:: to get limit query parameter. $request->get('limit')

        $phones = $em->getRepository(PhoneBook::class)->getPhones();

        return new Response("listAction");
    }

    public function createAction(Request $request, EntityManager $em)
    {
        //TODO: Data to create phoneBook
        $data = json_decode($request->getContent());

        $validator = Validation::createValidator();

        $phoneBook = new PhoneBook();
        $phoneBook->setCountryCode("tdsdfsdfsdfsdfsdfsdfx");
        $phoneBook->setTimezoneName("tdsdfsdfsdfsdfsdfsdfx");

        $errors = $validator->validate($phoneBook, [new CountryCode(), new TimeZone()]);
        var_dump($errors);
        exit;
        return new Response("createAction");
    }

    public function getAction($id, EntityManager $em)
    {
        return new Response("getAction " . $id);
    }

    public function updateAction($id, Request $request, EntityManager $em)
    {
        //TODO: Data to update phoneBook
        $data = json_decode($request->getContent());

        return new Response("updateAction " . $id);
    }

    public function deleteAction($id, EntityManager $em)
    {
        return new Response("deleteAction " . $id);
    }
}
