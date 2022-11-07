<?php

namespace App\Http\Controllers;

use App\Models\PaymentType;
use Illuminate\Http\Request;

/**
 * Class PaymentTypeController
 * @package App\Http\Controllers
 */
class PaymentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paymentTypes = PaymentType::paginate();

        return view('payment-type.index', compact('paymentTypes'))
            ->with('i', (request()->input('page', 1) - 1) * $paymentTypes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paymentType = new PaymentType();
        return view('payment-type.create', compact('paymentType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PaymentType::$rules);

        $paymentType = PaymentType::create($request->all());

        return redirect()->route('payment-types.index')
            ->with('success', 'PaymentType created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paymentType = PaymentType::find($id);

        return view('payment-type.show', compact('paymentType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paymentType = PaymentType::find($id);

        return view('payment-type.edit', compact('paymentType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PaymentType $paymentType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentType $paymentType)
    {
        request()->validate(PaymentType::$rules);

        $paymentType->update($request->all());

        return redirect()->route('payment-types.index')
            ->with('success', 'PaymentType updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $paymentType = PaymentType::find($id)->delete();

        return redirect()->route('payment-types.index')
            ->with('success', 'PaymentType deleted successfully');
    }
}
