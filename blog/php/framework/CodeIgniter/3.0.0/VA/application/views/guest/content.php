<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <?php 
                foreach ($listPost->result() as $post) {
            ?>
                <div class="post-preview">
                    <a href="<?= base_url() ?>article/post/<?= $post->url ?>">
                        <h2 class="post-title">
                            <?= $post->titulo ?>
                        </h2>
                        <h3 class="post-subtitle">
                            <?= $post->descripcion ?>
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#"><?= $post->creador ?></a> on <?= $post->fecha ?></p>
                </div>
            <?php
                }
            ?>
            <hr>
            <!-- Pager -->
            <ul class="pager">
                <li class="next">
                    <a href="#">Older Posts &rarr;</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<hr>