<?php

namespace App\Http\Controllers\vp;

use App\Http\Controllers\Controller;
use App\Models\Request;
use Yajra\DataTables\Facades\DataTables;

class ProcessRequestController extends Controller
{
    public function index()
    {
        if(request()->ajax())
        {
            $query = Request::with(['user'])->where('status','Diajukan');
            return Datatables::of($query)
                ->addcolumn('action', function($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle mr-1 mb-1"
                                        type="button"
                                        data-toggle="dropdown">
                                        Aksi
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="' . route('request-vp.edit', $item->id) . '">
                                        Sunting
                                    </a>
                                    <form action="'. route('request-vp.destroy', $item->id) .'" method="POST">
                                        ' . method_field('delete') . csrf_field() .'    
                                        <button type="submit" class="dropdown-item text-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    ';
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make();
        }

        return view('pages.vp.request.index');
    }
}
