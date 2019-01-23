<?php
/**
 * Created by PhpStorm.
 * User: javierbateman
 * Date: 12/19/17
 * Time: 12:54 PM
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

Class MainController extends AbstractController
{
    /**
     * @Route("/")
     * @param Request $request
     * @return Response
     */
    public function homePageAction(Request $request)
    {
        return $this->render('MainShop.html.twig', array());
    }
    /**
     * @Route("/mainshop/")
     * @param Request $request
     * @return Response
     */
    public function mainshopAction(Request $request)
    {
        return $this->render('MainShop.html.twig', array());
    }
    /**
     * @Route("/about/")
     * @param Request $request
     * @return Response
     */
    public function aboutAction(Request $request)
    {
        return $this->render('about.html.twig', array());
    }
    /**
     * @Route("/start/")
     * @param Request $request
     * @return Response
     */
    public function startAction(Request $request)
    {
        return $this->render('start.html.twig', array());
    }
    /**
     * @Route("/SignUp/")
     * @param Request $request
     * @return Response
     */
    public function SignUpAction(Request $request)
    {
        return $this->render('SignUp.html.twig', array());

    }
    /**
     * @Route("/charity/")
     * @param Request $request
     * @return Response
     */
    public function CharityAction(Request $request)
    {
        return $this->render('charity.html.twig', array());

    }
    /**
     * @Route("/cart/")
     * @param Request $request
     * @return Response
     */
    public function CartAction(Request $request)
    {
        return $this->render('cart.html.twig', array());

    }
}




