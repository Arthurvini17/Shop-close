<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ItemController extends Controller
{
    
  public Item $item;

  public function __construct()
  {
    $this->item = new Item;
  }
  
    public function index()
    {
      $search = request('search');

      if($search){
        $items = Item::where([
          ['name', 'like', '%' . $search. '%']
        ])->get();
      } else{
        $items = $this->item->all();
      }
       
        return view('items',['items' => $items, 'search' => $search]);
    }
    
    public function create()
    {
        return view('item_create');
    }




    public function store(Request $request)
    {
        $item = new Item;
        $item->name = $request->input('name');
        $item->description = $request->input('description');
        $item->preco = $request->input('preco');
        $item->image = $request->input('image');
        $item->marca = $request->input('marca');
        $item->grande = $request->input('grande');
    
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imagename = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/events'), $imagename);
            $item->image = $imagename;
        }
    
        $user = auth()->user();
        $item->user_id = $user->id;
        $item->save();
    
        return redirect()->route('items.index')->with('message', 'Criado com sucesso');
    }
    

   




    public function login(){
      return view('login');
    }

    public function register(){
      return view('register');
    }

    public function logout()
    {
      Auth::logout();

      return redirect()->route('items.index');
    }

    public function show($id)
{
    $item = Item::findOrFail($id);

    $eventOwner = User::where('id', $item->user_id)->first()->toArray();

    return view('item_show', ['item' => $item, 'eventOwner' => $eventOwner]);
}


    public function destroy(string $id)
    {
      $this->item->where('id', $id)->delete();
      return redirect()->route('items.index');
    }
}
