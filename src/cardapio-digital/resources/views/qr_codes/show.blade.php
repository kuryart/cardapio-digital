@extends('qr_codes.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('qrCodes.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID:</strong>
                {{ $qrCode->id }}
            </div>
            <div class="form-group">
                <strong>Hash:</strong>
                {{ $qrCode->hash }}
            </div>
        </div>
    </div>
@endsection
