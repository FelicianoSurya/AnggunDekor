<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\ProductImage;

class ProductController extends Controller
{
    public function index() {
        $data = Product::with('type')->paginate(10);
        return view('Admin.product', [
            'products' => $data
        ]);
    }

    public function productType() {
        $data = productType::paginate(10);

        return view('Admin.productType', [
            'data' => $data,
        ]);
    }

    public function formType() {
        return view('Admin.ProductType.add');
    }

    public function editType($id){
        $data = ProductType::find($id);
        return view('Admin.ProductType.edit',[
            'data' => $data
        ]);
    }

    public function storeType(Request $request) {
        $validate = Validator::make($request->all(),[
            'name' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:2048'
        ]);

        if($validate->fails()){
            return back()->withErrors($validate);
        }
        
        if($request->hasFile('image')){
            $destination_path = 'public/Images/ProductType';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);
        }

        ProductType::create([
            'name' => $request->name,
            'image_path' => $image_name,
        ]);

        return redirect('/admin/productType')->with(['success' => 'success']);
    }

    public function edit(Request $request){
        $id = $request->id;

        $data = ProductType::find($id);

        if(!$data){
            return response(['message' => 'Tidak ada data']);
        }

        if($request->hasFile('image')){
            $validate = Validator::make($request->all(), [
                'name' => 'required',
                'image' => 'required|mimes:jpeg,jpg,png,gif|max:2048'
            ]);
        }else{
            $validate = Validator::make($request->all(),[
                'name' => 'required'
            ]);
        }

        if($validate->fails()){
            return back()->withErrors($validate);
        }

        if($request->hasFile('image')){
            $destination_path = 'public/Images/ProductType';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path,$image_name);

            $data->fill([
                'name' => $request->name,
                'image_path' => $image_name
            ]);
        }else{
            $data->fill([
                'name' => $request->name
            ]);
        }

        $data->save();
        return redirect('/admin/productType')->with(['info' => 'edit']);
    }

    public function destroy($id, Request $request){
        $data = ProductType::find($id);

        if($data){
            $data->delete();
            $request->session()->flash('status', 'delete');
            return back();
        }else{
            return response([
                'message' => 'Data tidak ada!'
            ]);
        }
    }

    // Product

    public function productForm() {
        $data = ProductType::all();
        return view('Admin.Product.add', [
            'type' => $data
        ]);
    }

    public function editProductForm($id){
        $data = Product::find($id);
        $type = ProductType::all();
        return view('Admin.Product.edit',[
            'data' => $data,
            'type' => $type,
        ]);
    }

    public function storeProduct(Request $request) {
        $validate = Validator::make($request->all(),[
            'name' => 'required',
            'description' => 'required',
            'type_id' => 'required',
        ]);

        if($validate->fails()){
            return back()->withErrors($validate);
        }

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'type_id' => $request->type_id,
        ]);

        return redirect('/admin/products')->with(['success' => 'success']);
    }

    public function editProduct(Request $request){
        $id = $request->id;

        $data = Product::find($id);

        if(!$data){
            return response(['message' => 'Tidak ada data']);
        }

        $validate = Validator::make($request->all(),[
            'name' => 'required',
            'type_id' => 'required'
        ]);

        if($validate->fails()){
            return back()->withErrors($validate);
        }

        if($request->description !== null){
            $data->fill([
                'name' => $request->name,
                'description' => $request->description,
                'type_id' => $request->type_id
            ]);
        }else{
            $data->fill([
                'name' => $request->name,
                'type_id' => $request->type_id
            ]);
        }

        $data->save();
        return redirect('/admin/products')->with(['info' => 'edit']);
    }

    public function destroyProduct($id, Request $request){
        $data = Product::find($id);

        if($data){
            $data->delete();
            $request->session()->flash('status', 'delete');
            return back();
        }else{
            return response([
                'message' => 'Data tidak ada!'
            ]);
        }
    }

    // Image Product

    public function indexImage($id){
        $product = Product::find($id);
        $data = ProductImage::where('product_id', $id)->with('product')->get();
        return view('Admin.image', [
            'product' => $product,
            'data' => $data
        ]);
    }

    public function formImage($id) {
        $product = Product::find($id);
        return view('Admin.Image.add',[
            'product' => $product
        ]);
    }

    public function editImageForm($product_id, $id){
        $data = Product::find($product_id);
        $image = ProductImage::find($id);
        return view('Admin.Image.edit',[
            'data' => $data,
            'image' => $image,
        ]);
    }

    public function storeImage(Request $request) {
        $validate = Validator::make($request->all(),[
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:2048'
        ]);

        if($validate->fails()){
            return back()->withErrors($validate);
        }
        
        if($request->hasFile('image')){
            $destination_path = 'public/Images/Product/' . $request->product_name;
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);
        }

        ProductImage::create([
            'image_path' => $image_name,
            'product_id' => $request->product_id,
        ]);

        return redirect('/admin/products/' . $request->product_id)->with(['success' => 'success']);
    }

    public function editImage(Request $request){
        $validate = Validator::make($request->all(),[
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:2048'
        ]);

        if($validate->fails()){
            return back()->withErrors($validate);
        }
        
        if($request->hasFile('image')){
            $destination_path = 'public/Images/Product/' . $request->product_name;
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);
        }

        $data = ProductImage::find($request->image_id);

        $data->fill([
            'image_path' => $image_name
        ]);

        $data->save();
        return redirect('/admin/products' . '/' . $request->product_id)->with(['info' => 'edit']);
    }

    public function destroyImage($product_id, $id, Request $request){
        $data = ProductImage::find($id);

        if($data){
            $data->delete();
            $request->session()->flash('status', 'delete');
            return back();
        }else{
            return response([
                'message' => 'Data tidak ada!'
            ]);
        }
    }

    public function active($product_id, $id){
        $data = ProductImage::find($id);

        $data_old = ProductImage::where('product_id', $product_id)->get();

        $data_remove = $data_old->where('active_image', 1)->first();

        if($data_remove !== null) {
            $data_remove->fill([
                'active_image' => 0
            ]);
            $data_remove->save();
        }

        $data->fill([
            'active_image' => 1
        ]);

        $data->save();

        return redirect('/admin/products' . '/' . $product_id)->with(['info' => 'edit']);
    }
}
