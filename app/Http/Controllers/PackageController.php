<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::all();

        return view('package.index', compact('packages'));
    }

    public function show(Package $package)
    {
        return view('package.show', compact('package'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|integer',
            'duration' => 'required|integer',
        ]);

        Package::create($request->all());

        return redirect(route('package.index'));
    }

    public function update(Request $request, Package $package)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|integer',
            'duration' => 'required|integer',
        ]);

        $package->update($request->all());

        return redirect(route('package.index'));
    }

    public function destroy(Package $package)
    {
        $package->delete();

        return redirect(route('package.index'));
    }
}
