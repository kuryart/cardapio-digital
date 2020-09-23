<div class="main-qr-code-div">
  <div class="row">
      <div class="col-lg-12 margin-tb">
          <div class="pull-left">
              <h2>QR Codes</h2>
          </div>
          <div class="pull-right">
              <!-- <a class="btn btn-success" href="{{ route('qrCodes.create') }}">Gerar QR Code</a> -->

              <form action="{{ route('qrCodes.store') }}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-primary">Gerar QR Code</button>
              </form>

          </div>
      </div>
  </div>

  @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif

  <table class="table table-bordered">
      <tr>
          <th>ID</th>
          <th>Hash</th>
          <th width="100px">Action</th>
      </tr>
      @foreach ($qrCodes as $qrCode)
      <tr>
          <td>{{ $qrCode->id }}</td>
          <td>{{ $qrCode->hash }}</td>
          <td>
              <form action="{{ route('qrCodes.destroy',$qrCode->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>
              </form>
          </td>
      </tr>
      @endforeach
  </table>
</div>
