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

<!-- <script>
  $(function () {
    $('[data-tooltip="tooltip"]').tooltip({container: 'body', trigger : 'hover'})
  })
</script> -->

<script>
  // Menu Secao
  function AddSecao(){
    document.getElementById('btn-add-secao').click();
	}

  function AddCategoria(){
    document.getElementById('btn-add-categoria').click();
  }

  function AddProduto(){
    document.getElementById('btn-add-produto').click();
  }

  var menuSecao = CtxMenu(".menu-secao");
  menuSecao.addItem("Adicionar Seção", AddSecao, Icon = "images/secao.svg");
  menuSecao.addSeparator();
  menuSecao.addItem("Adicionar Categoria", AddCategoria, Icon = "images/categoria.svg");

  var menuCategoria = CtxMenu(".menu-categoria");
  menuCategoria.addItem("Adicionar Categoria", AddCategoria, Icon = "images/categoria.svg");
  menuCategoria.addSeparator();
  menuCategoria.addItem("Adicionar Produto", AddProduto, Icon = "images/produto.svg");

  var menuProduto = CtxMenu(".menu-produto");
  menuProduto.addItem("Adicionar Produto", AddProduto, Icon = "images/produto.svg");

</script>

<script>
  function searchProduto()
  {
    var input,
        filter,
        secaoWrapper,
        categoriaWrapper,
        produtoContainer,
        i,
        j,
        k,
        produtoTitle,
        produtoDescription,
        txtValueTitle,
        txtValueDescription,
        hasProduto,
        hasCategoria,

    input = document.getElementById("search-bar");
    filter = input.value.toUpperCase();

    secaoWrapper = document.getElementsByClassName("secao-wrapper");

    for (i = 0; i < secaoWrapper.length; i++)
    {
      categoriaWrapper = secaoWrapper[i].getElementsByClassName("categoria-wrapper");
      hasCategoria = false;

      for (j = 0; j < categoriaWrapper.length; j++)
      {
        produtoContainer = categoriaWrapper[j].getElementsByClassName("produto-container");
        hasProduto = false;

        for (k = 0; k < produtoContainer.length; k++)
        {
          produtoTitle = produtoContainer[k].getElementsByClassName("produto-title");
          produtoDescription = produtoContainer[k].getElementsByClassName("produto-description");
          txtValueTitle = produtoTitle[0].innerHTML;
          txtValueDescription = produtoDescription[0].innerHTML;

          if (txtValueTitle.toUpperCase().indexOf(filter) > -1 || txtValueDescription.toUpperCase().indexOf(filter) > -1)
          {
            produtoContainer[k].style.display = "";
            hasProduto = true;
          }
          else {
            produtoContainer[k].style.display = "none";
          }
        }

        if (hasProduto) {
          categoriaWrapper[j].style.display = "";
          hasCategoria = true;
        }
        else {
          categoriaWrapper[j].style.display = "none";
        }
      }

      if (hasCategoria) {
        secaoWrapper[i].style.display = "";
      }
      else {
        secaoWrapper[i].style.display = "none";
      }
    }
  }
</script>

<script>
  function expandAll() {
    var collapses, i;

    collapses = document.getElementsByClassName("collapse-cardapio-item");

    for (i = 0; i < collapses.length; i++)
    {
      if (!collapses[i].classList.contains("show"))
      {
        $(collapses[i]).addClass('show');
      }
    }
  }

  function collapseAll() {
    var collapses, i;

    collapses = document.getElementsByClassName("collapse-cardapio-item");

    for (i = 0; i < collapses.length; i++)
    {
      if (collapses[i].classList.contains("show"))
      {
        $(collapses[i]).removeClass('show');
      }
    }
  }
</script>
