<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function deleteTransaction(Request $request)
    {
        // return $request->id;
        $transaction = Transaction::find($request->id);
        $transaction->delete();
        return redirect()
            ->route('listTransaction')
            ->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function updateTransaction(Request $request)
    {
        Transaction::where('id', $request->id)->update([
            'bakso_tenes' => $request->bakso_tenes,
            'bakso_urat' => $request->bakso_urat,
            'bakso_biasa' => $request->bakso_biasa,
            'bakso' => $request->bakso,
            'indomie_bakso_tenes' => $request->indomie_bakso_tenes,
            'indomie_bakso_urat' => $request->indomie_bakso_urat,
            'indomie_bakso_biasa' => $request->indomie_bakso_biasa,
            'pangsit_bakso_tenes' => $request->pangsit_bakso_tenes,
            'pangsit_bakso_urat' => $request->pangsit_bakso_urat,
            'pangsit_bakso_biasa' => $request->pangsit_bakso_biasa,
            'pangsit_biasa' => $request->pangsit_biasa,
            'es_teh' => $request->es_teh,
            'es_jeruk' => $request->es_jeruk,
            'le_minerale' => $request->le_minerale,
            'teh_pucuk' => $request->teh_pucuk,
            'kerubak' => $request->kerubak,
            'buras' => $request->buras,
            'kacang' => $request->kacang,
            'rempeyek' => $request->rempeyek,
            'jumlah' => $this->hitungJumlah($request),
            'diantar' => false,
        ]);

        return redirect()
            ->route('listTransaction')
            ->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function dibayarTransaction($id)
    {
        $transaction = Transaction::find($id);

        $transaction->dibayar = true;

        $transaction->save();

        return redirect()
            ->route('listTransaction')
            ->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function diantarTransaction($id)
    {
        $transaction = Transaction::find($id);

        $transaction->diantar = true;

        $transaction->save();

        return redirect()
            ->route('listTransaction')
            ->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function allTransaction()
    {
        return Transaction::all();
    }

    public function createTransaction(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'no_meja' => 'required|numeric',
        ]);

        $request['jumlah'] = $this->hitungJumlah($request);

        Transaction::create($request->all());
        return redirect()
            ->route('listTransaction')
            ->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function hitungJumlah($request)
    {
        $bt = $request->bakso_tenes * 18000;
        $ba = $request->bakso_urat * 18000;
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
        $bu = $request->buras * 3000;
        $ka = $request->kacang * 2000;
        $r = $request->rempeyek * 3000;
        $jumlah = $bt + $ba + $bb + $b + $ibt + $ibu + $ibb + $mpt + $mpu + $mpbb + $pb + $et + $ej + $lm + $tp + $kr + $bu + $ka + $r;
        return $jumlah;
    }
}
