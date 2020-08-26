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

<script>
  $(function () {
    $('[data-tooltip="tooltip"]').tooltip({container: 'body', trigger : 'hover'})
  })
</script>

<script>
$(window).on('resize load orientationchange', function(){
    responsive_calc();
});

var responsive_calc = function(){

    // get the viewport height
    var h = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;

    // get the element height
    var bannerHeight = $('.masthead').height();

    // get the integer percentage value difference between them
    var bgHeightPercent = Math.ceil(bannerHeight/h*170);

    // set background-size height to match the element instead of the viewport
    $('.masthead').css('background-size', 'auto ' + bgHeightPercent + '%');
}
</script>
