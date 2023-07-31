<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    
  public Item $item;

  public function __construct()
  {
    $this->item = new Item;
  }
  
    public function index()
    {
        $items = $this->item->all();
        return view('items', ['items' => $items]);
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
    
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imagename = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/events'), $imagename);
            $item->image = $imagename;
        }
    
        $item->save();
    
        return redirect()->route('items.index')->with('message', 'Criado com sucesso');
    }
    

   




    


    public function show(Item $item)
    {
        return view('item_show', ['item' => $item]);
    }

    public function destroy(string $id)
    {
      $this->item->where('id', $id)->delete();
      return redirect()->route('items.index');
    }
}
