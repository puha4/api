<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use Symfony\Component\HttpFoundation\File\Exception\AccessDeniedException;

class UsersController extends FOSRestController implements ClassResourceInterface
{
    public function cgetAction()
    {
        //security.yml is configured to allow anonymous access to controllers
        //checking for authorization in each controller allows more flexibility
        //to change this remove anonymous: true in security.yml on firewall
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }

        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository("UserBundle:User");
        $users = $repository->findAll();

        $view = $this->view($users, 200)
            ->setTemplate("default/users.html.twig")
            ->setTemplateVar('users')
        ;


        return $this->handleView($view);
    }

    // пример
//     http://127.0.0.1:8000/oauth/v2/token?client_id=1_q3qwlrkzp5c8o0g0cw0oosooswscogcwkkw00scocgkwscss0&client_secret=67gxd7e7td8oggw08ows84g0os00c8g88sgw4ks8ow40og888g&grant_type=password&username=autogalaktika.office@gmail.com&password=12345
    public function postAction(Request $request){

        $userManager = $this->get('fos_user.user_manager');

        $user = $userManager->createUser();
        $user->setEnabled(true);

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isValid()) {

            $user->setPlainPassword($user->getPassword());
            $userManager->updateUser($user);

            $view = $this->view($user, 200);
            return $this->handleView($view);
        }

        $view = $this->view($form->getErrors(), 409);
        return $this->handleView($view);
    }

    public function getDemosAction()
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository("UserBundle:User");
        $users = $repository->findAll();

        $view = $this->view($users, 200)
            ->setTemplate("default/users.html.twig")
            ->setTemplateVar('users')
        ;


        return $this->handleView($view);
    }

    public function getUserAction($userId)
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository("UserBundle:User");
        $user = $repository->findOneById($userId);

        $view = $this->view($user, 200)
            ->setTemplate("default/users.html.twig")
            ->setTemplateVar('users')
        ;


        return $this->handleView($view);
    }

}
