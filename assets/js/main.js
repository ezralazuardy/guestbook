$(function() {
	$(".navbar-burger").click(function() { $(".navbar-burger").toggleClass("is-active"); $(".navbar-menu").toggleClass("is-active"); });
	var carouselOptions = {
		effect: 'fade',
		autoplay: true,
		autoplaySpeed: 8000,
		loop: true,
		navigation: false,
		navigationKeys: false,
		duration: 600,
		pagination: false
	}
	var calendarOptions = {
		color: 'info',
		displayMode: 'dialog'
	}
	bulmaCarousel.attach('.hero-carousel', carouselOptions);
	bulmaCalendar.attach('[type="date"]', calendarOptions);
	bulmaQuickview.attach();
    $('#tableDaftarTamu').DataTable({
		language: {
			"processing":       "Memuat data...",
			"loadingRecords":   "Memuat...",
			"search":           "Cari : ",
			"lengthMenu":       "Menampilkan _MENU_ baris per halaman",
			"emptyTable":       "Belum ada data",
			"zeroRecords":      "Tidak ada data yang sesuai dengan kata kunci",
			"infoEmpty":        "Data tidak tersedia",
			"infoFiltered":     "(di filter dari _MAX_ total data)",
			"info":             "Menampilkan data ke _START_ sampai _END_ dari _TOTAL_ data",
			"paginate": {
				"first":        "Pertama",
				"last":         "Terakhir",
				"next":         "Selanjutnya",
				"previous":     "Sebelumnya"
			},
			"aria": {
				"sortAscending":    ": aktifkan untuk mengurutkan data secara ascending",
				"sortDescending":   ": aktifkan untuk mengurutkan data secara descending"
			},
			"buttons": {
				"pageLength": {
					_: "Menampilkan %d baris",
					'-1': "Tampilkan semua"
				},
				"excel": "Ekspor ke Excel"
			}
		},
		searching: true,
		processing: true,
		responsive: true,
		scrollX: true
	});
	$('#formulirTamu').off('submit').on('submit', function(event) {
		event.preventDefault();
		var name = $('#textNama').val();
		if(name == '') { 
			toast('danger', 'Mohon masukkan nama anda');
			return false;
		} else {

		}
		var email = $('#textEmail').val();
		if(email == '') {
			toast('danger', 'Mohon masukkan alamat surel anda');
			return false;
		} else {

		}
		var agency = $('#textInstansi').val();
		if(agency == '') {
			toast('danger', 'Mohon masukkan asal instansi anda');
			return false;
		}
		var address = $('#textAlamat').val();
		var telephone = $('#textTelepon').val();
		if(telephone == '') {
			toast('danger', 'Mohon masukkan nomor telepon anda');
			return false;
		}
		var gender = 'l'; if($('#radioJenisKelamin2').prop('checked') == true) gender = 'p';
		var necessity = $('#selectKeperluan').val();
		if(necessity == 'Pilih keperluan...') {
			toast('danger', 'Mohon pilih keperluan anda');
			return false;
		} else {
			
		}
		if(name && email && agency && telephone && gender && necessity) {
			$.ajax({
				url: base_url + 'formulir/upload',
				method: 'POST',
				dataType: 'json',
				data: {
					name: name,
					email: email,
					agency: agency,
					address: address,
					telephone: telephone,
					gender: gender,
					necessity: necessity
				},
				success: function(response) {
					if(response.success) {
						$('#cardFrameInput').fadeOut(function() {
							$('#cardFrameSuccess').fadeIn(function() {
								$('#textNama').val(null);
								$('#textEmail').val(null);
								$('#textInstansi').val(null);
								$('#textAlamat').val(null);
								$('#textTelepon').val(null);
								$('#selectKeperluan').val('Pilih keperluan...');
								setTimeout(function() {
									$('#cardFrameSuccess').fadeOut(function() {
										$('#cardFrameInput').fadeIn();
									});
								}, 3000);
							});
						});
					} else {
						toast('danger', 'Terjadi kesalahan saat mengunggah data');
					}
				},
				error: function(response) {
					console.log('ERROR | ' + response.status);
					toast('danger', 'Terjadi kesalahan saat mengunggah data');
				}
			});
		}
	});
});

function toast(type = 'is-info', msg) {
	if(!msg) return;
	switch(type) { case 'success': type = 'is-success'; break; case 'danger': type = 'is-danger'; break;  }
	bulmaToast.toast({ message: msg, type: type, dismissible: true, animate: { in: 'fadeIn', out: 'fadeOut' } });
}