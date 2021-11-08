function buttonAddClick(productId) {
    $.ajax({
        url: "/cart/add/"+productId,
        type: "POST",
        data: {"_token": $('meta[name="csrf-token"]').attr('content')},

        success: function (data) {
            alert("Успешно добавлено в корзину");
        },

        error: function (msg) {
            alert("Ошибка добавления в корзину: "+msg.responseJSON.message);
        }
    });
}
