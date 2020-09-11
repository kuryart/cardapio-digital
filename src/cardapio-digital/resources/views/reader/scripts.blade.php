<!-- === QR Code Reader Script -->
<script src="{{url('/js/html5-qrcode.min.js')}}"></script>

<!-- === QR Code Reader Functions -->
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

  function getCameras() {
    // buttonScan = document.getElementById("btn-scan");
    $("#main-wrapper").addClass('hide');

    // This method will trigger user permissions
    Html5Qrcode.getCameras().then(devices => {
      /**
       * devices would be an array of objects of type:
       * { id: "id", label: "label" }
       */
      if (devices && devices.length) {
        var cameraId = devices[0].id;
        var cameraLabel = devices[0].label;
        // .. use this to start scanning.
        console.log("Success: Camera ID: " + cameraId + " | " + "Camera Label: " + cameraLabel + ".");
        startScan(cameraId);
      }
    }).catch(err => {
      // handle err
      console.log("Error: Unable to get camera.");
    });
  }

  function startScan(cameraId) {
    // Create instance of the object. The only argument is the "id" of HTML element created above.
    const html5QrCode = new Html5Qrcode("reader");

    html5QrCode.start(
      cameraId,     // retreived in the previous step.
      {
        fps: 10,    // sets the framerate to 10 frame per second
        qrbox: 250  // sets only 250 X 250 region of viewfinder to
                    // scannable, rest shaded.
      },
      qrCodeMessage => {
        // do something when code is read. For example:
        console.log(`QR Code detected: ${qrCodeMessage}`);
      },
      errorMessage => {
        // parse error, ideally ignore it. For example:
        console.log(`QR Code no longer in front of camera.`);
      })
    .catch(err => {
      // Start failed, handle it. For example,
      console.log(`Unable to start scanning, error: ${err}`);
    });
  }

  function readImage() {
    $(".input-group").removeClass('hide');

    const html5QrCode = new Html5Qrcode(/* element id */ "reader");
    // File based scanning
    const fileinput = document.getElementById('qr-input-file');
    fileinput.addEventListener('change', e => {
      if (e.target.files.length == 0) {
        // No file selected, ignore
        return;
      }

      const imageFile = e.target.files[0];
      // Scan QR Code
      html5QrCode.scanFile(imageFile, true)
      .then(qrCodeMessage => {
        // success, use qrCodeMessage
        console.log(qrCodeMessage);
        onScanSuccess(qrCodeMessage);
      })
      .catch(err => {
        // failure, handle it.
        console.log(`Error scanning file. Reason: ${err}`)
      });
    });
  }
</script>

<!-- === Loader Functions -->
<script>
  $(document).ready(function() {

  	setTimeout(function(){
  		$('body').addClass('loaded');
      $('#main-wrapper').addClass('fade-in');
  	}, 1000);

  });
</script>
