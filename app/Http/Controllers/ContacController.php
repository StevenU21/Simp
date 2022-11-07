<?php

namespace App\Http\Controllers;

use App\Models\Contac;
use Illuminate\Http\Request;

/**
 * Class ContacController
 * @package App\Http\Controllers
 */
class ContacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacs = Contac::paginate();

        return view('contac.index', compact('contacs'))
            ->with('i', (request()->input('page', 1) - 1) * $contacs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contac = new Contac();
        return view('contac.create', compact('contac'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Contac::$rules);

        $contac = Contac::create($request->all());

        return redirect()->route('contacs.index')
            ->with('success', 'Contac created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contac = Contac::find($id);

        return view('contac.show', compact('contac'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contac = Contac::find($id);

        return view('contac.edit', compact('contac'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Contac $contac
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contac $contac)
    {
        request()->validate(Contac::$rules);

        $contac->update($request->all());

        return redirect()->route('contacs.index')
            ->with('success', 'Contac updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $contac = Contac::find($id)->delete();

        return redirect()->route('contacs.index')
            ->with('success', 'Contac deleted successfully');
    }
}
