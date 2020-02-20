$(".delete-device-button").on("click", function () {
    var device = $(this).data("device");
    $("#delete-device-button").val(parseInt(device.deviceID));
    $("#modal-deleted-device").text(device.deviceID);
    $("#modal-name-device").text(device.name);
    $("#modal-type-device").text(device.type);
});


$(".edit-device-button").on("click", function () {
    var device = $(this).data("device");
    $("#edit-device-id").val(device.deviceID);
    $("#edit-device-type").val(device.type);
    $("#edit-device-brand").val(device.brand);
    $("#edit-device-name").val(device.name);
    $("#edit-device-cart-id").val(device.cartID);
});