<?php

namespace App\Http\Controllers\CustomerAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categorie;
use App\Produit;
class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $produits =Produit::all();
      return view('customer.produit.index',compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories=Categorie::pluck('nom_categorie','id');
        return view('customer.produit.produit',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $formInput=$request->except('image');

//        validation
      $this->validate($request,[
          'nom'=>'required',
          'description'=>'required',
          'prix'=>'required',
          'image'=>'image|mimes:png,jpg,jpeg|max:10000'
      ]);
//        image upload
      $image=$request->image;
      if($image){
          $imageName=$image->getClientOriginalName();
          $image->move('images',$imageName);
          $formInput['image']=$imageName;
      }

      Produit::create($formInput);
      return redirect()->route('produit.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $categories=Categorie::pluck('nom_categorie','id');
        $produits=Produit::findOrFail($id);
        return view('customer.produit.editer',compact('produits','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $formInput=$request->except('image');

 //        validation
      $this->validate($request,[
          'nom'=>'required',
          'description'=>'required',
          'prix'=>'required',
          'image'=>'image|mimes:png,jpg,jpeg|max:10000'
      ]);
 //        image upload
      $image=$request->image;
      if($image){
          $imageName=$image->getClientOriginalName();
          $image->move('images',$imageName);
          $formInput['image']=$imageName;
      }

      Produit::create($formInput);
      return redirect()->route('produit.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Produit::find($id)->delete();
    return redirect()->route('produit.index');
    }
}
