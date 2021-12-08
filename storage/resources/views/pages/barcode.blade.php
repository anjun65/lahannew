@extends('layouts.app')


@section('title')
    Rekap Permintaan
@endsection

@section('content')

<div class="page-content page-home">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-12">
                 <br/>
                <div class="dashboard-heading no-print">
                    <h3 class="dashboard-title">Rekap Permintaan</h3>
                    <p class="dashboard-subtitle">
                        Rekap Permintaan yang telah diajukan peneliti
                    </p>
                </div>
                 <br/>
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Judul Kegiatan</label>
                                            <input disabled type="text" name="judul" class="form-control" required value="{{ $item->judul }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-2">
                                            <label>Rancangan Penelitian:</label>
                                            <textarea disabled row="5" required type="text" name="rancangan" class="form-control">{{ $item->rancangan }}</textarea>
                                        </div>

                                        <div class="form-group form-2">
                                            <label>Tujuan Kegiatan:</label>
                                            <textarea disabled row="5" required type="text" name="tujuan" class="form-control">{{ $item->tujuan }}</textarea>
                                        </div>
                                    </div>
                                    

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <input disabled type="text" name="status" value="{{ $item->status }}" class="form-control mb-3">
                                        </div>
                                    </div>
                                </div>

                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('addon-scripts')
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    <script>
            CKEDITOR.replace('editor');
    </script>
    <script>

        function test_print() {

            $('.no-print').hide();

            window.print();
        }
        
         
    </script>
@endpush