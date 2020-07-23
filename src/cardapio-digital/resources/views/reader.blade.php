@extends('templates.template')

@section('content')
  <div id="reader" width="600px"></div>
  <script src="{{url('/js/html5-qrcode.min.js')}}"></script>
  <script>
    function onScanSuccess(qrCodeMessage) {
    	// handle on success condition with the decoded message
    }

    var html5QrcodeScanner = new Html5QrcodeScanner(
    	"reader", { fps: 10, qrbox: 250 });
    html5QrcodeScanner.render(onScanSuccess);
  </script>
@endsection
