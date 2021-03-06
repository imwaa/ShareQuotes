<?php require APPROOT . '/views/include/header.php'; ?>

<style>
    .blockquote-custom {
        position: relative;
        font-size: 1.1rem;
    }

    .blockquote-custom-icon {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: -25px;
        left: 50px;
    }

    .user-created {
        position: absolute;
        top: -35px;
        left: 50px;
    }

    .add_quote {
        position: absolute;
        top: 18%;
        left: 72%;
    }
</style>





<a href="<?php echo URLROOT; ?>/posts/add" class="btn btn-primary btn-lg add_quote">
    <i class="fas fa-feather"> </i> Add Quote
</a>

<div class="container mt-4">


    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h3 class="mb-4">Lastest quotes added</h3>
        </div>
        <?php foreach ($data['posts'] as $post) : ?>
            <div class="col-lg-8 mx-auto">
                <?php flash('post_message'); ?>
            </div>
            <div class="col-lg-8 mx-auto mt-4 mb-4">
                <!-- CUSTOM BLOCKQUOTE -->
                <blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded">
                    <div class="blockquote-custom-icon bg-primary shadow-sm"><i class="fa fa-quote-left text-white"></i></div>
                    <p class="mb-0 mt-2 font-italic">"<?php echo $post->body; ?>"</p>
                    <footer class="blockquote-footer pt-4 mt-4 border-top">
                        <cite title="Source Title"><?php echo $post->author; ?></cite>
                    </footer>

                </blockquote><!-- END -->

                <div class="row">
                    <div class="col">
                        <span class="badge btn-lg badge-primary user-created"><i class="fas fa-user-tie"></i> <?php echo $post->name; ?></span>
                    </div>
                    <div class="col">
                        <footer class="blockquote-footer pt-2 float-right">
                            <cite title="Source Title"><?php echo $post->postCreated; ?></cite>
                        </footer>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <?php require APPROOT . '/views/include/footer.php'; ?>