$(".delete-device-button").on("click", function () {
    var deviceType = $(this).data("device-type");
    var deviceName = $(this).data("device-name");
    var deviceId = $(this).data("device-id");
    $("#delete-device-button").val(parseInt(deviceId));
    $("#modal-deleted-device").text(deviceId);
    $("#modal-name-device").text(deviceName);
    $("#modal-type-device").text(deviceType);
});