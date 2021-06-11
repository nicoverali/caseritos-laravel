<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        return view('home')
            ->with('products', Product::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return Application|Factory|View
     */
    public function show(Product $product)
    {
        return view('product')
            ->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return Application|Factory|View
     */
    public function edit(Product $product, Request $request)
    {
        if ($request->user()->cannot('updateAndDelete', $product)){
            abort(403);
        }

        return view('edit-product')
            ->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Product $product
     * @return RedirectResponse
     */
    public function update(Request $request, Product $product)
    {
        if ($request->user()->cannot('updateAndDelete', $product)){
            abort(403);
        }

        $attributes = $request->validate([
            'name' => 'required|max:255',
            'picture' => 'nullable|image',
            'description' => 'required',
            'price' => 'required|numeric|gt:0',
            'stock' => 'required|numeric|gt:0'
        ]);

        $product->update($attributes);
        return redirect()->back()->with('product', $product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return Application|Redirector|RedirectResponse
     */
    public function destroy(Product $product, Request $request)
    {
        if ($request->user()->cannot('updateAndDelete', $product)){
            abort(403);
        }

        $product->delete();
        return redirect(route('products'));
    }
}
