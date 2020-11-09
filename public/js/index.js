$(document).ready(function () {
  viewFullImage();
});

function viewFullImage() {
  $(".js-enlarge").click(function (e) {
    e.preventDefault();
    var image = $(this).attr("src");
    var title = $(this).attr("alt");

    $(".modal-title").html(title);
    $("#modal-img").attr("src", image);
    $("#modal").modal("show");
  });
}