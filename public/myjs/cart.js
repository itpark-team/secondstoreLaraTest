function getCountItemsByUserId() {
    $.ajax({
        url: "/cart/getCountItemsForUser",
        type: "POST",
        data: {"_token": $('meta[name="csrf-token"]').attr('content')},

        success: function (data) {
            $("#cartCountItems")[0].innerHTML = "(кол-во товаров: "+data+")";
        },

    });
}

function buttonAddClick(productId) {
    $.ajax({
        url: "/cart/add/"+productId,
        type: "POST",
        data: {"_token": $('meta[name="csrf-token"]').attr('content')},

        success: function (data) {
            alert("Успешно добавлено в корзину");

            getCountItemsByUserId();
        },

        error: function (msg) {
            alert("Ошибка добавления в корзину: "+msg.responseJSON.message);
        }
    });
}

function buttonDeleteClick(id) {
    $.ajax({
        url: "/cart/delete/"+id,
        type: "POST",
        data: {"_token": $('meta[name="csrf-token"]').attr('content')},

        success: function (data) {
            let cartId = "#cart_"+id;
            $(cartId)[0].remove();
            alert("Успешно удалено из корзины");

            getCountItemsByUserId();
        },

        error: function (msg) {
            alert("Ошибка удаления из корзины: "+msg.responseJSON.message);
        }
    });
}



