<?php


namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Formulier;
use App\Form;

class controller extends AbstractController
{
    /**
     * @Route("/post", name="post")
     */
    public function index(Request $request)
    {
        $post = new Formulier();

        $this_form = $this->createForm(Form\FormType::class, $post);

        $this_form->handleRequest($request);

        if ($this_form->isSubmitted() && $this_form->isValid());
        {
            $em = $this->getDoctrine()->getManager();

            $em->persist($post);
            $em->flush();
        }

        $retrievedform = $em->getRepository(Formulier::class)->findAll();

        var_dump($retrievedform);

        $post->getName();
        $post->getEmail();
        $post->getMessage();

        return $this->render('form.html.twig', [ 'formulier' => $this_form->createView(), 'post' => $retrievedform]);
    }
}
