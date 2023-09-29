function AddCart(id, quantily) {
    $.ajax({
        url: '/AddCart/' + id + '/' + quantily,
        type: 'GET',
    }).done(function(response) {
        console.log(quantily);
        // RenderCart(response);
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Bạn đã thêm thành công',
            showConfirmButton: false,
            timer: 1500
        })
    })
}

$("#change-item-cart").on("click", ".cartmini__remove", function() {
    $.ajax({
        url: '/DeleteCart/' + $(this).data("id"),
        type: 'GET',
    }).done(function(response) {

        RenderCart(response);
    })
})

function RenderCart(response) {
    // $("#change-item-cart").empty();
    // $("#change-item-cart").html(response);
    // $("#total-quantily-show").text($("#total-quantily-cart").val());


}