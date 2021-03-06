<?php

namespace App\Http\Controllers;
use App\Order;
use App\Supplies;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class ordersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function order(Request $request){
        $userid = \Auth::id();
        $user = \App\User::with('orders', 'orders.supply')->find($userid);
        $orders = $user->orders;
        $amount = $orders->count('supplies_id');

        \App\Order::update([
           'is_completed' => 1
        ])->where('id' == $userid);

    }

    public function index()
    {
        $userid = \Auth::id();
        $user = \App\User::with('orders', 'orders.supply')->find($userid);
        $orders = $user->orders;



        $supplies = Supplies::all();
        $price = 0;

      foreach ($orders as $order){

                $price = $price+ $order->supply->price;


        }
      $total = $price;

        return view('Orders/index', ['user' => $user,
                                           'orders' => $orders,
                                           'total' => $total,
                                           'supplies' => $supplies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        \App\Order::insert([
           'user_id' => Auth::user()->id,
           'supplies_id' => $request->product,
            'is_completed' => 0,
            'created_at' => now(),
            'updated_at' => now()

       ]);

        return redirect()->route('inkoop.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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


        $userid = \Auth::id();
        $user = \App\User::with('orders', 'orders.supply')->find($userid);
        $orders =\App\Order::find($id);
        $supplies = \App\Supplies::all();

       $orders->update([
           'is_completed' => 1
       ]);

        return view('inkoop.index', ['products' => $supplies]);
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
