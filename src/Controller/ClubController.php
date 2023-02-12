<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class ClubController extends AbstractController
{
    #[Route('/club/get/{nom}', name: 'app_club')]
    public function index($nom): Response
    {
        return $this->render('club/detail.html.twig', [
            'controller_name' => 'ClubController',
            'noame'=>$nom
        ]);
    }
    #[Route('/getname/{nom}', name:'app_get_name')]
    public function getName($nom){
        return new Response('Bonjour '.$nom);
    }
#[Route('/listeform', name:'app_listform')]
    public function list(){

        $formations = array(
            array('ref' => 'form147', 'Titre' => 'Formation Symfony 4','Description'=>'formation pratique', 'date_debut'=>'12/06/2020', 'date_fin'=>'19/06/2020', 'nb_participants'=>19) ,
            array('ref'=>'form177','Titre'=>'Formation SOA' , 'Description'=>'formation theorique','date_debut'=>'03/12/2020','date_fin'=>'10/12/2020', 'nb_participants'=>0),
            array('ref'=>'form178','Titre'=>'Formation Angular' , 'Description'=>'formation theorique','date_debut'=>'10/06/2020','date_fin'=>'14/06/2020', 'nb_participants'=>12));


        return $this->render('club/list.html.twig',[
            "formation" => $formations,

        ]);


    }

#[Route('/index', name: 'app_index')]
    public function index1(): Response
    {
        return $this->render('club/index.html.twig', [
            'controller_name' => 'ClubController',

        ]);
    }
}
