<?php

namespace App\Controller;

use App\Entity\Editorial;
use App\Form\EditorialType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class EditorialController extends AbstractController
{
    /**
     * @Route("/editorial", name="editorial", methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('editorial/index.html.twig', [
            
        ]);
    }

    /**
     * @Route("/editorial/listado", name="editorial_listado", methods={"POST"})
     */
    public function listado(Request $request): Response
    {
        if ($request->isXmlHttpRequest()) {
            $editorial = new Editorial();
            $datos = $this->getDoctrine()->getRepository(Editorial::class)->listado($request->get('jtStartIndex'), $request->get('jtPageSize'));
            
            $jTableResult = array();
            $jTableResult['Result'] = "OK";
            $jTableResult['TotalRecordCount'] = $this->getDoctrine()->getRepository(Editorial::class)->conteo();
            $jTableResult['Records'] = $datos;
            $response = new Response(json_encode($jTableResult));
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        }
        

    }

    /**
     * @Route("/editorial/agregar", name="editorial_add", methods={"GET","POST"})
     */
    public function agregar(Request $request): Response
    {
        $editorial = new Editorial();
        $form = $this->createForm(EditorialType::class, $editorial);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $n_editorial = $this->getDoctrine()->getRepository(Editorial::class)->conteo($editorial->getEdtNombre());
            
            if ($n_editorial != 0) {
                /*throw $this->createNotFoundException(
                    'Editorial existente'
                );*/
                $this->addFlash('danger', 'Editorial existente');
            }else {
                $em = $this->getDoctrine()->getManager();
                $em->persist($editorial);
                $em->flush();
                $this->addFlash('success', 'La editorial fue ingresada exitosamente');
                return $this->redirectToRoute('editorial');
            }
        }
        return $this->render('editorial/agregar.html.twig', [
            'formulario' => $form->createView(),
        ]);
    }

    /**
     * @Route("/editorial/modify/{id}", name="editorial_modify", methods={"GET"})
     */
    public function modify(Request $request): Response
    {
        return $this->render('editorial/index.html.twig', [
            //'datos' => $datos,
        ]);
    }
}