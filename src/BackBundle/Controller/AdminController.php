<?php

namespace BackBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class AdminController extends Controller
{
    public function loginAction()
    {
        $login = $pwd = null;
        if($_SERVER["REQUEST_METHOD"]  === 'POST')
        {
            $login = isset($_POST['login'])?$_POST['login']:null;
            $pwd = isset($_POST['password'])?$_POST['password']:null;
        }
        if($login =='david' and $pwd == 'enjana') echo "salit enjana";
        else echo "miala fa vendrana be poor";
        return $this->render('@Back\Default\login.html.twig');
    }
    public function inscriptionAction()
    {
        if($_SERVER["REQUEST_METHOD"]  === 'POST')
        {
            var_dump($_POST);
        }
        return $this->render('@Back\Default\inscription.html.twig');
    }
}
