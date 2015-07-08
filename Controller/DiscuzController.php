<?php

namespace Symforce\DiscuzBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DiscuzController extends Controller
{
    /**
     * @Route("/", name="_bbs_catch")
     */
    public function indexAction(Request $request)
    {

    }
}

