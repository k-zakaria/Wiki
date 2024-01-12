<section class="py-5">
    <?php foreach ($wiki as $wikis) : ?>
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="https://dummyimage.com/400x300/dee2e6/6c757d.jpg" alt="..."></div>
                <div class="col-md-6">
                    <h1 class="display-5 fw-bolder"><?= $wikis->title ?></h1>
                    <div class="fs-5 mb-5">
                        <span><?= $wikis->dateCreate ?></span>
                    </div>
                    <p class="lead"><?= $wikis->content ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</section>