<?php

namespace App\Controller;

use App\Entity\Jobapplication;
use App\Form\JobapplicationType;
use App\Repository\JobapplicationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/jobapplication')]
class JobapplicationController extends AbstractController
{
    #[Route('/', name: 'app_jobapplication_index', methods: ['GET'])]
    public function index(JobapplicationRepository $jobapplicationRepository): Response
    {
        return $this->render('jobapplication/index.html.twig', [
            'jobapplications' => $jobapplicationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_jobapplication_new', methods: ['GET', 'POST'])]
    public function new(Request $request, JobapplicationRepository $jobapplicationRepository): Response
    {
        $jobapplication = new Jobapplication();
        $form = $this->createForm(JobapplicationType::class, $jobapplication);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $jobapplicationRepository->save($jobapplication, true);

            return $this->redirectToRoute('app_jobapplication_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('jobapplication/new.html.twig', [
            'jobapplication' => $jobapplication,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_jobapplication_show', methods: ['GET'])]
    public function show(Jobapplication $jobapplication): Response
    {
        return $this->render('jobapplication/show.html.twig', [
            'jobapplication' => $jobapplication,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_jobapplication_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Jobapplication $jobapplication, JobapplicationRepository $jobapplicationRepository): Response
    {
        $form = $this->createForm(JobapplicationType::class, $jobapplication);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $jobapplicationRepository->save($jobapplication, true);

            return $this->redirectToRoute('app_jobapplication_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('jobapplication/edit.html.twig', [
            'jobapplication' => $jobapplication,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_jobapplication_delete', methods: ['POST'])]
    public function delete(Request $request, Jobapplication $jobapplication, JobapplicationRepository $jobapplicationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$jobapplication->getId(), $request->request->get('_token'))) {
            $jobapplicationRepository->remove($jobapplication, true);
        }

        return $this->redirectToRoute('app_jobapplication_index', [], Response::HTTP_SEE_OTHER);
    }
}
