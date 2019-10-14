<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Newsletter;
use Illuminate\Pagination\LengthAwarePaginator;
class AdminController extends Controller
{




    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(Request $request)
    {
    	$page = $request->page ?? 1;
    	
    	$count = 3;
    	$offset = ($page-1)*$count;
		$subscribers = Newsletter::getMembers('subscribers', ['count'=>$count, 'offset'=>$offset]);
        $items = $subscribers['members'];
        $currentPage = $page;
        $itemCollection = collect($items);
 
        $paginatedItems = new LengthAwarePaginator($itemCollection , $subscribers['total_items'], $count);
 
        $paginatedItems->setPath($request->url());
 
        return view('admin.index', ['subscribers' => $paginatedItems]);

    }

    public function testMail(){
    	
    }
}