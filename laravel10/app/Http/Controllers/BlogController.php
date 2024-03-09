<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\BlogModel;
use App\Models\View\view;
use Illuminate\Support\Facades\DB;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
        // $page = $page::all(); 
        // return view('page.index')->with('page',$page);

        $page = DB::table('page')->get();
        return view ('page.index',$page);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): view
    {
        return view('page.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        page::create($input);
        return redirect('page')->with('flash_message', 'page Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): view
    {
        $page = page::find($id);
        return view('page.show')->with('page', $page);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): view
    {
        $page = page::find($id);
        return view('page.edit')->with('page', $page);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $page = page::find($id);
        $input = $request->all();
        $page->update($input);
        return redirect('page')->with('flash_message', 'page Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        page::destroy($id);
        return redirect('page')->with('flash_message', 'page deleted!');
    }
}
