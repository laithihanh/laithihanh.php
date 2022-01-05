<?php
namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderDtail;
use App\Models\Customer;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $order= Order::with('cus:id,name,email,phone,address')->paginate(10);
        return view ('backend.order.index',compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Order $order)
    {
        $order->add();
        return redirect()->route('order.store');
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $order = Order::find($id);
       if($order->orderdetail->count()==0){
        $order->delete();
        return redirect()->back()->withSuccess('Xóa bản ghi thành công');
       }
        return redirect()->back()->withSuccess('Xóa bản ghi không thành công');
    }


    public function viewOrder(Request $req,$id){

        if($req->ajax()){
            $orders= OrderDtail::with('product')
            ->where('order_id',$id)->get();
             $order= Order::with('cus')->where('order_id',$id)->get();
            $html = view('backend.components.order',compact('orders','order'))->render();
            return response()->json($html);
        }
    }

    
    public function xoa($id){
        OrderDtail::find($id)->delete();
        return redirect()->back()->withSuccess('Xóa bản ghi thành công'); 
    }
}
