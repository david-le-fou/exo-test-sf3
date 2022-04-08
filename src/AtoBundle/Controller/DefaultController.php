<?php

namespace AtoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Ato\Default\index.html.twig',array('test'=>'enjana',
                                'menu'=>array('Acceuil'=>'url',
                                            'Contact'=>'url'
                                        )
                            ));
    }
}
