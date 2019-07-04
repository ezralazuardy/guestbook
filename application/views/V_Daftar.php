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
<div class="container" style="padding-top: 33px; padding-bottom: 33px;">
    <div>
        <table id="tableDaftarTamu" class="display table is-bordered is-striped is-hoverable is-fullwidth" style="width: 100%;">
            <thead>
                <tr>
                    <th class="has-text-centered">No.</th>
                    <th class="has-text-centered">Nama</th>
                    <th class="has-text-centered">Instansi</th>
                    <th class="has-text-centered">Tanggal Masuk</th>
                </tr>
            </thead>
            <tbody>
				<?php
					if(isset($data)) {
						$number = 1;
						foreach($data as $list) {
							echo '<tr>';
							echo '<td class="has-text-centered">'.$number.'.</td>';
							echo '<td>'.$list["name"].'</td>';
							echo '<td>'.$list["agency"].'</td>';
							echo '<td>'.$list["created_at"].'</td>';
							echo '</tr>';
							$number++;
						}
					}
				?>
            </tbody>
        </table>
    </div>
</div>