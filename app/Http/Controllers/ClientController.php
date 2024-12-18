<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use App\Models\Client;

class ClientController extends Controller
{   
    public function all() {
        $clients = Client::get();
        
        return response()->json(['Clients' => $clients]);
    }
    
    public function detail($id) {
        $client = Client::find($id);
        
        return response()->json(['Client' => $client]);
    }

    public function create(Request $request) {
        $client = new Client();
        $client->name = $request->name;
        $client->slug = $request->slug;
        $client->is_project = $request->is_project;
        $client->self_capture = $request->self_capture;
        $client->client_prefix = $request->client_prefix;
        $client->client_logo = $request->client_logo;
        $client->address = $request->address;
        $client->phone_number = $request->phone_number;
        $client->city = $request->city;
        $client->save();
        
        Redis::set($client->slug, json_encode(['client' => $client ]));

        return response()->json([
            'message' => 'Client created successfully!', 
            'client' => $client
        ]);
    }

    public function update(Request $request) {
        $client = Client::where(['slug' => $request->slug]);
        $client->name = $request->name;
        $client->slug = $request->slug;
        $client->is_project = $request->is_project;
        $client->self_capture = $request->self_capture;
        $client->client_prefix = $request->client_prefix;
        $client->client_logo = $request->client_logo;
        $client->address = $request->address;
        $client->phone_number = $request->phone_number;
        $client->city = $request->city;
        $client->save();
 
        Redis::set($client->slug, json_encode(['client' => $client ]));
    
        return response()->json(['message' => 'Client updated!']);
    }
    
    public function delete(Request $request) {
        $client = Client::where(['slug' => $request->slug])->delete();
        
        Redis::del($request->slug);

        return response()->json(['message' => 'Client deleted!']);
    }

}
