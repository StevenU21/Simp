<?php

namespace App\Http\Controllers;

use App\Models\Preference;
use Illuminate\Http\Request;

/**
 * Class PreferenceController
 * @package App\Http\Controllers
 */
class PreferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preferences = Preference::paginate();

        return view('preference.index', compact('preferences'))
            ->with('i', (request()->input('page', 1) - 1) * $preferences->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $preference = new Preference();
        return view('preference.create', compact('preference'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Preference::$rules);

        $preference = Preference::create($request->all());

        return redirect()->route('preferences.index')
            ->with('success', 'Preference created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $preference = Preference::find($id);

        return view('preference.show', compact('preference'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $preference = Preference::find($id);

        return view('preference.edit', compact('preference'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Preference $preference
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Preference $preference)
    {
        request()->validate(Preference::$rules);

        $preference->update($request->all());

        return redirect()->route('preferences.index')
            ->with('success', 'Preference updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $preference = Preference::find($id)->delete();

        return redirect()->route('preferences.index')
            ->with('success', 'Preference deleted successfully');
    }
}
