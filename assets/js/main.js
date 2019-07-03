$(function() {
	$(".navbar-burger").click(function() { $(".navbar-burger").toggleClass("is-active"); $(".navbar-menu").toggleClass("is-active"); });
	var carouselOptions = {
		effect: 'fade',
		autoplay: true,
		autoplaySpeed: 6000,
		loop: true,
		navigation: false,
		navigationKeys: false,
		duration: 1000,
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
	// bulmaToast.toast({
	// 	message: 'Hello There',
	// 	type: 'is-success',
	// 	dismissible: true,
	// 	animate: { in: 'fadeIn', out: 'fadeOut' }
	// });
});