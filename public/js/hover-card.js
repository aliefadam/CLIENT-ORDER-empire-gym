let fileOld = "";

$(".card a").on("mouseenter", function () {
  const fileNameOld = $(this).children().first().attr("src");
  fileOld = fileNameOld;
  const fileNameNew = fileNameOld.split(".");
  $(this)
    .children()
    .first()
    .attr("src", `${fileNameNew[0]}-hover.${fileNameNew[1]}`);
});

$(".card a").on("mouseleave", function () {
  $(this).children().first().attr("src", fileOld);
});
