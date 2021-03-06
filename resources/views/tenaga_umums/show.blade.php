@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tenaga Umum
        </h1>
    </section>
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="row" style="padding-left: 20px">
                            @include('tenaga_umums.show_fields')
                            <a href="{!! route('tenagaUmums.index') !!}" class="btn btn-default"><i class="fa fa-arrow-left"> </i> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
