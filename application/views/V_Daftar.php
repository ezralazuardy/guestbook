<section class="hero is-small has-carousel">
	<nav class="navbar is-dark" role="navigation" aria-label="main navigation" style="background-color: #363636;">
		<div class="container is-primary">
			<div class="navbar-brand">
				<a class="navbar-item" href="<?= base_url(); ?>">
					<img src="<?= base_url('assets/img/logo.png') ?>" width="136" height="30" alt="BPTIK DIKBUD Jateng" title="BPTIK DIKBUD Jateng">
				</a>
				<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
				</a>
			</div>
			<div class="navbar-menu">
				<div class="navbar-end">
					<a class="navbar-item" href="<?= base_url('formulir'); ?>">Formulir</a>
					<a class="navbar-item is-active">Daftar Tamu</a>
				</div>
			</div>
		</div>
	</nav>
	<div class="hero-body white" style="margin-top: 16px;">
		<div class="column is-6">
			<h1 class="title is-1 white" style="margin-bottom: 32px;">Daftar Tamu<br/>BPTIK DIKBUD.</h1>
			<h2 class="subtitle is-6 white">Berikut list tamu yang telah terdaftar di BPTIK DIKBUD.</h2>
		</div>
		<div class="column is-6"></div>
	</div>
	<div id="carousel-demo" class="hero-carousel">
		<div class="item-1 hero is-fullheight"
		style="background-image: url('<?= base_url('assets/img/carousel-1.webp') ?>');"></div>
		<div class="item-2 hero is-fullheight"
		style="background-image: url('<?= base_url('assets/img/carousel-2.webp') ?>');"></div>
		<div class="item-3 hero is-fullheight"
		style="background-image: url('<?= base_url('assets/img/carousel-3.webp') ?>');"></div>
	</div>
</section>
<div class="container" style="padding-top: 32px; padding-bottom: 32px;">
    <div>
        <table id="tableDaftarTamu" class="display table is-bordered is-striped is-hoverable is-fullwidth" style="width: 100%;">
            <thead>
                <tr>
                    <th class="has-text-centered" rowspan="2">No.</th>
                    <th class="has-text-centered" rowspan="2">Nama</th>
                    <th class="has-text-centered" rowspan="2">Alamat Surel</th>
                    <th class="has-text-centered" rowspan="2">Jenis Kelamin</th>
                    <th class="has-text-centered" rowspan="2">Instansi</th>
                    <th class="has-text-centered" rowspan="2">Alamat</th>
                    <th class="has-text-centered" rowspan="2">Kontak</th>
                    <th class="has-text-centered" colspan="2">Peserta</th>
                    <th class="has-text-centered" rowspan="2">Tanggal Pelaksanaan</th>
                    <th class="has-text-centered" colspan="2">Waktu Pelaksanaan</th>
                    <th class="has-text-centered" rowspan="2">Keperluan</th>
                </tr>
                <tr>
                    <th class="has-text-centered">Guru</th>
                    <th class="has-text-centered">Siswa</th>
                    <th class="has-text-centered">Mulai</th>
                    <th class="has-text-centered">Selesai</th>
                </tr>
            </thead>
            <tbody>
				<?php
					if(isset($data)) {
						$number = 1;
						foreach($data as $list) {
							echo '<tr>';
							echo '<td class="has-text-centered">'.$number++.'.</td>';
							echo '<td>'.$list["name"].'</td>';
							echo '<td>'.$list["email"].'</td>';
							echo '<td class="has-text-centered">'.(($list["gender"] == "m") ? "Laki - laki" : "Perempuan").'</td>';
							echo '<td>'.$list["agency"].'</td>';
							echo '<td>'.(($list["address"]) ? $list["address"] : "-").'</td>';
							echo '<td>'.$list["telephone"].'</td>';
							echo '<td class="has-text-centered">'.$list["teacher_count"].'</td>';
							echo '<td class="has-text-centered">'.$list["student_count"].'</td>';
							echo '<td class="has-text-centered">'.(date("d F Y", strtotime($list["visit_date"]))).'</td>';
							echo '<td class="has-text-centered">'.(date("H:i", strtotime($list["visit_time_start"]))).'</td>';
							echo '<td class="has-text-centered">'.(date("H:i", strtotime($list["visit_time_end"]))).'</td>';
							echo '<td>'.$list["necessity"].'</td>';
							echo '</tr>';
						}
					}
				?>
            </tbody>
        </table>
    </div>
</div>