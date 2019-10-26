<?php


namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class controller extends AbstractController
{
    /**
     * @Route("/form/{name}", name="form")
     */
    public function formulier(Request $request)
    {
        //request
        $name = $request->get('name');

        return $this->render('form.html.twig', ['name' =>$name]);
    }
}