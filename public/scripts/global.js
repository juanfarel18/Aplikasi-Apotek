$(() => {
    $("[data-expand]").on("click", function (e) {
        $(this).children("img").toggleClass("-rotate-180");
        let target = $(`#${$(this).data("expand")}`);
        target.slideToggle();
    });

    // Toggle manual payment details
    $("input[name=payment_method]").on("change", function (e) {
        const manualDetail = $("#manualPaymentDetail");
        const qrisDetail = $("#qrisMethodDetail");

        if ($(this).attr("id") === "manualMethod") {
            manualDetail.show();
            qrisDetail.hide();
        } else if ($(this).attr("id") === "qrisMethod") {
            manualDetail.hide();
            qrisDetail.show();
        }
    });
});
