<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index( $pageNumber = 1 )
	{
        $items = Item::get();

		return view('items.index')->with([
            'pageNumber' => $pageNumber,
            'items'      => $items
        ]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// TODO
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// TODO
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  String slug
	 * @return Response
	 */
	public function show($slug)
	{
        // TODO sanitize slug

        $item = Item::get([
            'slug' => $slug
        ]);

        return view('items.item')->with([
            'item' => $item
        ]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// TODO
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// TODO
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// TODO
	}

}
