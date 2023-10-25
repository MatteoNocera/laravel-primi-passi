<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    return view('home');
});

Route::get('/exercise', function () {

    $data = [
        'title' => 'Laravel-primi-passi',
        'text' => 'Ciao @qui, oggi iniziamo a muovere i primi passi con questo fantastico framework che è Laravel! :mani_a_cuore:
                    Per prima cosa, creiamo un nuovo progetto Laravel 10, utilizzando questo comando: composer create-project laravel/laravel laravel-primi-passi
                    Al termine dell\'installazione, entriamo nella cartella del progetto cd laravel-primi-passi e avviamo l\'artisan serve con uno di questi due comandi: php artisan serve oppure php -S localhost:8000 -t public
                    A questo punto, iniziamo a prendere confidenza con le rotte e le views: cancelliamo la view welcome.blade.php e creiamo una nostra homepage. Facciamo quindi sì che la rotta / visualizzi home.blade.php Inizialmente stampiamo un Hello World, poi passiamo dei dati alla view in modo da visualizzarli dinamicamente con Blade.',
        'bonus' => 'Creiamo più di una pagina e visualizziamo un header menu con i link di tutte le pagine, utilizzando la funzione route()'

    ];
    return view('exercise', $data);
});
