const catalog = {
  limit: 6,

  init(){
    catalog.productPage();
    $('#view-all').on('click', function () {
      catalog.limit += 6;
      $('.img-items').empty();
      catalog.productPage();
    })
  },

  productPage() {
    $.ajax({
      url: 'php/product.php' + '?limit=' + catalog.limit,
      type: 'GET',
      success: function (goods) {
        $(goods).appendTo('.img-items');
      }
    })
  },

};