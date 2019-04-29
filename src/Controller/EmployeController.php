<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\HttpFoundation\Request;

class EmployeController extends AbstractController
{
    /**
     * @Route("/employe", name="employe")
     */
    public function index(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('Nom', TextType::class)
            ->add('Prenom', TextType::class)
            ->add('Adresse', TextType::class)
            ->add('Tel', TextType::class)
            ->add('Email', TextType::class)
            ->add('Site_Web', TextType::class)
            ->add('N_Carte_Ident', TextType::class)
            ->add('submit', SubmitType::class)
            ->getForm();
        ;
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();
           $item = new Utilisateur();

            $item->setNom($data['Nom']);
            $item->setPrenom($data['Prenom']);
            $item->setAdresse($data['Adresse']);
            $item->setTel($data['Tel']);
            $item->setEmail($data['Email']);
            $item->setSiteWeb($data['Site_Web']);
            $item->setNCarteIdent($data['N_Carte_Ident']);
            $em = $this->getDoctrine()->getManager();
            $em->persist($item);
            $em->flush();
            return $this->redirectToRoute('affichage');



        }
        return $this->render('admin/employe.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/affichage", name="affichage")
     */
    public function affichage(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(Utilisateur::class);
        $users = $repository->findAll();
        return $this->render('employe/affichage.html.twig', ['users' => $users]);
    }
}
