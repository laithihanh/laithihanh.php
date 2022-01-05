<?php

namespace App\Models;

/**
 * 
 */
class Cart{
	public $items = [];
	public $total_price = 0;
	public $total_quantity = 0;

	public function __construct(){		
			$this->items = session('cart') ? session('cart') :[];
			$this->total_price = $this->get_total_price();
			$this->total_quantity = $this->get_total_quantity();
		
	}

	public function add($product, $quantity=1,$color,$size){
		$key = $product->product_id . '-'.$color.'-'.$size;
		if(isset($this->items[$product->product_id])){
			$this->items[$key]['quantity'] += $quantity;
		}else{
			$item=[
				'product_id'=> $product->product_id,
				'name'=> $product->name,
				'price'=> $product->sale_price ? $product->sale_price : $product->price,
				'images'=> $product->images,
				'quantity'=> $quantity,
				'color_id'=>$color,
				'size_id'=>$size
			];
			$this->items[$key] = $item;
		}
			
		session(['cart'=>$this->items]);
	}
	public function remove($id,$color,$size){
		$key = $id . '-'.$color.'-'.$size;
		if(isset($this->items[$key])){
			unset($this->items[$key]);
		}
		session(['cart'=>$this->items]);
	}
	public function update($id,$color,$size,$quantity = 1){
		$key = $id . '-'.$color.'-'.$size;
		if(isset($this->items[$key])){
			$this->items[$key]['quantity'] = $quantity;
		}
		session(['cart'=>$this->items]);
	}
	public function clear(){
		session(['cart'=>'']);
	}
	public function get_total_price(){
		$t = 0;
		foreach($this->items as $item){
			$t += $item['price']*$item['quantity'];
		}
		return $t;	
	}
	public function get_total_quantity(){
		$t = 0;
		foreach($this->items as $item){
			$t += $item['quantity'];
		}
		return $t;	
	}
}
