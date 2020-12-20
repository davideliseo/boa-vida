<?php

namespace App\Http\Controllers;

use App\Models\Supply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupplyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('supplies.index');
    }

    public function show(Supply $supply)
    {
        return view('supplies.show', compact('supply'));
    }

    public function create()
    {
        return view('supplies.create');
    }

    public function edit(Supply $supply)
    {
        return view('supplies.edit', compact('supply'));
    }

    public function update(Supply $supply)
    {
        $data = request()->validate(Supply::rules());
        $supply->update($data);
        return redirect()->route('supplies.index');
    }

    public function store()
    {
        $data = request()->validate(Supply::rules());
        DB::table('supplies')->insert($data);
        return redirect()->route('supplies.index');
    }

    public function destroy(Supply $supply)
    {
        $supply->delete();
        return redirect()->route('supplies.index');
    }
}
