@extends('reader.layout')

@section('content')
  <!-- === Reader ===  -->
  <div id="reader" width="600px"></div>
  <!-- === Overlay ===  -->
  <div id="overlay"></div>
  <!-- === Loader ===  -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>

  <div id="main-wrapper">
    <div class="jumbotron">
      <div class="camera-wrapper text-center">
        <h1 class="display-3 page-header txt-light">Cardápio Digital</h1>
        <h1 class="display-5 txt-light">Ler QR Code à partir da câmera:</h1>
        <p class="txt-light">Uma permissão para a utilização da câmera será solicitada.</p>
        <button class="btn btn-primary btn-lg" role="button" onclick="getCameras()">LER COM A CÂMERA</button>
      </div>
      <hr class="my-4">
      <div class="image-wrapper text-center">
        <h1 class="display-5 txt-light">Ler QR Code à partir de uma imagem:</h1>
        <p class="txt-light">Caso não queira utilizar a câmera, tire uma foto do QR Code e clique no botão abaixo para enviar o arquivo.</p>
        <button class="btn btn-primary btn-lg" role="button" onclick="readImage()">LER COM IMAGEM</button>
      </div>
      <div class="input-group hide">
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="qr-input-file" accept="image/*">
          <label class="custom-file-label txt-light" for="qr-input-file">Selecione a imagem</label>
        </div>
      </div>
    </div>
  </div>
@endsection
