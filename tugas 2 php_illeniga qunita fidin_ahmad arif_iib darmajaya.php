<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas 2 PHP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>

<body>
	<div class="container px-5 my-5">
		<h2 class="text-center mb-5">Form Data Pegawai</h2>
		<div class="row justify-content-md-center">
			<div class="col col-lg-6">
				<div class="card">
					<div class="card-body">
						<form method="post" id="frm">
							<div class="form-floating mb-3">
								<input class="form-control" id="namaPegawai" name="namaPegawai" type="text" placeholder="Nama Pegawai" data-sb-validations="required" />
								<label for="namaPegawai">Nama Pegawai</label>
								<div class="invalid-feedback" id="errNama">Nama Pegawai wajib diisi!.</div>
							</div>
							<div class="form-floating mb-3">
								<select class="form-select" id="agama" name="agama" aria-label="Agama">
									<option value="">Pilih Agama</option>
									<option value="Islam">Islam</option>
									<option value="Kristen">Kristen</option>
									<option value="Hindu">Hindu</option>
									<option value="Budha">Budha</option>
									<option value="Konghuchu">Konghuchu</option>
								</select>
								<label for="agama">Agama</label>
								<div class="invalid-feedback" id="errAgama">Pilih salah satu!.</div>
							</div>
							<div class="mb-3">
								<label class="form-label d-block">Jabatan</label>
								<div class="form-check form-check-inline">
									<input class="form-check-input" id="manager" type="radio" name="jabatan" value="Manager" data-sb-validations="required" />
									<label class="form-check-label" for="manager">Manager</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" id="asisten" type="radio" name="jabatan" value="Asisten" data-sb-validations="required" />
									<label class="form-check-label" for="asisten">Asisten</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" id="kabag" type="radio" name="jabatan" value="Kabag" data-sb-validations="required" />
									<label class="form-check-label" for="kabag">Kabag</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" id="staff" type="radio" name="jabatan" value="Staff" data-sb-validations="required" />
									<label class="form-check-label" for="staff">Staff</label>
								</div>
								<div class="invalid-feedback" id="errJabatan">Pilih salah satu!.</div>
							</div>
							<div class="mb-3">
								<label class="form-label d-block">Status</label>
								<div class="form-check">
									<input class="form-check-input" id="menikah" type="radio" name="status" value="Menikah" data-sb-validations="required" />
									<label class="form-check-label" for="menikah">Menikah</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" id="belum" type="radio" name="status" value="Belum Menikah" data-sb-validations="required" />
									<label class="form-check-label" for="belum">Belum</label>
								</div>
								<div class="invalid-feedback" id="errStatus">Pilih salah satu!.</div>
							</div>
							<div class="form-floating mb-3" id="jmlAnak">
								<input class="form-control" id="jumlahAnak" name="jumlahAnak" type="text" placeholder="Jumlah Anak" data-sb-validations="required" />
								<label for="jumlahAnak">Jumlah Anak</label>
							</div>
							<div class="d-grid">
								<button class="btn btn-primary btn-lg" name="submit" type="button" id="btnSave">Simpan</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
		<script>
		const jmlAnak = document.querySelector("#jmlAnak");
		const form = document.querySelector("#frm");
		const btnSave = document.querySelector("#btnSave");
		jmlAnak.style.display = "none";
		for (const input of form) {
			input.addEventListener("input", () => {
				if (input.name == 'status' && input.value == 'Menikah') {
					jmlAnak.style.display = "block"
				} else if (input.name == 'status' && input.value == 'Belum Menikah') {
					jmlAnak.style.display = "none"
				}
				if (input.name == 'namaPegawai') document.querySelector("#errNama").style.display = "none";
				else if (input.name == 'agama') document.querySelector("#errAgama").style.display = "none";
				else if (input.name == 'jabatan') document.querySelector("#errJabatan").style.display = "none";
				else if (input.name == 'status') document.querySelector("#errStatus").style.display = "none";
				else if (input.name == 'jumlahAnak') jmlAnak.style.display = "block";
			});
		}
		btnSave.addEventListener("click", () => {
			let jabatan = false;
			let status = false;
			let check = true;
			for (const item of form.jabatan) {
				if (item.checked) jabatan = true;
			}
			for (const item of form.status) {
				if (item.checked) status = true;
			}
			if (form.namaPegawai.value == "") {document.querySelector("#errNama").style.display = "block"; check = false;}
			if (form.agama.value == "") {document.querySelector("#errAgama").style.display = "block"; check = false;}
			if (!jabatan) {document.querySelector("#errJabatan").style.display = "block"; check = false;}
			if (!status) {document.querySelector("#errStatus").style.display = "block"; check = false;}
			if(check) return document.createElement('form').submit.call(form);
		});
	</script>
</body>

</html>