<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Opening;
use Illuminate\Http\Request;

class OpeningController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$openings = Opening::orderBy('id', 'desc')->paginate(10);

		return view('openings.index', compact('openings'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('openings.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$opening = new Opening();

		$opening->title = $request->input("title");
        $opening->type = $request->input("type");
        $opening->description = $request->input("description");
        $opening->duties = $request->input("duties");
        $opening->qualifications = $request->input("qualifications");
        $opening->apply = $request->input("apply");
        $opening->hours = $request->input("hours");
        $opening->pay = $request->input("pay");
        $opening->duration = $request->input("duration");
        $opening->location = $request->input("location");
        $opening->updated = $request->input("updated");
        $opening->entered_by = $request->input("entered_by");

		$opening->save();

		return redirect()->route('openings.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$opening = Opening::findOrFail($id);

		return view('openings.show', compact('opening'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$opening = Opening::findOrFail($id);

		return view('openings.edit', compact('opening'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$opening = Opening::findOrFail($id);

		$opening->title = $request->input("title");
        $opening->type = $request->input("type");
        $opening->description = $request->input("description");
        $opening->duties = $request->input("duties");
        $opening->qualifications = $request->input("qualifications");
        $opening->apply = $request->input("apply");
        $opening->hours = $request->input("hours");
        $opening->pay = $request->input("pay");
        $opening->duration = $request->input("duration");
        $opening->location = $request->input("location");
        $opening->updated = $request->input("updated");
        $opening->entered_by = $request->input("entered_by");

		$opening->save();

		return redirect()->route('openings.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$opening = Opening::findOrFail($id);
		$opening->delete();

		return redirect()->route('openings.index')->with('message', 'Item deleted successfully.');
	}

}
