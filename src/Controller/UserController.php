<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Form\UserTypeMail;
use App\Form\UserTypeName;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * @Route("/user")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/", name="user_index", methods={"GET"})
     */
    public function index(UserRepository $userRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Erreur 403 accès interdit');
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_show", methods={"GET"})
     */
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="user_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, User $user): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Erreur 403 accès interdit');
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/editmail", name="user_editmail", methods={"GET","POST"})
     */
    public function editmail(Request $request, User $user): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        if($this->getUser()->getId() == $user->getId() || array_search('ROLE_ADMIN', $this->getUser()->getRoles()) ){
        $form = $this->createForm(UserTypeMail::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/editmail.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }}
    
     /**
     * @Route("/{id}/editname", name="user_editname", methods={"GET","POST"})
     */
    public function editname(Request $request, User $user): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        if($this->getUser()->getId() == $user->getId() || array_search('ROLE_ADMIN', $this->getUser()->getRoles()) ){
        $form = $this->createForm(UserTypeName::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/editname.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }}

    /**
     * @Route("/{id}", name="user_delete", methods={"DELETE"})
     */
    public function delete(Request $request, User $user): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            if($this->getUser()==$user){
                $session = new Session();
                $session->invalidate();
            }
            $entityManager->remove($user);
            $entityManager->flush();

        }
        if($this->getUser()->getId() == $user->getId() || array_search('ROLE_ADMIN', $this->getUser()->getRoles()) ){
            return $this->redirectToRoute('user_index');
        }else{
            return $this->redirectToRoute('index');
        }
    }
}
