<?php

namespace Projeto\EstadosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class EstadosController extends Controller
{
    /**
     * @Route("listar-estados")
     * @Template()
     */
    public function listarEstadosAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("listar-uf")
     * @Template()
     */
    public function listarUfAction()
    {
        return array(
                // ...
            );    }

}
