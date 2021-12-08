<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Request as RequestModel;

class BarcodeController extends Controller
{
    public function show($id)
    {
        $item = RequestModel::findOrFail($id);

        return view('pages.barcode', [
            'item' => $item,
        ]);
    }
}
