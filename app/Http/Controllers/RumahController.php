<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rumah;
class RumahController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     
     public function index(Request $request)
     {
         $query = Rumah::query();
     
         if ($request->has('search')) {
             $query->where('nama', 'like', '%' . $request->search . '%')
                   ->orWhere('lokasi', 'like', '%' . $request->search . '%');
         }
     
         $rumahs = $query->get();
         return view('rumah.index', compact('rumahs'));
     }

public function create()
{
    return view('rumah.create');
}

public function store(Request $request)
{
    Rumah::create($request->all());
    return redirect()->route('rumah.index');
}

public function edit(Rumah $rumah)
{
    return view('rumah.edit', compact('rumah'));
}

public function update(Request $request, Rumah $rumah)
{
    $rumah->update($request->all());
    return redirect()->route('rumah.index');
}

public function destroy(Rumah $rumah)
{
    $rumah->delete();
    return redirect()->route('rumah.index');
}
}
