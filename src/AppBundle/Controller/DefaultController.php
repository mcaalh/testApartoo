<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Adress;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need

        return $this->render('default/index.html.twig');
    }


    ///////////TEST ROUTE//////////
    /**
     * @Route("/test", name="test")
     */
    public function testAction(Request $request)
    {
        return $this->render('default/test.html.twig');
    }
    /**
     * @Route("/users", name="users")
     */
    public function usersAction(Request $request)
    {
        return $this->render('default/users.html.twig');
    }
////////FIN TEST ROUTE///////


    //////Route liste des contacts/////////



    /**
     * @Route("/adressbook", name="carnet_d_adresse")
     */
    public function listAction()
    {
        //List des adressbook
        $adress = $this->getDoctrine()
            ->getRepository('AppBundle:Adress')
            ->findAll();

        return $this->render('adress/index.html.twig', array('adress' => $adress));
    }


    //////Route Creer contact/////////


    /**
     * @Route("/adressbook/create", name="create")
     */
    public function createAction(Request $request)
    {
        $adress = new Adress;
        $form = $this->createFormBuilder($adress)
            ->add('name', TextType::class, array('attr' => array('class'=>'input-field', 'style'=>'margin-bottom:15px')))
            ->add('adresse', TextType::class, array('attr' => array('class'=>'input-field', 'style'=>'margin-bottom:15px')))
            ->add('telephone', TextType::class, array('attr' => array('class'=>'input-field', 'style'=>'margin-bottom:15px')))
            ->add('website', TextType::class, array('attr' => array('class'=>'input-field', 'style'=>'margin-bottom:15px')))
            ->add('email', TextType::class, array('attr' => array('class'=>'input-field', 'style'=>'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label'=>'creer le contact', 'attr' => array('class'=>'btn', 'style'=>'margin-bottom:15px')))
            ->getForm();
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            //Get DATA
            $name = $form['name']->getData();
            $adresse = $form['adresse']->getData();
            $telephone = $form['telephone']->getData();
            $website = $form['website']->getData();
            $email = $form['email']->getData();

            $adress->setName($name);
            $adress->setAdresse($adresse);
            $adress->setTelephone($telephone);
            $adress->setWebsite($website);
            $adress->setEmail($email);

            $em = $this->getDoctrine()->getManager();

            $em->persist($adress);
            $em->flush();

            $this->addFlash(
                'notice',
                'Contact ajoute'
                );

            return $this->redirectToRoute('carnet_d_adresse');
        }
        return $this->render('adress/create.html.twig', array(
            'form' => $form->createView()
            ));
    }



    //////Route Modifier contact /////////


    /**
     * @Route("/adressbook/edit/{id}", name="edit")
     */
    public function editAction($id, Request $request)
    {
        //Liste des adressbook
        $adress= $this->getDoctrine()
            ->getRepository('AppBundle:Adress')
            ->find($id);

        $form = $this->createFormBuilder($adress)
            ->add('name', TextType::class, array('attr' => array('class'=>'input-field', 'style'=>'margin-bottom:15px')))
            ->add('adresse', TextType::class, array('attr' => array('class'=>'input-field', 'style'=>'margin-bottom:15px')))
            ->add('telephone', TextType::class, array('attr' => array('class'=>'input-field', 'style'=>'margin-bottom:15px')))
            ->add('website', TextType::class, array('attr' => array('class'=>'input-field', 'style'=>'margin-bottom:15px')))
            ->add('email', TextType::class, array('attr' => array('class'=>'input-field', 'style'=>'margin-bottom:15px')))
            ->add('save', SubmitType::class, array('label'=>'modifier le contact', 'attr' => array('class'=>'btn', 'style'=>'margin-bottom:15px')))
            ->getForm();
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            //Get DATA


            $name = $form['name']->getData();
            $adresse = $form['adresse']->getData();
            $telephone = $form['telephone']->getData();
            $website = $form['website']->getData();
            $email = $form['email']->getData();

            $em = $this->getDoctrine()->getManager();
            $adress = $em->getRepository('AppBundle:Adress')->find($id);

            $adress->setName($name);
            $adress->setAdresse($adresse);
            $adress->setTelephone($telephone);
            $adress->setWebsite($website);
            $adress->setEmail($email);

            $em->flush();

            $this->addFlash(
                'notice',
                'Contact mis a jour'
                );

            return $this->redirectToRoute('carnet_d_adresse');
        }

        return $this->render('adress/edit.html.twig', array('adresse' => $adress, 'form' => $form->createView()));
    }



    //////Route Details contact/////////


    /**
     * @Route("/adressbook/details/{id}", name="details")
     */
    public function detailsAction($id)
    {
        //List des adressbook
        $adresse = $this->getDoctrine()
            ->getRepository('AppBundle:Adress')
            ->find($id);

        return $this->render('adress/details.html.twig', array('adresse' => $adresse));
    }



   //////Route Delete contact/////////


    /**
     * @Route("/adressbook/delete/{id}", name="delete")
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $adress = $em->getRepository('AppBundle:Adress')->find($id);

        $em->remove($adress);
        $em->flush();

        $this->addFlash(
            'notice',
            'Contact efface'
            );

        return $this->redirectToRoute('carnet_d_adresse');

    }



}
