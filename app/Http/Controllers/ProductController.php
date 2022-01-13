<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\Service;
use App\Models\Category;
use App\Models\Product;
 
class ProductController extends Controller
{
    public function index()
    {
      $informations = Controller::data();
      $services = Service::all();
      $categories = Category::all();
      return view('product.index', compact('informations', 'services', 'categories'));
    }

    public function show(Category $category)
    {
      $informations = Controller::data();
      $services = Service::all();
      $categories = Category::all();
      $product = Product::where('category_id', $category->id)->first();
      $category2= $category;
      return view('product.show', compact('informations', 'services', 'categories', 'category2', 'product'));
    }

    public function product(Category $category, Product $product)
    {
      $informations = Controller::data();
      $services = Service::all();
      $categories = Category::all();
      $category2= $category;
      return view('product.show', compact('informations', 'services', 'categories', 'category2', 'product'));
    }
}
