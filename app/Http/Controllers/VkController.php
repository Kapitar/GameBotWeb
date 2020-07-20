<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VkController extends Controller
{
    public function auth(Request $request) {

    	if (!$_GET['code']) {
    		exit("error code");
    	}

    	$token = json_decode(file_get_contents("https://oauth.vk.com/access_token?client_id=7541898&redirect_uri=https://gamebot.site/auth&client_secret=".$secret."&code=".$_GET['code']), true);

    	if(!$token) {
    		exit("error token");
    	}

    	$data = json_decode(file_get_contents("https://api.vk.com/method/users.get?user_id=".$token['user_id'].'&access_token='.$token['access_token'].'&fields=uid,first_name,last_name,photo_big,sex&v=5.52'), true);

    	if(!$data) {
    		exit("error data");
    	}

		$data = $data['response'][0];

		$request->session()->put('userData', $data);

		return redirect()->route('home')->with('success', 'Вы успешно авторизированы под именем ' . $data['first_name']. ' ' . $data['last_name']);

    }
}
