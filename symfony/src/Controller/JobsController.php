<?php

namespace App\Controller;

use App\Entity\Jobs;
use App\Form\JobsType;
use App\Repository\JobsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/jobs')]
class JobsController extends AbstractController
{
    #[Route('/', name: 'app_jobs_index', methods: ['GET'])]
    public function index(JobsRepository $jobsRepository): Response
    {
        return $this->render('jobs/index.html.twig', [
            'jobs' => $jobsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_jobs_new', methods: ['GET', 'POST'])]
    public function new(Request $request, JobsRepository $jobsRepository): Response
    {
        $job = new Jobs();
        $form = $this->createForm(JobsType::class, $job);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $jobsRepository->save($job, true);

            return $this->redirectToRoute('app_jobs_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('jobs/new.html.twig', [
            'job' => $job,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_jobs_show', methods: ['GET'])]
    public function show(Jobs $job): Response
    {
        return $this->render('jobs/show.html.twig', [
            'job' => $job,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_jobs_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Jobs $job, JobsRepository $jobsRepository): Response
    {
        $form = $this->createForm(JobsType::class, $job);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $jobsRepository->save($job, true);

            return $this->redirectToRoute('app_jobs_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('jobs/edit.html.twig', [
            'job' => $job,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_jobs_delete', methods: ['POST'])]
    public function delete(Request $request, Jobs $job, JobsRepository $jobsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$job->getId(), $request->request->get('_token'))) {
            $jobsRepository->remove($job, true);
        }

        return $this->redirectToRoute('app_jobs_index', [], Response::HTTP_SEE_OTHER);
    }
}
