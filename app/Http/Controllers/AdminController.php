<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Publisher;
use App\Models\WalletCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function logout(){
        Auth::logout();

        return redirect('/');
    }

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

    public function adminManageGenre(Request $req){
        $search = $req->input('search', '');

        $genres = Genre::where('Name', 'LIKE', "%{$search}%")->simplePaginate(10);

        return view('adminmanagegenre', [
            'genres' => $genres
        ]);
    }
}
