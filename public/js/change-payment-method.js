$(".metopem-item input").on("change", function () {
    $("#img-selected").css("transform", "translateX(0)");

    const imgSrc = $(this).parents().next().children("img").first().attr("src");
    const paymentName = $(this).attr("id");

    if (
        imgSrc.includes("paypal") ||
        imgSrc.includes("dana") ||
        imgSrc.includes("gopay")
    ) {
        console.log("geser");
        $("#img-selected").css("transform", "translateX(100px)");
    } else if (imgSrc.includes("shopee")) {
        console.log("gausah");
        $("#img-selected").css("transform", "translateX(120px)");
    }

    $("#img-selected").attr("src", imgSrc);
    $("#metopem-name").html(paymentName);
});
