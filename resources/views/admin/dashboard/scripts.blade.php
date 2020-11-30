<script>
  var viewId = {{ $viewId }};

  if (viewId === 1) {
    $('.qrcode').addClass('hide');
    $('.cardapio').removeClass('hide');
  } else if (viewId === 2) {
    $('.cardapio').addClass('hide');
    $('.qrcode').removeClass('hide');
  };

  $(function(){
    $('#qrcode').click(function(){
      $('.cardapio').addClass('hide');
      $('.qrcode').removeClass('hide');
    });

    $('#cardapio').click(function(){
      $('.qrcode').addClass('hide');
      $('.cardapio').removeClass('hide');
      window.scrollTo(0, 0);
    });
  });
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
          produtoDescription = produtoContainer[k].getElementsByClassName("produto-descricao");
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
  $(document).on("click", ".add-secao-link", function () {
    document.getElementById("add-secao-form").reset();
  });

  $(document).on("click", ".edit-secao-link", function () {
    document.getElementById("edit-secao-form").reset();

    var secaoId = $(this).data('secao_id');
    var secaoNome = $(this).data('secao_nome');

    var secaoFormNome = document.getElementById('edit-secao-form-nome');

    secaoFormNome.value = secaoNome;

    $("#edit-secao-form").attr('action', "{{ route('secaos.update', '||z||') }}");

    var action = $("#edit-secao-form").attr('action');
    var newAction = action.replace("||z||", secaoId);

    $("#edit-secao-form").attr('action', newAction);
  });

  $(document).on("click", ".delete-secao-link", function () {
    var secaoId = $(this).data('secao_id');

    $("#delete-secao-form").attr('action', "{{ route('secaos.destroy', '||z||') }}");

    var action = $("#delete-secao-form").attr('action');
    var newAction = action.replace("||z||", secaoId);

    $("#delete-secao-form").attr('action', newAction);
  });

  $(document).on("click", ".add-categoria-link", function () {
    document.getElementById("add-categoria-form").reset();

    var secaoId = $(this).data('secao_id');

    $("#add-categoria-form").attr('value', "{{ route('categorias.store', '||z||') }}");

    var value = $("#add-categoria-input-secao-id").attr('value');
    var newValue = value.replace("||z||", secaoId);

    $("#add-categoria-input-secao-id").attr('value', newValue);
  });

  $(document).on("click", ".edit-categoria-link", function () {
    document.getElementById("edit-categoria-form").reset();

    var categoriaId = $(this).data('categoria_id');
    var secaoId = $(this).data('secao_id');

    var categoriaNome = $(this).data('categoria_nome');

    var categoriaFormNome = document.getElementById('edit-categoria-form-nome');

    categoriaFormNome.value = categoriaNome;

    $("#edit-categoria-form").attr('action', "{{ route('categorias.update', '||z||') }}");

    var action = $("#edit-categoria-form").attr('action');
    var newAction = action.replace("||z||", categoriaId);

    $("#edit-categoria-form-select").val(secaoId);
    $("#edit-categoria-form").attr('action', newAction);
  });

  $(document).on("click", ".delete-categoria-link", function () {
   var categoriaId = $(this).data('categoria_id');

   $("#delete-categoria-form").attr('action', "{{ route('categorias.destroy', '||z||') }}");

   var action = $("#delete-categoria-form").attr('action');
   var newAction = action.replace("||z||", categoriaId);

   $("#delete-categoria-form").attr('action', newAction);
  });

  $(document).on("click", ".add-produto-link", function () {
    document.getElementById("add-produto-form").reset();
    removeAllPrecos();

    var categoriaId = $(this).data('categoria_id');

    $("#add-produto-form").attr('value', "{{ route('produtos.store', '||z||') }}");

    var value = $("#add-produto-input-categoria-id").attr('value');
    var newValue = value.replace("||z||", categoriaId);

    $("#add-produto-input-categoria-id").attr('value', categoriaId);
  });

  $(document).on("click", ".edit-produto-link", function () {
    document.getElementById("edit-produto-form").reset();

    var produtoId = $(this).data('produto_id');
    var categoriaId = $(this).data('categoria_id');
    var produtoNome = $(this).data('produto_nome');
    var produtoDescricao = $(this).data('produto_descricao');

    $("#edit-produto-form").attr('action', "{{ route('produtos.update', '||z||') }}");

    var action = $("#edit-produto-form").attr('action');
    var newAction = action.replace("||z||", produtoId);

    $("#edit-produto-form-select").val(categoriaId);
    $("#edit-produto-form").attr('action', newAction);

    var produtos = @json($produtos);
    var produto = produtos.find( ({ id }) => id === produtoId );
    var precos = produto.precos;

    var produtoFormNome = document.getElementById('edit-produto-form-nome');
    var produtoFormDescricao = document.getElementById('edit-produto-form-descricao');

    produtoFormNome.value = produto.nome;
    produtoFormDescricao = produto.descricao;

    console.log(produto);

    $('.edit-produto-form-precos-sub-wrapper').remove();

    for (var i = 0; i < precos.length; i++) {
      var htmlCode = `<div class="row align-items-center edit-produto-form-precos-sub-wrapper">
                        <div class="col-7 col-sm-7 col-md-7 col-lg-7">
                          <div class="form-group">
                            <input type="text" name="legenda` + (i + 1) + `" class="form-control" placeholder="Legenda" value="` + precos[i].legenda + `">
                          </div>
                        </div>
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                          <div class="form-group">
                            <input type="text" name="valor` + (i + 1) + `" class="form-control" placeholder="Valor" value="` + precos[i].valor + `">
                          </div>
                        </div>
                        <div class="col-1 col-sm-1 col-md-1 col-lg-1">
                          <div class="form-group">
                            <button class="btn btn-primary btn-sm" type="button" name="button" onclick="addPreco2()">
                              <i class="fas fa-plus"></i>
                            </button>
                          </div>
                        </div>
                        <div class="col-1 col-sm-1 col-md-1 col-lg-1">
                          <div class="form-group">
                            <button class="btn btn-danger btn-sm" type="button" name="button" onclick="removePreco2()">
                              <i class="fas fa-minus"></i>
                            </button>
                          </div>
                        </div>
                      </div>`;

      document.getElementById("edit-produto-form-precos-wrapper-id").innerHTML += htmlCode;
    }
  });

  $(document).on("click", ".delete-produto-link", function () {
   var produtoId = $(this).data('produto_id');

   $("#delete-produto-form").attr('action', "{{ route('produtos.destroy', '||z||') }}");

   var action = $("#delete-produto-form").attr('action');
   var newAction = action.replace("||z||", produtoId);

   $("#delete-produto-form").attr('action', newAction);
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
      var precosCount = document.getElementsByClassName("add-produto-form-precos-sub-wrapper").length;

      if (precosCount >= 3) {
        return alert("A quantidade de preços por produto não pode ser maior de 3.");
      }

      var precoId = precosCount + 1;

      var htmlCode = `<div class="row align-items-center add-produto-form-precos-sub-wrapper">
                        <div class="col-7 col-sm-7 col-md-7 col-lg-7">
                          <div class="form-group">
                            <input type="text" name="legenda` + precoId + `" class="form-control" placeholder="Legenda">
                          </div>
                        </div>
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                          <div class="form-group">
                            <input type="text" name="valor` + precoId + `" class="form-control" placeholder="Valor">
                          </div>
                        </div>
                        <div class="col-1 col-sm-1 col-md-1 col-lg-1">
                          <div class="form-group">
                            <button class="btn btn-primary btn-sm" type="button" name="button" onclick="addPreco()">
                              <i class="fas fa-plus"></i>
                            </button>
                          </div>
                        </div>
                        <div class="col-1 col-sm-1 col-md-1 col-lg-1">
                          <div class="form-group">
                            <button class="btn btn-danger btn-sm" type="button" name="button" onclick="removePreco()">
                              <i class="fas fa-minus"></i>
                            </button>
                          </div>
                        </div>
                      </div>`;

      document.getElementById("add-produto-form-precos-wrapper-id").innerHTML += htmlCode;
    }

    function removePreco() {
      var precosSubWrappers = document.getElementsByClassName("add-produto-form-precos-sub-wrapper");
      var precosSubWrappersCount = precosSubWrappers.length;

      if (precosSubWrappersCount <= 1) {
        return;
      }

      var precosWrapper = document.getElementById("add-produto-form-precos-wrapper-id");

      precosWrapper.removeChild(precosSubWrappers[precosSubWrappersCount - 1]);
    }

    function removeAllPrecos() {
      var precosWrapper = document.getElementById("add-produto-form-precos-wrapper-id");
      var precosSubWrappers = document.getElementsByClassName("add-produto-form-precos-sub-wrapper");
      var precosSubWrappersCount = precosSubWrappers.length;

      while (precosSubWrappersCount > 1) {
        precosWrapper.removeChild(precosSubWrappers[precosSubWrappersCount - 1]);
        precosSubWrappers = document.getElementsByClassName("add-produto-form-precos-sub-wrapper");
        precosSubWrappersCount = precosSubWrappers.length;
      }
    }

</script>

<script>
    function addPreco2() {
      var precosCount = document.getElementsByClassName("edit-produto-form-precos-sub-wrapper").length;

      if (precosCount >= 3) {
        return alert("A quantidade de preços por produto não pode ser maior de 3.");
      }

      var precoId = precosCount + 1;

      var htmlCode = `<div class="row align-items-center edit-produto-form-precos-sub-wrapper">
                        <div class="col-7 col-sm-7 col-md-7 col-lg-7">
                          <div class="form-group">
                            <input type="text" name="legenda` + precoId + `" class="form-control" placeholder="Legenda">
                          </div>
                        </div>
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                          <div class="form-group">
                            <input type="text" name="valor` + precoId + `" class="form-control" placeholder="Valor">
                          </div>
                        </div>
                        <div class="col-1 col-sm-1 col-md-1 col-lg-1">
                          <div class="form-group">
                            <button class="btn btn-primary btn-sm" type="button" name="button" onclick="addPreco2()">
                              <i class="fas fa-plus"></i>
                            </button>
                          </div>
                        </div>
                        <div class="col-1 col-sm-1 col-md-1 col-lg-1">
                          <div class="form-group">
                            <button class="btn btn-danger btn-sm" type="button" name="button" onclick="removePreco2()">
                              <i class="fas fa-minus"></i>
                            </button>
                          </div>
                        </div>
                      </div>`;

      document.getElementById("edit-produto-form-precos-wrapper-id").innerHTML += htmlCode;
    }

    function removePreco2() {
      var precosSubWrappers = document.getElementsByClassName("edit-produto-form-precos-sub-wrapper");
      var precosSubWrappersCount = precosSubWrappers.length;

      if (precosSubWrappersCount <= 1) {
        return;
      }

      var precosWrapper = document.getElementById("edit-produto-form-precos-wrapper-id");

      precosWrapper.removeChild(precosSubWrappers[precosSubWrappersCount - 1]);
    }

    function removeAllPrecos2() {
      var precosWrapper = document.getElementById("edit-produto-form-precos-wrapper-id");
      var precosSubWrappers = document.getElementsByClassName("edit-produto-form-precos-sub-wrapper");
      var precosSubWrappersCount = precosSubWrappers.length;

      while (precosSubWrappersCount > 1) {
        precosWrapper.removeChild(precosSubWrappers[precosSubWrappersCount - 1]);
        precosSubWrappers = document.getElementsByClassName("edit-produto-form-precos-sub-wrapper");
        precosSubWrappersCount = precosSubWrappers.length;
      }
    }

</script>

<!-- <div id="app"></div>
<script type="text/javascript" src="js/app.js"></script> -->
{!! toastr()->render() !!}
