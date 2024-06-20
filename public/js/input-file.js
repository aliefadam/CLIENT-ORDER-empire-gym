$("#btn-upload").on("click", function () {
  const input = $("#input-file")[0];
  const fileName = input.files[0].name;
  $(".input-file .right").append(`
    <div class="status-konfirmasi">
        <span
            >Status Konfirmasi :
            <span class="file-name">${fileName}</span></span
        >
        <span>Terkonfirmasi</span>
    </div>
    `);
});
