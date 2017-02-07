<?php

namespace Love\Test\PeopleBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use PeopleBundle\Entity\Person;

class PersonController extends FOSRestController
{
    /**
   * @Rest\Get("/Person")
   */
  public function getAction()
  {
    $restresult = $this->getDoctrine()->getRepository('PeopleBundle:Person')->findAll();
      if ($restresult === null) {
        return new View("there are no users exist", Response::HTTP_NOT_FOUND);
   }
      return $restresult;
  }
}
