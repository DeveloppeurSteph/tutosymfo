<?php

namespace EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name, $params = array())
    {
        $params["name"] = $name;
        return $this->render('EcommerceBundle:Default:index.html.twig',$params);
    }
}
