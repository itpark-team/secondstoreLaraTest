function buttonAddClick(productId, userId) {
    $.ajax({
        url: "/cart/add/"+productId,
        type: "POST",
        data: {"_token": $('meta[name="csrf-token"]').attr('content')},

        success: function (data) {
            alert("Успешно добавлено в корзину");

            getCountItemsByUserId(userId);
        },

        error: function (msg) {
            alert("Ошибка добавления в корзину: "+msg.responseJSON.message);
        }
    });
}

function buttonDeleteClick(id, userId) {
    $.ajax({
        url: "/cart/delete/"+id,
        type: "POST",
        data: {"_token": $('meta[name="csrf-token"]').attr('content')},

        success: function (data) {
            let cartId = "#cart_"+id;
            $(cartId)[0].remove();
            alert("Успешно удалено из корзины");

            getCountItemsByUserId(userId);
        },

        error: function (msg) {
            alert("Ошибка удаления из корзины: "+msg.responseJSON.message);
        }
    });
}


function getCountItemsByUserId(userId) {
    $.ajax({
        url: "/cart/getCountItems/"+userId,
        type: "POST",
        data: {"_token": $('meta[name="csrf-token"]').attr('content')},

        success: function (data) {
            $("#cartCountItems")[0].innerHTML = "(кол-во товаров: "+data+")";
        },

        error: function (msg) {
            alert("Ошибка удаления из корзины: "+msg.responseJSON.message);
        }
    });
}
