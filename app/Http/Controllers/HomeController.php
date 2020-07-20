<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\VkUsers;

class HomeController extends Controller
{
    public function index(Request $request) {

    	$data = $request->session()->get('userData');

    	if(empty($data)) {
    		return view('welcome');
    	}

    	return redirect()->route('home');
    }

    public function home(Request $request) {
    	$data = $request->session()->get('userData');

    	if(empty($data)) {
    		return redirect()->route('index');
    	}

    	$userInfo = DB::table('vk_users')->where('user_id', $data['id'])->first();

    	return view('home', ['user' => $data, 'details' => $userInfo]);
    }

    public function logout(Request $request) {
        $request->session()->flush();

        return redirect()->route('index');
    }
}
