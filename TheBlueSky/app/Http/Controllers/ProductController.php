<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Validator;


class ProductController extends Controller
{
    public function showProducts()
    {
        $products=Product::All();
        return view('Product.show',compact('products'));
    }

    //Pour acceder à la page create.blade.php
    public function create()
    {
        
        return view('Product.create');
    }

    // Pour recupérer les données dans la base de données
    public function store(Request $request)
    {
        // Ceci est le validator. Il permettra de valider les informations reçues depuis un formulaire avant de traiter les données. Si une erreur survient, on retourne cette erreur sans exécuter le reste.
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50|string',
            'prices' => 'required|integer',
            
            
        ]);

        if ($validator->fails()) {
            return redirect('Product.create')
                        ->withErrors($validator)
                        ->withInput();
        } else {
            // On se crée un objet de type product qui utilisera l'hydratation
            $product = new Product([
                "name" => $request->name,
                "prices" => $request->prices,
                
                
            ]);

            // Hydratation en base de données et donc insertion de la chambre
            $product->save();

            // Redirection automatique à utiliser à chaque envoi de formulaire
            return redirect('/products');
        }
    }

    // Pour accéder à la page edit.blade.php
    public function edit($id)
    {
       
        $product= Product::find($id);

        return view('Product.edit',compact('product'));

    }

    // Pour modifier les valeurs dans la base de données
    public function update(Request $request, $id)
    {

        $product= Product::find($id);
        $product->name = $request->name;
        $product->prices = $request->prices;
        

        $product->save();

        return redirect('/products');
    }

    //Pour Supprimer une Chambre
    public function delete($id)
    {
        $product= Product::find($id);
        $product->delete();


        return redirect('/products');

    }
}