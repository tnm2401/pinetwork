<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;
use Carbon\Carbon;
class MainController extends Controller
{
    // public function index(){
    //     $getblock = Http::get('https://api.testnet.minepi.com/ledgers?limit=20&order=desc')->json();
    //     $collection = collect($getblock);
    //     $data= $collection['_embedded']['records'];


    //     return view("layouts.main",compact('data'));
    // }

    public function index(){
        $getoperations = Http::get('https://api.testnet.minepi.com/operations?limit=30&order=desc')->json();
        $collection = collect($getoperations);
        $data= $collection['_embedded']['records'];

        $getreansactions = Http::get('https://api.testnet.minepi.com/transactions?limit=20&order=desc')->json();
        $collectiontran = collect($getreansactions);
        $tran= $collectiontran['_embedded']['records'];

        $getblock = Http::get('https://api.testnet.minepi.com/ledgers?limit=10&order=desc')->json();
        $collection = collect($getblock);
        $block= $collection['_embedded']['records'];


        return view("component.index",compact('data','tran','block'));
    }

    public function load_operations(){
        $getoperations = Http::get('https://api.testnet.minepi.com/operations?limit=30&order=desc')->json();
        $collection = collect($getoperations);
        $data= $collection['_embedded']['records'];
        return view('load.load-operations',compact('data'));
    }

    public function load_transactions(){
        $getoperations = Http::get('https://api.testnet.minepi.com/transactions?limit=20&order=desc')->json();
        $collection = collect($getoperations);
        $tran= $collection['_embedded']['records'];
        return view('load.load-transactions',compact('tran'));
    }
    public function load_transactions_home(){
        $getoperations = Http::get('https://api.testnet.minepi.com/transactions?limit=20&order=desc')->json();
        $collection = collect($getoperations);
        $tran= $collection['_embedded']['records'];
        return view('load.load-transactions-home',compact('tran'));
    }

    public function load_blocks(){
        $getoperations = Http::get('https://api.testnet.minepi.com/ledgers?limit=10&order=desc')->json();
        $collection = collect($getoperations);
        $block= $collection['_embedded']['records'];
        return view('load.load-blocks',compact('block'));
    }
    public function load_blocks_home(){
        $getoperations = Http::get('https://api.testnet.minepi.com/ledgers?limit=10&order=desc')->json();
        $collection = collect($getoperations);
        $block= $collection['_embedded']['records'];
        return view('load.load-blocks-home',compact('block'));
    }
/////////////////////////////////////////////////////////////////
     public function get_payment(Request $request){
         if($request->get("previous")){
            $token = $request->get("previous");
            $url = Http::get('https://api.testnet.minepi.com/payments?cursor='.$token.'&limit=50&order=desc')->json();
            $collection = collect($url);
            $data= $collection['_embedded']['records'];
         }
         else{
        $get_payment = Http::get('https://api.testnet.minepi.com/payments?limit=50&order=desc')->json();
        $collection = collect($get_payment);
        $data= $collection['_embedded']['records'];
         }

        return view("component.payment",compact('data'));
    }

    public function update_payment(){
        $get_payment = Http::get('https://api.testnet.minepi.com/payments?limit=50&order=desc')->json();
        $collection = collect($get_payment);
        $data= $collection['_embedded']['records'];
        return view('load.load-payment',compact('data'));
    }
/////////////////////////////////////////////////////////////////////////////
    public function get_transactions(Request $request){
        if($request->get("previous")){
           $token = $request->get("previous");
           $url = Http::get('https://api.testnet.minepi.com/transactions?cursor='.$token.'&limit=30&order=desc')->json();
           $collection = collect($url);
           $data= $collection['_embedded']['records'];
        }
        else{
       $get_transactions = Http::get('https://api.testnet.minepi.com/transactions?limit=30&order=desc')->json();
       $collection = collect($get_transactions);
       $data= $collection['_embedded']['records'];
        }

       return view("component.transactions",compact('data'));
   }

   public function update_transactions(){
       $get_transactions = Http::get('https://api.testnet.minepi.com/transactions?limit=30&order=desc')->json();
       $collection = collect($get_transactions);
       $data= $collection['_embedded']['records'];
       return view('load.load-transactions',compact('data'));
   }
///////////////////////////////////////////////////////////////////

   public function get_blocks(Request $request){
    if($request->get("previous")){
       $token = $request->get("previous");
       $url = Http::get('https://api.testnet.minepi.com/ledgers?cursor='.$token.'&limit=30&order=desc')->json();
       $collection = collect($url);
       $data= $collection['_embedded']['records'];
    }
    else{
   $get_blocks = Http::get('https://api.testnet.minepi.com/ledgers?limit=20&order=desc')->json();
   $collection = collect($get_blocks);
   $data= $collection['_embedded']['records'];
    }

   return view("component.blocks",compact('data'));
}

public function update_blocks(){
   $get_blocks = Http::get('https://api.testnet.minepi.com/ledgers?limit=20&order=desc')->json();
   $collection = collect($get_blocks);
   $data= $collection['_embedded']['records'];
   return view('load.load-blocks',compact('data'));
}

/////////////////////////////////////////////////////////////////

public function hash_detail($id){
    $get_detail_2 = Http::get('https://api.testnet.minepi.com/transactions/'.$id.'/operations')->json();
    $get_detail = Http::get('https://api.testnet.minepi.com/transactions/'.$id)->json();
    $data['1'] = collect($get_detail_2['_embedded']['records'])->first();
    $data['2'] = collect($get_detail);
   return view('component.detail-hash',compact('data'));
}

public function block_detail($id){
    $get_detail_2 = Http::get('https://api.testnet.minepi.com/ledgers/'.$id.'/transactions')->json();
    $get_detail = Http::get('https://api.testnet.minepi.com/ledgers/'.$id)->json();
    $data['1'] = collect($get_detail_2['_embedded']['records']);
    $data['2'] = collect($get_detail);
    // dd($data['1']);
   return view('component.detail-block',compact('data'));
}
}
