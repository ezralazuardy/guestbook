const title = 'Daftar Tamu BPTIK DIKBUD';
let carousel, datePicker, timePicker, quickView;

$( async _ => {
	
	$(".navbar-burger").click( _ => { $(".navbar-burger").toggleClass("is-active"); $(".navbar-menu").toggleClass("is-active"); });
	
	carousel = bulmaCarousel.attach('.hero-carousel', {
		effect: 'fade',
		autoplay: true,
		autoplaySpeed: 8000,
		loop: true,
		navigation: false,
		navigationKeys: false,
		duration: 600,
		pagination: false
	});

	datePicker = bulmaCalendar.attach('#inputTanggalPelaksanaan', {
		type: 'date',
		color: 'dark',
		displayMode: 'dialog',
		cancelLabel: 'Batal',
		clearLabel: 'Hapus',
		todayLabel: 'Hari ini',
		nowLabel: 'Sekarang',
		validateLabel: 'Pilih'
	});
	if(datePicker[0]) datePicker[0].clear();

	timePicker = bulmaCalendar.attach('#inputWaktuPelaksanaan', {
		type: 'time',
		color: 'dark',
		displayMode: 'dialog',
		cancelLabel: 'Batal',
		clearLabel: 'Hapus',
		todayLabel: 'Hari ini',
		nowLabel: 'Sekarang',
		validateLabel: 'Pilih',
	    labelFrom: 'Mulai',
	    labelTo: 'Selesai',
		isRange: true,
	    minuteSteps: 1
	});
	if(timePicker[0]) timePicker[0].clear();

	quickView = bulmaQuickview.attach();

	$('#tableDaftarTamu').DataTable({
		dom: 'Bfrtip',
		buttons: [
			'pageLength',
			{
				extend: 'collection',
				text: 'Ekspor Data',
				buttons: [
					{
						extend: 'copyHtml5',
						title: title
					},
					{
						extend: 'excelHtml5',
						title: title
					},
					{
						extend: 'csvHtml5',
						title: title
					},
					{
						extend: 'pdfHtml5',
						title: title,
						customize: (doc) => {
							doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');
						}
					}
				]
			}
		],
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
				}
			}
		},
		searching: true,
		processing: true,
		scrollX: true,
		initComplete: _ => {
			$('div .dt-buttons').css({'float': 'left', 'margin-bottom': '12px'});
			$('.dataTables_filter').css({'float': 'right', 'margin-top': '14px'});
			$('.dataTables_filter label').css({'margin-bottom': '0px'});
			$('.dataTables_info').css({'float': 'left', 'margin-top': '6px'});
			$('.dataTables_paginate').css({'float': 'right', 'margin-top': '8px'});
		}
	});
});

