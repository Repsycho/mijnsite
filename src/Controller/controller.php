<?php


namespace App\Controller;

use App\Entity\form;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class controller extends AbstractController
{
    /**
     * @Route("Form", name="Form")
     */
    public function form()
    {return $this->render();
    }
}