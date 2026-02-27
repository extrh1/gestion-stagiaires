<?php
/*
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Route home avec résultat optionnel
Route::view("/home/{result?}", "calculatriceView")->name("home");

// Route POST pour calculer
Route::post("/calculer", function (Request $requete) {

    $a = $requete->input("a");
    $b = $requete->input("b");
    $operation = $requete->input("operation");
    $result = 0;

    switch ($operation) {
        case "+":
            $result = $a + $b;
            break;
        case "-":
            $result = $a - $b;
            break;
        case "*":
            $result = $a * $b;
            break;
        case "/":
            $result = ($b != 0) ? $a / $b : "Erreur (division par zéro)";
            break;
    }

    return redirect()->route("home", ["result" => $result]);
});
*/

/*
use Illuminate\Support\Facades\Route;

Route::view('/home', 'home');
Route::view('/about', 'about');
*/
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StagiaireController;
use App\Http\Controllers\AnnonceController;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::post('/products',[ProductController::class,'store'])->name('products.store');
Route::view('/ajouter', 'ajouter')->name('ajouter');
Route::view('/contact', 'contact')->name('contact');

/* Products */
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/ajouter', [ProductController::class, 'ajouter'])->name('products.ajouter');
Route::get('/compte/cree', [ProductController::class, 'cree'])->name('compte.cree');
Route::post('/compte/cree', [ProductController::class, 'storeCompte'])->name('compte.store');
Route::resource('stagiaire',StagiaireController::class);
Route::resource('annonces', AnnonceController::class);