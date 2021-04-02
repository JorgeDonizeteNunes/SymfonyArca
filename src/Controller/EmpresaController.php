<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmpresaController extends AbstractController
{
  /**
   * @Route("/")
   */
  public function index()
  {
    return $this->render('index.html.twig');
  }

/**
   * @Route("/login")
   */
  public function login()
  {
    return $this->render('login.html.twig');
  }

  /**
   * @Route("/add")
   */
  public function add()
  {
    return $this->render('add.html.twig');
  }

    /**
   * @Route("/admin")
   */
  public function admin()
  {
    return $this->render('admin.html.twig');
  }

    /**
   * @Route("/about/{cod}")
   */
  public function about($cod)
  {
    return $this->render('about.html.twig');
  }

  /**
   * @Route("/empresa/{cod}")
   */
  public function empresaDetalhe($cod){
   $empresa = [
     'Coca', 'Sprit', 'Fanta', 'Schin'
   ];

    return $this->render('empresa/empresaDetalhe.html.twig', [
      'empresa' => 'Webmobby',
      'cod' => $cod,
      'empresas' => $empresa
    ]);
    //return new Response('Detalhe ');
  }
}
