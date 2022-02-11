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

$(".btn-hapus-pengeluaran").on("click", function(e) {
    e.preventDefault();
    const href = $(this).attr("href");
  
    Swal.fire({
        title: "Anda yakin?",
        text: "Data pengeluaran akan dihapus!",
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

  $(".btn-hapus-pemasukan").on("click", function(e) {
    e.preventDefault();
    const href = $(this).attr("href");
  
    Swal.fire({
        title: "Anda yakin?",
        text: "Data pemasukan akan dihapus!",
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

$(".btn-keluar").on("click", function(e) {
    e.preventDefault();
    const href = $(this).attr("href");
    Swal.fire({
        title: "Anda yakin ingin keluar?",
        text: "Pilih 'Keluar' jika anda ingin logout ",
        icon: "question",
        iconColor : "green",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Keluar",
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