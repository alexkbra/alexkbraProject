<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <div class="post-preview">
                <h2 class="post-title">
                    <?= $user->nombre ?>
                </h2>
                <h3 class="post-subtitle">
                    <?= $user->email ?>
                </h3>
            </div>
            <a href="<?= base_url() ?>article/loadNew/<?= $user->id ?>" class="btn btn-default">Crear nuevo post</a>
        </div>
        
    </div>
</div>

<hr>