<?php

/**
 * Este archivo contiene un un array con los menus disponibles en la aplicacion,
 * cada menu es un array con los siguientes atributos:
 * 
 * label: Nombre del menu
 * route: Nombre de la ruta a la que apunta el menu
 * icon: Icono del menu usando la libreria de Boxicons
 */

return [
    [
        'label' => 'Inicio',
        'route' => 'home',
        'icon' => 'bx bxs-home-circle',
    ],
    [
        'label' => 'Servicios',
        'route' => 'home',
        'icon' => 'bx bx-list-check',
    ],
    [
        'label' => 'Noticias',
        'route' => 'home',
        'icon' => 'bx bx-news',
    ],
    [
        'label' => 'Contacto',
        'route' => 'home',
        'icon' => 'bx bxs-contact',
    ],
];