<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Portfolio;
use App\Models\PortfolioType;
use Illuminate\Support\Facades\Validator;

class PortfolioController extends Controller
{
    public function index() {
        $data = Portfolio::with('type')->paginate(10);

        return view('Admin.portfolio',[
            'portfolio' => $data
        ]);
    }

    public function portfolioType() {
        $data = PortfolioType::paginate(10);

        return view('Admin.portfolioType', [
            'data' => $data,
        ]);
    }

    public function formType() {
        return view('Admin.PortfolioType.add');
    }

    public function editType($id){
        $data = PortfolioType::find($id);
        return view('Admin.PortfolioType.edit',[
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
            $destination_path = 'public/Images/PortfolioType';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);
        }

        PortfolioType::create([
            'name' => $request->name,
            'image_path' => $image_name,
        ]);

        return redirect('/admin/portfolioType')->with(['success' => 'success']);
    }

    public function edit(Request $request){
        $id = $request->id;

        $data = PortfolioType::find($id);

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
            $destination_path = 'public/Images/PortfolioType';
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
        return redirect('/admin/portfolioType')->with(['info' => 'edit']);
    }

    public function destroy($id, Request $request){
        $data = PortfolioType::find($id);

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


    // Portfolio 

    public function portfolioForm() {
        $data = PortfolioType::all();
        return view('Admin.Portfolio.add', [
            'type' => $data
        ]);
    }

    public function editPortfolioForm($id){
        $data = Portfolio::find($id);
        $type = PortfolioType::all();
        return view('Admin.Portfolio.edit',[
            'data' => $data,
            'type' => $type,
        ]);
    }

    public function storePortfolio(Request $request) {
        $validate = Validator::make($request->all(),[
            'name' => 'required',
            'type_id' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:2048'
        ]);

        if($validate->fails()){
            return back()->withErrors($validate);
        }
        
        if($request->hasFile('image')){
            $destination_path = 'public/Images/Portfolio';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);
        }

        Portfolio::create([
            'name' => $request->name,
            'type_id' => $request->type_id,
            'image_path' => $image_name,
        ]);

        return redirect('/admin/portfolio')->with(['success' => 'success']);
    }

    public function editPortfolio(Request $request){
        $id = $request->id;

        $data = Portfolio::find($id);

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
            $destination_path = 'public/Images/Portfolio';
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
        return redirect('/admin/portfolio')->with(['info' => 'edit']);
    }

    public function destroyPortfolio($id, Request $request){
        $data = Portfolio::find($id);

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
}
