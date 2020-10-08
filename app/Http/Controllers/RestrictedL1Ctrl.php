<?php

namespace App\Http\Controllers;
use App\Pizza;
use App\Mail\UserAction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class RestrictedL1Ctrl extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit($id){
        $piz = Pizza::findOrFail($id);
        return view('pizza_edit', compact('piz'));
    }
    public function update(Request $request, $id){
        $data = $request ->all();
        $piz = Pizza::findOrFail($id);
        $piz ->update($data);
        return redirect()->route('index');
    }
    public function del($id){
        $pizza = Pizza::findOrFail($id);
        $pizza ->delete();
        
        $user = Auth::user();
        $action = "DELETE";
        
        Mail::to('admin@me.com') -> send(new UserAction($user, $pizza, $action));
        return redirect() ->route('index'); 
    }

    public function newPizza(){
        return view('pizza_new');
    }

    public function store(Request $request){
        $data = $request-> all();
        $data = $request -> validate([
            'nome' => 'required|min:2|max:20',
            'prezzo' => 'required|gte:0',
            'disponibile' => 'required'
        ]);
        $pizza = Pizza::create($data);

        return redirect() -> route('index');
    }
}
