<?php

namespace App\Controller;

use App\Entity\Argonaut;
use App\Form\ArgonautType;
use App\Repository\ArgonautRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/argonaut")
 */
class ArgonautController extends AbstractController
{
    /**
     * @Route("/", name="argonaut_index", methods={"GET","POST"})
     */
    public function index(ArgonautRepository $argonautRepository, Request $request): Response
    {
        $argonaut = new Argonaut();
        $form = $this->createForm(ArgonautType::class, $argonaut);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($argonaut);
            $entityManager->flush();
            $this->addFlash('success', $argonaut->getName() . " à rejoint l'aventure !");

            return $this->redirectToRoute('argonaut_index');
        }

        return $this->render('argonaut/index.html.twig', [
            'argonauts' => $argonautRepository->findAll(),
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="argonaut_show", methods={"GET"})
     */
    public function show(Argonaut $argonaut): Response
    {
        return $this->render('argonaut/show.html.twig', [
            'argonaut' => $argonaut,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="argonaut_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Argonaut $argonaut): Response
    {
        $form = $this->createForm(ArgonautType::class, $argonaut);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('argonaut_index');
        }

        return $this->render('argonaut/edit.html.twig', [
            'argonaut' => $argonaut,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="argonaut_delete", methods={"POST"})
     */
    public function delete(Request $request, Argonaut $argonaut): Response
    {
        if ($this->isCsrfTokenValid('delete'.$argonaut->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($argonaut);
            $entityManager->flush();
            $this->addFlash('warning', $argonaut->getName() . " est parti(e)...");
        }

        return $this->redirectToRoute('argonaut_index');
    }
}
