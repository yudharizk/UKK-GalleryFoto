<div class="container my-4 p-5 bg-hero rounded">
    <div class="py-5 text-white">
        <p class="display-5 fw-bold">IMAGE</p>
        <p class="fs-4 col-md-8">Selamat datang di IMAGE! Nikmati perjalanan visual melalui koleksi foto yang memukau dan cerita yang menginspirasi. Mari kita jelajahi dunia melalui lensa kreatif kami</p>
    </div>
</div>
<div class="container">
    <div class="row">
        <?php 
        $tampil=mysqli_query($conn, "SELECT * FROM foto INNER JOIN user ON foto.UserID=user.UserID");
        foreach($tampil as $tampils):
        ?>
        <div class="col-6 col-md-4 col-lg-3 mb-4">
            <div class="card">
                <img src="uploads/<?= $tampils['lokasifile'] ?>" class="object-fit-cover" style="aspect-ratio: 16/9;">
                <div class="card-body">
                    <h5 class="card-title"><?= $tampils['judulfoto'] ?></h5>
                    <p class="card-text text-muted">by: <?= $tampils['username'] ?></p>
                    <a href="?url=detail&&id=<?= $tampils['fotoid'] ?>" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>