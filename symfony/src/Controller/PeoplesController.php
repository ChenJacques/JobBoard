<?php

namespace App\Controller;

use App\Entity\Peoples;
use App\Form\PeoplesType;
use App\Repository\PeoplesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/peoples')]
class PeoplesController extends AbstractController
{
    #[Route('/', name: 'app_peoples_index', methods: ['GET'])]
    public function index(PeoplesRepository $peoplesRepository): Response
    {
        return $this->render('peoples/index.html.twig', [
            'peoples' => $peoplesRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_peoples_new', methods: ['GET', 'POST'])]
    public function new(Request $request, PeoplesRepository $peoplesRepository): Response
    {
        $people = new Peoples();
        $form = $this->createForm(PeoplesType::class, $people);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $peoplesRepository->save($people, true);

            return $this->redirectToRoute('app_peoples_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('peoples/new.html.twig', [
            'people' => $people,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_peoples_show', methods: ['GET'])]
    public function show(Peoples $people): Response
    {
        return $this->render('peoples/show.html.twig', [
            'people' => $people,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_peoples_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Peoples $people, PeoplesRepository $peoplesRepository): Response
    {
        $form = $this->createForm(PeoplesType::class, $people);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $peoplesRepository->save($people, true);

            return $this->redirectToRoute('app_peoples_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('peoples/edit.html.twig', [
            'people' => $people,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_peoples_delete', methods: ['POST'])]
    public function delete(Request $request, Peoples $people, PeoplesRepository $peoplesRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$people->getId(), $request->request->get('_token'))) {
            $peoplesRepository->remove($people, true);
        }

        return $this->redirectToRoute('app_peoples_index', [], Response::HTTP_SEE_OTHER);
    }
}
