<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;
use PharIo\Manifest\Email;

class MessageController extends Controller
{
    public function index()
    {
        return view('admin.message.index');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        Messages::create([
            'name'=>$data['name'],
            'email'=> $data['email'],
            'subject'=> $data['subject'],
            'desc'=>$data['message']
        ]);
        return redirect('/')->with(['succes'=>'Berhasil Kirim Pesan']);
    }
}
