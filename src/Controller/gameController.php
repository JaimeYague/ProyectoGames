<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class gameController extends AbstractController
{
    #[Route("/game")]
    public function showGame(){

        $game = [
            "name" => "Ghost of Tsushima",
            "description" => "Una tormenta se avecina. Adéntrate en el DIRECTOR'S CUT completo de Ghost of Tsushima para PC; forja tu propio camino a través de esta aventura de acción en mundo abierto y descubre sus maravillas ocultas. De la mano de Sucker Punch Productions, Nixxes Software y PlayStation Studios.",
            "image" => "https://cdn.akamai.steamstatic.com/steam/apps/2215430/header.jpg?t=1715880413", 
            "genre" => "Action, Adventure",
            "developer" => "Sucker Punch Productions",
            "rating" => "Muy positivas"

        ];
        return $this->render("Games/showGame.html.twig", 
        [
            "game" => $game

        ]
    );
    }

    #[Route("/games")]
    public function showGames(){

        $games = [
            [
                "name" => "Ghost of Tsushima",
                "description" => "Una tormenta se avecina. Adéntrate en el DIRECTOR'S CUT completo de Ghost of Tsushima para PC; forja tu propio camino a través de esta aventura de acción en mundo abierto y descubre sus maravillas ocultas. De la mano de Sucker Punch Productions, Nixxes Software y PlayStation Studios.",
                "image" => "https://image.api.playstation.com/vulcan/ap/rnd/202106/2322/ZSrFeb6XkqKiq2PZKWg20yfe.jpg", 
                "genre" => "Action, Adventure",
                "developer" => "Sucker Punch Productions",
                "rating" => "Muy positivas"
    
            ],
            [
                "name" => "Elden Ring",
                "description" => "Descubre un nuevo mundo abierto en Elden Ring, una colaboración entre FromSoftware y George R.R. Martin. Explora, lucha y define tu propio camino en esta épica aventura de acción y fantasía.",
                "image" => "https://cdn.akamai.steamstatic.com/steam/apps/1245620/header.jpg",
                "genre" => "Action, RPG",
                "developer" => "FromSoftware Inc.",
                "rating" => "Muy positivas"
            ],
            [
                "name" => "Hades",
                "description" => "Desafía al dios de los muertos mientras luchas por salir del Inframundo en este juego de acción roguelike. Con una narrativa envolvente y un combate rápido, Hades ofrece una experiencia única en cada partida.",
                "image" => "https://cdn.akamai.steamstatic.com/steam/apps/1145360/header.jpg",
                "genre" => "Action, Indie",
                "developer" => "Supergiant Games",
                "rating" => "Extremadamente positivas"
            ]
        ];
        return $this->render("Games/showGames.html.twig", 
        [
            "games" => $games

        ]
    );
    }

}