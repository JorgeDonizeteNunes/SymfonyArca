<?php

namespace App\Controller;

use App\Entity\Empresa;
use App\Form\EmpresaType;
use App\Repository\EmpresaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/add/empresa")
 */
class AddEmpresaController extends AbstractController
{
    /**
     * @Route("/", name="add_empresa_index", methods={"GET"})
     */
    public function index(EmpresaRepository $empresaRepository): Response
    {
        return $this->render('add_empresa/index.html.twig', [
            'empresas' => $empresaRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="add_empresa_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $empresa = new Empresa();
        $form = $this->createForm(EmpresaType::class, $empresa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($empresa);
            $entityManager->flush();

            return $this->redirectToRoute('add_empresa_index');
        }

        return $this->render('add_empresa/new.html.twig', [
            'empresa' => $empresa,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="add_empresa_show", methods={"GET"})
     */
    public function show(Empresa $empresa): Response
    {
        return $this->render('add_empresa/show.html.twig', [
            'empresa' => $empresa,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="add_empresa_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Empresa $empresa): Response
    {
        $form = $this->createForm(EmpresaType::class, $empresa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('add_empresa_index');
        }

        return $this->render('add_empresa/edit.html.twig', [
            'empresa' => $empresa,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="add_empresa_delete", methods={"POST"})
     */
    public function delete(Request $request, Empresa $empresa): Response
    {
        if ($this->isCsrfTokenValid('delete'.$empresa->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($empresa);
            $entityManager->flush();
        }

        return $this->redirectToRoute('add_empresa_index');
    }
}
