@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            History Kelas
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    <div class="col-md-6">
                        @include('history_kelas.show_fields')
                        <a href="{!! route('historyKelas.index') !!}" class="btn btn-default"><i class="fa fa-arrow-left"> </i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
