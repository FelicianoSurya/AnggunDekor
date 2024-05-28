<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductType;
use App\Models\Product;
use App\Models\Portfolio;
use App\Models\PortfolioType;
use App\Models\PortfolioImage;

class UserController extends Controller
{
    public function index(){
        return view('Page.home', [
            'productType' => ProductType::all(),
            'portfolio' => Portfolio::all()
        ]);
    }

    public function products(){
        return view('Page.product', [
            'productType' => ProductType::all(),
            'portfolio' => Portfolio::all()
        ]);
    }

    public function subProducts($id){
        $data = Product::where('type_id', $id)->with(['productImage' => function ($query) {
            $query->where('active_image', '=', 1);
        }])->get();
        return view('Page.sub-product', [
            'products' => $data,
            'productType' => ProductType::all(),
            'portfolio' => Portfolio::all()
        ]);
    }

    public function detailProduct($typeId, $id){
        $data = Product::where('id', $id)->with(['productImage' => function ($query) {
            $query->where('active_image', '=', 1);
        }])->with(['subProductImage' => function ($query){
            $query->where('active_image', '!=', 1);
        }])->first();
        return view('Page.detail-product', [
            'product' => $data,
            'productType' => ProductType::all(),
            'portfolio' => Portfolio::all()
        ]);
    }

    public function portfolio(){
        $data = Portfolio::all();
        return view('Page.portfolio', [
            'portfolio' => $data,
            'productType' => ProductType::all(),
            'portfolio' => Portfolio::all()
        ]);
    }

    public function subPortfolio($id) {
        $portfolio = Portfolio::find($id);
        $data = PortfolioImage::where('portfolio_id', $id)->get();

        return view('Page.detail-portfolio', [
            'portfolio' => $data,
            'data' => $portfolio,
            'productType' => ProductType::all(),
            'portfolio' => Portfolio::all()
        ]);
    }

    public function services(){
        return view('Page.services',[
            'productType' => ProductType::all(),
            'portfolio' => Portfolio::all()
        ]);
    }

    public function contactUs(){
        return view('Page.contact',[
            'productType' => ProductType::all(),
            'portfolio' => Portfolio::all()
        ]);
    }
}
