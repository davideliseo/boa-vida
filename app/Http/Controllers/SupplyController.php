<?php

namespace App\Http\Controllers;

use App\Http\Requests\SupplyRequest;
use App\Models\Supplier;
use App\Models\Supply;

class SupplyController extends Controller
{
    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Supply::class, 'supply');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = Supply::latest('id')->get();
        return view('supplies.index', compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SupplyRequest $request)
    {
        // Extracción de los datos
        $data = $request->validated();
        $dataExceptSupplier = array_diff_key($data, ['supplier_id' => null]);


        // Creación y obtención del insumo creado
        Supply::create($dataExceptSupplier);
        $supply = Supply::latest('id')->first();

        // Asignación de áreas
        $supplierId = json_decode($data['supplier_id'], true);
        $supplier = Supplier::find($supplierId);

        $supply->supplier()->associate($supplier);
        $supply->save();

        return redirect()->route('supplies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function show(Supply $supply)
    {
        return view('supplies.show', compact('supply'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function edit(Supply $supply)
    {
        return view('supplies.edit', compact('supply'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function update(SupplyRequest $request, Supply $supply)
    {
        // Extracción de los datos
        $data = $request->validated();
        $dataExceptSupplier = array_diff_key($data, ['supplier_id' => null]);

        // Actualizar insumo
        $supply->update($dataExceptSupplier);

        // Asignación de proveedor
        $supplierId = json_decode($data['supplier_id'], true);
        $supplier = Supplier::find($supplierId);

        $supply->supplier()->associate($supplier);
        $supply->save();

        return redirect()->route('supplies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supply $supply)
    {
        $supply->delete();
        return redirect()->route('supplies.index');
    }
}
