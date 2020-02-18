$(".delete-device-button").on("click", function () {
    var device = $(this).data("device");
    $("#delete-device-button").val(parseInt(device.deviceID));
    $("#modal-deleted-device").text(device.deviceID);
    $("#modal-name-device").text(device.name);
    $("#modal-type-device").text(device.type);
});