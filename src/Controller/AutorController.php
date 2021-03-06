<?php

namespace App\Controller;

use App\Entity\Autor;
use App\Form\AutorType;
use App\Repository\AutorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/autor")
 */
class AutorController extends AbstractController
{
    /**
     * @Route("/", name="autor_index", methods={"GET"})
     */
    public function index(AutorRepository $autorRepository): Response
    {
        return $this->render('autor/index.html.twig', [
            'autors' => $autorRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="autor_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $autor = new Autor();
        $form = $this->createForm(AutorType::class, $autor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $cant = $this->getDoctrine()->getRepository(Autor::class)->conteo($autor->getAutNombre(), $autor->getAutApellido());
            
            if ($cant != 0)
                $this->addFlash('danger', 'Autor existente');
            else{
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($autor);
                $entityManager->flush();
                $this->addFlash('success', 'Autor ingresado exitosamente');
                return $this->redirectToRoute('autor_index');
            }
            
        }

        return $this->render('autor/new.html.twig', [
            'autor' => $autor,
            'formulario' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{autId}", name="autor_show", methods={"GET"})
     */
    public function show(Autor $autor): Response
    {
        return $this->render('autor/show.html.twig', [
            'autor' => $autor,
        ]);
    }

    /**
     * @Route("/{autId}/edit", name="autor_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Autor $autor): Response
    {
        $form = $this->createForm(AutorType::class, $autor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('success', 'Autor modificado exitosamente');
            return $this->redirectToRoute('autor_index');
        }

        return $this->render('autor/edit.html.twig', [
            'autor' => $autor,
            'formulario' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{autId}", name="autor_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Autor $autor): Response
    {
        if ($this->isCsrfTokenValid('delete'.$autor->getAutId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($autor);
            $entityManager->flush();
        }

        return $this->redirectToRoute('autor_index');
    }
}
