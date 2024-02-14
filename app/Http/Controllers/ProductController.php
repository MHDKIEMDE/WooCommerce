<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function boutique()
    {
        // Récupérer toutes les catégories
        $categories = Categorie::all();

        // Récupérer tous les produits avec leurs catégories correspondantes paginés par 10 par page
        $productsWithCategories = Product::with('category')->paginate(10);

        return view('shop', compact('categories', 'productsWithCategories'));
    }

    public function cart()
    {
        return view('cart');
    }

    public function checkout()
    {
        return view('checkout');
    }
}
