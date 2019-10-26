<?php


namespace App\Controller;

use App\Repository\FormulierRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Formulier;

class controller extends AbstractController
{
    /**
     * @Route("/form/{name}", name="form")
     */
    public function formulier(Request $request)
    {
        //request
        $name = $request->get('name');

        return $this->render('form.html.twig', ['name' => $name]);

        //opslag
        $formulier =new Formulier();

        $formulier->setName('Ewout');
        $formulier->setEmail('vleermuis@live');
        $formulier->getMessage(text'Hallo ik heet ewout');
        $formulier->getTimeofpost();

        $em = $this->getDoctrine()->getManager();

        $retrieveform = $em->getRepository(FormulierRepository::class)->findAll();

        var_dump($retrieveform);

        $em->persist($formulier);

        $em->flush();

        return $this->render('form.html.twig', ['name' => $name]);
    }
}
