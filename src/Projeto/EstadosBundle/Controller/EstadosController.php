<?php

namespace Projeto\EstadosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\JsonResponse;

class EstadosController extends Controller
{
    /**
     * @Route("listar-estados")
     * @Template()
     */
    public function listarEstadosAction()
    {
        $estados = $this
            ->getDoctrine()
            ->getRepository("EstadosBundle:Estados")
            ->findAll();

        $aEstado = array();

        foreach ($estados as $estado){
            $aEstado[] = $estado->toArray();
        }

        $response = new JsonResponse($aEstado,200,array(
            'Content-Type' => 'application/json'));

        return $response;

    }
}
