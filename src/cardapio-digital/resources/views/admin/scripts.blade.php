<script>
  var viewId = <?php echo $viewId ?>;

  console.log(viewId);

  if (viewId === 2) {
    $('.qrcode').addClass('hide');
  } else if (viewId = 1) {
    $('.qrcode').removeClass('hide');
  } else {

  };

  $(function(){
    $('#qrcode').click(function(){
      $('.cardapio').addClass('hide');
      $('.qrcode').removeClass('hide');
    });

    $('#cardapio').click(function(){
      $('.qrcode').addClass('hide');
      $('.cardapio').removeClass('hide');
    });
  })
</script>
