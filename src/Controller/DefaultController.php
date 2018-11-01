<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function index()
    {
        return new Response('
            <html>
                <head>
                    <title>
                        Hello World Controller
                    </title>
                </head>
                <body>
                    <hr>
                    <p style="color:#1d804b;">Hello World! <strong>I am Symfony4!!!</strong></p>
                    <hr>
                </body>
            </html>
        ');
    }
}