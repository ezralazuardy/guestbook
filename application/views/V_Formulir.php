<section class="hero is-fullheight has-carousel">
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
					<a class="navbar-item is-active">Formulir</a>
					<a class="navbar-item" href="<?= base_url('daftar-tamu'); ?>">Daftar Tamu</a>
				</div>
			</div>
		</div>
	</nav>
	<div class="hero-body white" style="margin-top: 12px;">
		<div class="column is-6">
			<h1 class="title is-1 white" style="margin-bottom: 32px;">Buku Tamu<br/>BPTIK DIKBUD.</h1>
			<h2 class="subtitle is-6 white">Silahkan isi formulir disamping untuk mendaftar sebagai tamu di BPTIK.</h2>
		</div>
		<div class="column is-1"></div>
		<div class="column is-5">
			<div class="card" style="border-radius: 8px;">
				<header class="card-header">
					<p class="card-header-title">
						Formulir Tamu
					</p>
					<a class="card-header-icon" aria-label="Informasi" title="Informasi" data-show="quickview" data-target="quickViewInfo">
						<span class="icon">
							<i class="fas fa-info-circle" aria-hidden="true"></i>
						</span>
					</a>
				</header>
				<div class="card-content card-content-scrollable">
					<form id="formulirTamu">
						<div class="field">
							<label class="label">Nama</label>
							<div class="control">
								<input class="input" type="text" name="textNama" placeholder="Masukkan nama lengkap" required>
							</div>
						</div>
						<div class="field">
							<label class="label">Alamat surel</label>
							<div class="control">
								<input class="input" type="email" name="textEmail" placeholder="Masukkan alamat surel" required>
							</div>
						</div>
						<div class="field">
							<label class="label">Instansi</label>
							<div class="control">
								<input class="input" type="text" name="textInstansi" placeholder="Masukkan asal instansi" required>
							</div>
						</div>
						<div class="field">
							<label class="label">Alamat</label>
							<div class="control">
								<textarea class="textarea" name="textAlamat" placeholder="Masukkan alamat lengkap" required></textarea>
							</div>
						</div>
						<div class="field">
							<label class="label">No. Telepon</label>
							<div class="control">
								<input class="input" type="text" name="textNoTelp" placeholder="Masukkan nomor telepon" required>
							</div>
						</div>
						<div class="field">
							<label class="label">Jenis Kelamin</label>
							<div class="control">
								<input class="is-checkradio is-info" id="radioJenisKelamin1" type="radio" name="radioJenisKelamin" checked>
								<label for="radioJenisKelamin1">Laki - laki</label>
								<input class="is-checkradio is-info" id="radioJenisKelamin2" type="radio" name="radioJenisKelamin">
								<label for="radioJenisKelamin2">Perempuan</label>
							</div>
						</div>
						<div class="field">
							<label class="label">Keperluan</label>
							<div class="control">
								<div class="select">
								<select name="selectKeperluan" required>
									<option>Pilih keperluan</option>
									<option>Keperluan A</option>
									<option>Keperluan B</option>
									<option>Keperluan C</option>
								</select>
							</div>
							</div>
						</div>
						<div class="field">
							<label class="label">Tanggal masuk</label>
							<div class="control">
								<input type="date" required>
							</div>
						</div>
					</div>
					<input id="formulirTamuSubmit" type="submit" hidden />
				</form>
				<footer class="card-footer">
					<a class="card-footer-item" onclick="$('#formulirTamuSubmit').trigger('click');"><b>Daftar</b></a>
				</footer>
			</div>
		</div>
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