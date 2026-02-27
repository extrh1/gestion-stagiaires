<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [
        [
            'id' => 1,  
            'title' => 'HP16D0195NF',
            'price' => 'Intel i5 12th Gen',
            'image' => 'img1.jpg',
            'description' => 'Laptop polyvalent conçu pour la bureautique et
            multimédia.'
        ],
        [
            'id' => 2,
            'title' => 'HP14424U3EA',
            'price' => 'Intel i3 11th Gen',
            'image' => 'img2.jpg',
            'description' => 'Portable léger adapté aux tâches quotidiennes.'
        ],
        [
            'id' => 3,
            'title' => 'HUA6901443442959',
            'price' => 'Ryzen 5 4600H',
            'image' => 'img3.jpg',
            'description' => 'Bonne performance pour bureautique + montage
            léger.'
        ],
        [
            'id' => 4,
            'title' => 'NXATHEF002',
            'price' => 'Intel i7 10th Gen',
            'image' => 'img4.jpg',
            'description' => 'Portable professionnel avec écran Full HD.'
        ],
    ];

    public function index(){
        return view('products.index' , ['products' => $this -> products]);
    }

    public function show($id){
        $product = collect($this->products)->firstWhere('id', $id);

        if (!$product) {
            abort(404, 'Produit non trouvé');
        }

        return view('products.show', compact('product'));
    }
    public function ajouter(){
        return view('products.ajouter');
    }
    public function store(Request $request){
        $request -> validate([
            'title' => 'required|string|min:3',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string|min:10',
        ]);
        return redirect()->back()->with('success','Prodit ajouté avec succés');
    }
    public function cree(){
        return view('compte.cree');
    }
    public function storeCompte(Request $request){
        $request -> validate([
            'name' => 'required|string|min:3',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|min:8|same:password',
        ]);
        return redirect()->back()->with('success','Compte créé avec succès');
    }
}
