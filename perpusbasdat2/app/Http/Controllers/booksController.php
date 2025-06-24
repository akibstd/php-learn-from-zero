<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
Use App\Models\books;

class booksController extends Controller
{
    public function index(){
        $books=books::paginate(15);
       
        return view('buku.index',['books'=>$books]);
    }

    public function create(){
          return view('buku.create');
    }
    
     public function store(Request $request){
         $request->validate([
            'nama_buku'=>'required',
            'pengarang'=>'required|min:5',
            'tahun_terbit' =>'required',
          ]);
          
        books::create([
            'nama_buku'=>$request->nama_buku,
            'pengarang'=>$request->pengarang,
            'tahun_terbit'=>$request->tahun_terbit,
          ]);
           
       return redirect(route('buku.index')); 
      
    }

    public function edit($id){

      $books=books::select('*') ->where('id', $id)
          ->get();
      
         return view('buku.edit',['books'=>$books]);
    }
    
}
