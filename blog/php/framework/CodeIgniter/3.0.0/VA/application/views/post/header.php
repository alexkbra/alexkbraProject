<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('<?= base_url()?>plantilla/img/home-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-heading">
                    <h1><?= $post->titulo ?></h1>
                    <h2 class="subheading"><?= $post->descripcion ?></h2>
                    <span class="meta">Posted by <a href="#"><?= $post->creador ?></a> on <?= $post->fecha ?></span>
                </div>
            </div>
        </div>
    </div>
</header>