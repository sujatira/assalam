const flashData = $(".flash-data").data("flashdata");

if (flashData) {
    Swal.fire({
        title: "Perhatian",
        icon: "success",
        iconColor: "green",
        text: "Data " + flashData,
        showConfirmButton: true,
        toast: true,
    } );
} 
// else if (flashDada) {
//     Swal.fire({
//         title: "Perhatian",
//         icon: "warning",
//         iconColor: "red",
//         text: "Data " + flashData,
//         showConfirmButton: true,
//         toast: true,

//     });
// }

$(".btn-hapus").on("click", function(e) {
  e.preventDefault();
  const href = $(this).attr("href");

  Swal.fire({
      title: "Anda yakin?",
      text: "Data artikel akan dihapus!",
      icon: "warning",
      iconColor : "red",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Hapus",
      cancelButtonText: "Batalkan",
      toast: true,
  }).then((result) => {
      if (result.value == true) {
          document.location.href = href;
      }
  });
});

$(function(){
    $('[data-toggle="popover"]').popover()
})