<?php

namespace App\Controller;

use App\Entity\Compagnies;
use App\Form\CompagniesType;
use App\Repository\CompagniesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/compagnies')]
class CompagniesController extends AbstractController
{
    #[Route('/', name: 'app_compagnies_index', methods: ['GET'])]
    public function index(CompagniesRepository $compagniesRepository): Response
    {
        return $this->render('compagnies/index.html.twig', [
            'compagnies' => $compagniesRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_compagnies_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CompagniesRepository $compagniesRepository): Response
    {
        $compagny = new Compagnies();
        $form = $this->createForm(CompagniesType::class, $compagny);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $compagniesRepository->save($compagny, true);

            return $this->redirectToRoute('app_compagnies_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('compagnies/new.html.twig', [
            'compagny' => $compagny,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_compagnies_show', methods: ['GET'])]
    public function show(Compagnies $compagny): Response
    {
        return $this->render('compagnies/show.html.twig', [
            'compagny' => $compagny,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_compagnies_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Compagnies $compagny, CompagniesRepository $compagniesRepository): Response
    {
        $form = $this->createForm(CompagniesType::class, $compagny);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $compagniesRepository->save($compagny, true);

            return $this->redirectToRoute('app_compagnies_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('compagnies/edit.html.twig', [
            'compagny' => $compagny,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_compagnies_delete', methods: ['POST'])]
    public function delete(Request $request, Compagnies $compagny, CompagniesRepository $compagniesRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$compagny->getId(), $request->request->get('_token'))) {
            $compagniesRepository->remove($compagny, true);
        }

        return $this->redirectToRoute('app_compagnies_index', [], Response::HTTP_SEE_OTHER);
    }
}
