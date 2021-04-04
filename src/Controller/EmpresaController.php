<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Empresa;
use App\Form\EmpresaType;
use App\Entity\User;

class EmpresaController extends AbstractController
{
  /**
   * @Route("/")
   */
   public function index()
   {   
          return $this->render('index.html.twig', [
            'search' => '', 
            'empresas' => '',
            'msg_erro' => ''
          ]);
   }

    /**
     * @Route("/search", methods={"POST"})
     */
   public function search(Request $request): Response
   {
      
      $search = $request->request->get('search');
    
      $empresas = $this->getDoctrine()
      ->getRepository(Empresa::class)
      ->findBy([
        'title'=>$search,
        ],
        ['title'=>'asc']);

      $msg_erro = '';
      if(!$empresas){
        $msg_erro = 'Empresa não encontrada!';
      }
      return $this->render('index.html.twig', [
        'search' => $search,
        'empresas' => $empresas,
        'msg_erro' => $msg_erro,
      ]);
          
   }
   
   /**
    * @Route("/login")
   */
   public function login()
   {
    return $this->render('login.html.twig', [
      'error'=>'']);
   }

   /**
    * @Route("/logar", methods={"POST"})
    */
   public function logar(Request $request): Response
   {
      
      $usuario = $request->request->get('usuario');
      $senha   = $request->request->get('senha');
    
      $user = $this->getDoctrine()
      ->getRepository(User::class)
      ->findBy([
          'usuario'=>$usuario,
          'senha'=>$senha 
        ],['usuario'=>'asc']);

      if(!$user){
        return $this->render('login.html.twig', [
          'error'=>'Usuário não encontrado!']);
      }else{
        $empresa = $this->getDoctrine()
        ->getRepository(Empresa::class)
        ->findAll();
        return $this->render('admin.html.twig', [
          'empresas' =>$empresa]);        
      }
   }

   /**
    * @Route("/about/{cod}")
    */
   public function about($cod)
   {
     $empresa = $this->getDoctrine()
     ->getRepository(Empresa::class)
     ->find($cod);

     if(!$empresa){
       return $this->render('about.html.twig', [
         'empresa'=>'',
         'error'=>'Empresa não encontrada!']);
     }else{
       return $this->render('about.html.twig', [
         'empresa'=>$empresa,
         'error'=>'']);    
      }
    }
}
