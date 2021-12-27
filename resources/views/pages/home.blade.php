@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'home'
])

{{--@extends('layouts.app')--}}

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Home</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            Welcome to the HOMEPAGE
        </div>
        <div class="card-body">
            DASHBOARD PAGE
        </div>
        <!-- /.card-body -->
        <div class="card-footer">

        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->
@endsection
