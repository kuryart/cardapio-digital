@extends('templates.template')

@section('content')


  <div id="reader" width="600px"></div>
  <script src="{{url('/js/html5-qrcode.min.js')}}"></script>
  <script>
    function onScanSuccess(qrCodeMessage) {
    	// handle on success condition with the decoded message
      // console.log(`${qrCodeMessage}`);

      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $.ajax({
         type:'POST',
         url:"{{ route('reader.request') }}",
         data:{qrcode:qrCodeMessage},
         success: function(data) {
             console.log(data);
             window.location.href = "{{ route('cardapio') }}";
         },
         error: function(data) {
             console.log(data);
         }
      });
    }

    var html5QrcodeScanner = new Html5QrcodeScanner(
    	"reader", { fps: 10, qrbox: 250 });
    html5QrcodeScanner.render(onScanSuccess);
  </script>
@endsection
