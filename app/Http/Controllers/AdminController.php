<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use App\Models\WalletCode;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminManagePublisher(Request $req)
    {
        $search = $req->input('search', '');

        $publishers = Publisher::where('Name', 'LIKE', "%{$search}%")->get();

        return view('adminmanagepublisher', compact('publishers'));
    }

    public function adminAddPublisher()
    {
        return view('adminaddpublisher');
    }

    public function adminManageWalletCode(Request $req){
        $search = $req->input('search', '');

        $walletCodes = WalletCode::where('Code', 'LIKE', "%{$search}%")->simplePaginate(10);

        return view('adminmanagewalletcode', [
            'walletCodes' => $walletCodes
        ]);
    }
}
