<?php

namespace AppBundle\Controller;

use BartoszBartniczak\EventSourcing\Shop\Product\Product;
use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends FOSRestController
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $productRepository = $this->get('repository.product');

        $view = $this->view(['products'=>$productRepository->find()], Response::HTTP_OK);
        return $this->handleView($view);
    }
}
