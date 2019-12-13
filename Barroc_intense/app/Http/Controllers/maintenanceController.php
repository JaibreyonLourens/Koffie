<?php

namespace App\Http\Controllers;

use App\work_order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class maintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workorders = work_order::All();

        return view('maintenance/index', ['workorders' => $workorders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('maintenance/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        DB::table('work_orders')->insert([
            'user_id' => $request->user_id,
            'description' => $request->description,
            'amount' => 0
        ]);
        $workorders = work_order::All();
        return view('maintenance.index', ['workorders' => $workorders]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('maintenance.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $work_order = work_order::find($id);

        return view('maintenance.edit', ['workorder' => $work_order]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $work_order = work_order::find($id);

        $work_order->update([
            'amount' => $request->amount,
            'description' => $request->description]);

        $workorders = work_order::All();
        return redirect()->route('maintenance.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