const submitFormulir = _ => {

	// check name
	const name = $('#textNama').val();
	if(name == '') { 
		$('#textNama').addClass('is-danger');
		toast('danger', 'Mohon masukkan nama anda');
		return;
	} else {
		$('#textNama').removeClass('is-danger');
	}

	// check email
	const email = $('#textEmail').val();
	if(email == '') {
		$('#textEmail').addClass('is-danger');
		toast('danger', 'Mohon masukkan alamat surel anda');
		return;
	} else {
		$('#textEmail').removeClass('is-danger');
	}

	// check gender
	const gender = 'm';
	if($('#radioJenisKelamin2').prop('checked') == true) gender = 'f';

	// check agency
	const agency = $('#textInstansi').val();
	if(agency == '') {
		$('#textInstansi').addClass('is-danger');
		toast('danger', 'Mohon masukkan asal instansi anda');
		return;
	} else {
		$('#textInstansi').removeClass('is-danger');
	}

	// check address
	const address = $('#textAlamat').val();

	// check contact
	const telephone = $('#textTelepon').val();
	if(telephone == '') {
		$('#textTelepon').addClass('is-danger');
		toast('danger', 'Mohon masukkan nomor telepon anda');
		return;
	} else {
		$('#textTelepon').removeClass('is-danger');
	}

	// check participant
	const guruCount = ($('#textGuruCount').val() == '') ? 0 : $('#textGuruCount').val();
	const siswaCount = ($('#textSiswaCount').val() == '') ? 0 : $('#textSiswaCount').val();
	if((guruCount == 0) && (siswaCount == 0)) {
		$('#textGuruCount').addClass('is-danger');
		$('#textSiswaCount').addClass('is-danger');
		toast('danger', 'Mohon masukkan jumlah peserta (minimal 1)');
		return;
	} else {
		$('#textGuruCount').removeClass('is-danger');
		$('#textSiswaCount').removeClass('is-danger');
	}

	// check visit date
	let tanggalPelaksanaan = $('#inputTanggalPelaksanaan').val();
	if(tanggalPelaksanaan == '') {
		$('#inputTanggalPelaksanaan').addClass('is-danger');
		toast('danger', 'Mohon masukkan tanggal pelaksanaan');
		return;
	} else {
		$('#inputTanggalPelaksanaan').removeClass('is-danger');
		const reformatDate = new Date(tanggalPelaksanaan);
		tanggalPelaksanaan = reformatDate.getFullYear() + '-' + (reformatDate.getMonth() + 1) + '-' + reformatDate.getDate();
	}

	// check visit time
	let getWaktuPelaksanaan = $('#inputWaktuPelaksanaan').val().split(' - ');
	const waktuPelaksanaanStart = getWaktuPelaksanaan[0];
	const waktuPelaksanaanEnd = getWaktuPelaksanaan[1];
	if((waktuPelaksanaanStart == '') || (waktuPelaksanaanEnd == '')) {
		$('#inputWaktuPelaksanaan').addClass('is-danger');
		toast('danger', 'Mohon masukkan waktu pelaksanaan');
		return;
	} else {
		$('#inputWaktuPelaksanaan').removeClass('is-danger');
	}

	// check necessity
	var necessity = $('#selectKeperluan').val();
	if(necessity == 'Pilih keperluan...') {
		$('#selectKeperluanFrame').addClass('is-danger');
		toast('danger', 'Mohon pilih keperluan anda');
		return;
	} else {
		$('#selectKeperluanFrame').removeClass('is-danger');
	}

	// perform query
	if(name && email && gender && agency && telephone && tanggalPelaksanaan && waktuPelaksanaanStart && waktuPelaksanaanEnd && necessity) {
		new Promise(resolve => {
			$('#btnFormuliTamuDaftar').addClass('is-loading');
			resolve();
		}).then( _ => {
			new Promise(resolve => {
				$.ajax({
					url: base_url + 'formulir/upload',
					method: 'POST',
					dataType: 'json',
					data: {
						name: name,
						email: email,
						gender: gender,
						agency: agency,
						address: address,
						telephone: telephone,
						teacherCount: guruCount,
						studentCount: siswaCount,
						visitDate: tanggalPelaksanaan,
						visitTimeStart: waktuPelaksanaanStart,
						visitTimeEnd: waktuPelaksanaanEnd,
						necessity: necessity
					},
					success: response => {
						if(response.success) {
							$('#cardFrameInput').fadeOut( _ => {
								$('#cardFrameSuccess').fadeIn( _ => {
									new Promise(resolve => {
										$('#textNama').val(null);
										$('#textEmail').val(null);
										$('#textInstansi').val(null);
										$('#textAlamat').val(null);
										$('#textTelepon').val(null);
										$('#textGuruCount').val(null);
										$('#textSiswaCount').val(null);
										if(datePicker[0]) datePicker[0].clear();
										if(timePicker[0]) timePicker[0].clear();
										$('#selectKeperluan').val('Pilih keperluan...');
										resolve();
									}).then( _ => {
										setTimeout( _ => {
											$('#cardFrameSuccess').fadeOut( _ => {
												$('#cardFrameInput').fadeIn( _ => {
													$('#cardFrameInputScroll').animate({ scrollTop: 0 }, 500);
													$('#btnFormuliTamuDaftar').removeClass('is-loading');
												});
											});
										}, 2500);
									});
								});
							});
						} else {
							toast('danger', 'Terjadi kesalahan saat mengunggah data');
						}
					},
					error: response => {
						console.log('ERROR | ' + response.status);
						toast('danger', 'Terjadi kesalahan saat mengunggah data');
					}
				});
				resolve();
			}).then( _ => {
				setTimeout( _ => {
					$('#btnFormuliTamuDaftar').removeClass('is-loading');
				}, 1000);
			});
		});
	}
};

const toast = async (type = 'is-info', msg) => {
	if(!msg) return;
	switch(type) { case 'success': type = 'is-success'; break; case 'danger': type = 'is-danger'; break;  }
	bulmaToast.toast({ message: msg, type: type, dismissible: true, animate: { in: 'fadeIn', out: 'fadeOut' } });
};

const openModalContohSurat = async _ => {
	$('#modalContohSurat').addClass('is-active');
	$('#modalContohSuratBackground').off('click').click( _ => { $('#modalContohSurat').fadeOut( _ => { $('#modalContohSurat').removeClass('is-active'); $('#modalContohSurat').removeAttr('style'); }); });
	$('#modalContohSuratClose').off('click').click( _ => { $('#modalContohSurat').fadeOut( _ => { $('#modalContohSurat').removeClass('is-active'); $('#modalContohSurat').removeAttr('style'); }); });
};