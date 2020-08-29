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
  // Menu Secao
  function AddSecao(){
    document.getElementById('btn-add-secao').click();
	}

  function AddCategoria(){
    document.getElementById('btn-add-categoria').click();
  }

  var menuSecao = CtxMenu(".add-secao");
  menuSecao.addItem("Adicionar Seção", AddSecao, Icon = "images/secao.svg");
  menuSecao.addSeparator();
  menuSecao.addItem("Adicionar Categoria", AddCategoria, Icon = "images/categoria.svg");

</script>
