<?php

namespace floreriaLara\Http\Controllers;

use floreriaLara\Flor;
use Illuminate\Http\Request;
use floreriaLara\Http\Requests\StoreFlorRequest;


class floresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flores = Flor::all();
        return view('flores.index', compact('flores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('flores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFlorRequest $request)
    {
        
        $flor =new flor();

        if ($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/imgenes',$name);
        }
        /*return $request;*/
        
        $flor->nombre = $request->input('nombre');
        $flor->imagen = $name;
        $flor->comentarios = $request->input('comentarios');
        $flor->slug = $request->input('slug');
        $flor->save();

        return redirect()->route('flores.index');
        /*return 'Guardado!';*/
/*        return $request->input('nombre');*/
        /*return $request->all();*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show($slug)
    /*public function show(Flor $flor)*/
    {
        /*voy a eliminar lo del iplicit binding*/
        
        $flor = Flor::where('slug','=',$slug)->firstOrFail(); 

        /*$flor = Flor::find($id);*/
        

        return view('flores.show', compact('flor'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $flor = Flor::where('slug','=',$slug)->firstOrFail();
        return view('flores.edit', compact('flor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $flor = Flor::where('slug','=',$slug)->firstOrFail();
        $flor->fill($request->except('imagen'));
        if ($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $name = time().$file->getClientOriginalName();
            $flor->imagen = $name;
            $file->move(public_path().'/imgenes',$name);
        }
        $flor->save();
        return redirect()->route('flores.show', [ $flor->slug ])->with('status','Flor Actualizada Correctamente!') ;
        /*return 'Actualizado!';*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $slug)
    {
        $flor = Flor::where('slug','=',$slug)->firstOrFail();
        /*$flor->fill($request->except('imagen'));*/
        $file_path = public_path().'/imgenes/'.$flor->imagen;
        \File::delete($file_path);
        $flor->delete();
        return redirect()->route('flores.index');
        /*return 'Borrado!';*/
    }
}
