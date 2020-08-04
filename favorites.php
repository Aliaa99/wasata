<?php
    include 'controllers/header.php';
?>
<div class="container mb-60">
    <section class="global-head">
        <article>
            <h4><strong>My Favorite List</strong></h4>
            <p>Collection of your favorite list</p>
        </article>
    </section>
    <div class="row">
        <div class="col-sm-12 px-0">
        <?php
            include 'controllers/product.php';
        ?>
        <?php
            include 'controllers/product.php';
        ?>
        </div>
        <?php
            include 'controllers/product.php';
        ?>
        <?php
            include 'controllers/product.php';
        ?>
        </div>
        <?php
            include 'controllers/product.php';
        ?>
        <?php
            include 'controllers/product.php';
        ?>
        </div>
    </div>
</div>
<?php
    include 'controllers/footer.php';
?>