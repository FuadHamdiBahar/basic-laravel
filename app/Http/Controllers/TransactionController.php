<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function createTransaction(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'no_meja' => 'required|numeric',
        ]);
        
        $request['jumlah'] = $this->hitungJumlah($request);

        Transaction::create($request->all());
        return redirect()->route('pos')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public  function hitungJumlah($request){
        $bt = $request->bakso_tenes * 18000;
        $bu = $request->bakso_urat * 18000;
        $bb = $request->bakso_biasa * 14000;
        $b = $request->bakso * 10000;
        $ibt = $request->indomie_bakso_tenes * 20000;
        $ibu = $request->indomie_bakso_urat * 20000;
        $ibb = $request->indomie_bakso_biasa * 18000;
        $mpt = $request->pangsit_bakso_tenes * 20000;
        $mpu = $request->pangsit_bakso_urat * 20000;
        $mpbb = $request->pangsit_bakso_biasa * 18000;
        $pb = $request->pangsit_biasa * 14000;
        $et = $request->es_teh * 5000;
        $ej = $request->es_jeruk * 5000;
        $lm = $request->le_minerale * 5000;
        $tp = $request->teh_pucuk * 5000;
        $kr = $request->kerubak * 5000;
        $b = $request->buras * 5000;
        $ka = $request->kacang * 2000;
        $r = $request->rempeyek * 3000;
        $jumlah = $bt + $bu + $bb + $b + $ibt + $ibu + $ibb+ $mpt+ $mpu+ $mpbb+ $pb+ $et+ $ej+ $lm+ $tp+ $kr+ $b+ $ka+ $r;
        return $jumlah;
    }
}
