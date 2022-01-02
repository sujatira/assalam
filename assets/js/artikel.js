const URL = BASE_URL + "Menu/proses_tambah";

$("#btnTambah").click(() => {
	let tr = `
    <tr>
        <td>
            <div class="form-group">
                <input type="file" class="form-control" id="" name="gambar[]"  placeholder="">
            </div>
        </td>
        <td>
            <button type="button" class="remove btn btn-secondary mb-3"> <i class="fas fa-minus"></i> </button>
        </td>
    </tr>`;
	$("#tabelArtikel tbody").append(tr);
});

$("#tabelArtikel tbody").on("click", ".remove", function (e) {
	$(this).closest("tr").remove();
});

$("#btnpost").click(() => {
	var ddd = new FormData(frmtambah);
	console.log(ddd);
	fetch(URL, {
		method: "POST",
		body: new FormData(frmtambah),
	})
		.then((responseJson) => responseJson.json())
		.then((resultJson) => {
			if ((resultJson.success == true)) {

				window.location = BASE_URL + "Menu";

			}
		});
});

$("#btnpost-user").click(() => {
	var ddd = new FormData(frmtambah);
	console.log(ddd);
	fetch(URL, {
		method: "POST",
		body: new FormData(frmtambah),
	})
		.then((responseJson) => responseJson.json())
		.then((resultJson) => {
			if ((resultJson.success == true)) {

				window.location = BASE_URL + "Usermenu";

			}
		});
});
