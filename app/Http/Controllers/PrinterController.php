<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePrinterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrinterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $printers = DB::table('printers')
            ->get();
        // dd($printers);
        return view('printers.index', ['printers' => $printers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('printers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrinterRequest $request)
    {
        $validated = $request->validated();
        if (DB::table('printers')->insert($validated)) {
            return redirect()->route('printers.index')->with('success', 'printer created successfully');
        }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $printer = DB::table('printers')
            ->where('printers.id', '=', $id)
            ->first();
        return view('printers.edit', ['printer' => $printer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreprinterRequest $request, string $id)
    {
        $validated = $request->validated();
        DB::table('printers')
            ->where('printers.id', '=', $id)
            ->update($validated);
        return redirect()->route('printers.index')->with('success', 'printer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('printers')->delete($id);
        // DB::table('printers')
        //     ->where('id', '=', $id)
        //     ->delete();
        return redirect()->route('printers.index')->with('success', 'printer deleted successfully');
    }
}
