<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Request as RequestModel;
use Illuminate\Support\Str;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        // Mail::send(new \App\Mail\SendEmailAfterTransactions());

        $dt = Carbon::now();
        $now = $dt->toDateString();

        $item = RequestModel::where('akhir_pelaksanaan', '>=', $now)->get();
        // dd($item);

        return view('pages.home',[
            'item' => $item,
        ]);
    }

    public function check(Request $request){

        $bloksArray = explode(',', $request->blok_details);
        
        if(empty($request->blok_details)){
            return 'Pilih';
        }

        foreach ($bloksArray as $blokArray) {
            // $check_akhir = RequestModel::where('akhir_pelaksanaan','<',$request->akhir_date)
            //                 ->where('akhir_pelaksanaan','<',$request->awal_date)
            //                 ->whereOr('block_details','like', '%'.$blokArray .'%')->count();

            // $check_akhir = RequestModel::whereRaw("? NOT BETWEEN awal_pelaksanaan AND akhir_pelaksanaan", [$request->akhir_date])
            //                 ->whereRaw("? NOT BETWEEN awal_pelaksanaan AND akhir_pelaksanaan", [$request->awal_date])
            //                 ->whereOr('block_details','like', '%'.$blokArray .'%')->count();
            // $check_awal = '';

            $check_awal = RequestModel::whereBetween('awal_pelaksanaan', [$request->awal_date, $request->akhir_date])
                          ->where('blok_details', 'like', '%'.$blokArray.'%')->count();
            

            // if(!empty($check_awal)){
            //     if (str_contains($check_awal->block_details, $blokArray)){
            //         return $check_awal->block_details;
            //     }
            // }

            if ($check_awal > 0){
                return 'Tidak Tersedia';
            }


            $check_akhir = RequestModel::whereBetween('akhir_pelaksanaan', [$request->awal_date, $request->akhir_date])
                            ->where('blok_details', 'like', '%'.$blokArray.'%')->count();;

            // if (!empty($check_akhir)){
            //     if (str_contains($check_akhir->block_details, $blokArray)){
            //         return 'Tidak Tersedia';
            //     }
            // }

            // $check_awal = RequestModel::where('awal_pelaksanaan', '>', $request->akhir_date)
            //             ->where('awal_pelaksanaan', '>', $request->awal_date)
            //             ->whereOr('block_details','like', '%'.$blokArray .'%')->count();

            if ($check_akhir > 0){
                return 'Tidak Tersedia';
            }
        }

        return 'Tersedia';
        
    }
}
