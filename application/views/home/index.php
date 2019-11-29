<!-- <div class="bungkus">
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner imgSlider">
					<div class="carousel-item active">
						<img src="<?= base_url() ?>/assets/img/4.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>Gambar Slide Yang Pertama</h5>
							<p>Gambar pemandangan sungai.</p>
						</div>
					</div>
					<div class="carousel-item imgSlider">
						<img src="<?= base_url() ?>/assets/img/5.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>Gambar Slide Yang Kedua</h5>
							<p>Gambar pemandangan sawah di desa.</p>
						</div>
					</div>
					<div class="carousel-item imgSlider">
						<img src="<?= base_url() ?>/assets/img/6.jpg" class="d-block w-100" alt="...">
						<div class="carousel-caption d-none d-md-block">
							<h5>Gambar Slide Yang Ketiga</h5>
							<p>Gambar pemandangan taman belakang rumah.</p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div> -->



<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?= base_url() ?>/assets/img/8.JPG" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?= base_url() ?>/assets/img/9.JPG" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?= base_url() ?>/assets/img/10.JPG" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

	<div class="jumbotron">
		<div class="row">
      <?php foreach ($dat as $row)  : ?>
        <div class="isi">
          <div class="gambar">
            <img src="<?= base_url() ?>/assets/img/2.jpg">
          </div>
          <div class="desc">
            <p class="nama">
              <?= $row->nama ?>
            </p>
            <p><?= $row->shift ?></p>
            <p><?= $row->spesialis ?></p>
            <p><?= count($row); ?></p>
          </div>
          <div class="clear"></div>
        </div>
      <?php endforeach; ?>
</div>
</div>


