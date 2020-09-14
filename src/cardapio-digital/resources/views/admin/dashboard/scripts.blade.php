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

<script>
  $(document).on("click", ".edit-secao-link", function () {
     var secaoId = $(this).data('id');
     var action = $("#edit-secao-form").attr('action');
     var newAction = action.replace("||z||", secaoId);

     $("#edit-secao-form").attr('action', newAction);
  });

  $(document).on("click", ".delete-secao-link", function () {
     var secaoId = $(this).data('id');
     var action = $("#delete-secao-form").attr('action');
     var newAction = action.replace("||z||", secaoId);

     $("#delete-secao-form").attr('action', newAction);
  });

  $(document).on("click", ".add-categoria-link", function () {
     var secaoId = $(this).data('id');
     var value = $("#add-categoria-input-secao-id").attr('value');
     var newValue = value.replace("||z||", secaoId);

     $("#add-categoria-input-secao-id").attr('value', newValue);
  });

  $(document).on("click", ".edit-categoria-link", function () {
     var categoriaId = $(this).data('categoria_id');
     var secaoId = $(this).data('secao_id');
     // var optionSelected = $("#edit-categoria-form-option").attr('selected');
     // var newOptionSelected = optionSelected.replace("||z||", secaoId);
     var action = $("#edit-categoria-form").attr('action');
     var newAction = action.replace("||z||", categoriaId);

     $("#edit-categoria-form-select").val(secaoId);
     // $("#edit-categoria-form-option").attr('selected', newOptionSelected);
     $("#edit-categoria-form").attr('action', newAction);

  });

  $(document).on("click", ".delete-categoria-link", function () {
     var categoriaId = $(this).data('categoria_id');
     var action = $("#delete-categoria-form").attr('action');
     var newAction = action.replace("||z||", categoriaId);

     $("#delete-categoria-form").attr('action', newAction);
  });

</script>

<script>
  (function() {
    // hold onto the drop down menu
    var dropdownMenu;

    // and when you show it, move it to the body
    $(window).on('show.bs.dropdown', function(e) {

      // grab the menu
      dropdownMenu = $(e.target).find('.dropdown-menu');

      // detach it and append it to the body
      $('body').append(dropdownMenu.detach());

      // grab the new offset position
      var eOffset = $(e.target).offset();

      // make sure to place it where it would normally go (this could be improved)
      dropdownMenu.css({
          'display': 'block',
          'top': eOffset.top + $(e.target).outerHeight(),
          'left': eOffset.left
      });
    });

    // and when you hide it, reattach the drop down, and hide it normally
    $(window).on('hide.bs.dropdown', function(e) {
      $(e.target).append(dropdownMenu.detach());
      dropdownMenu.hide();
    });
  })();
</script>

<script>
    function addPreco() {
        document.getElementById("add_to_me").innerHTML +=
          "<h3>This is the text which has been inserted by JS</h3>";
    }
</script>

<script>
    function submitProdutoForm() {
      // var data = $("$update-form").serialize();
      var data = $("#add-produto-form").serializeArray();

      console.log(data);

      // var dataProduto =
      // var dataPreco
      //
      // $.ajax({
      //     type : 'POST',
      //     url  : "{{ route('produtos.store') }}",
      //     data : data,
      //     success :  function(data){
      //         $(".display").html(data);
      //     }
      // });
    }
</script>
