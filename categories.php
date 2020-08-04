<?php
    include 'controllers/header.php';
?>
<div class="container mb-60">
    <div class="row">
        <div class="col-md-3">
            <section class="global-head">
                <article>
                    <h5><strong>Categories</strong></h5>
                    <p><small>Select what you want</small></p>
                </article>
            </section>
            <main class="main-filter">
                <section class="collapse-area">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                <p>Men</p></a>
                            </h4>
                            </div>
                            <!-- give this class 'in' to make it not collapsed
                            for ex class="panel-collapse collapse in" -->
                            <div id="collapse1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Pants</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Rolex</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                <p>Women </p> </a>
                                <!-- <i class="fa fa-chevron-down"></i> -->
                            </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Perfume</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Clothes</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="mt-30">
                    <h4>Country</h4>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search by name ..">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </section>
                <section class="mt-30">
                    <h4>Filter For</h4>
                    <div class="radio">
                        <label><input type="radio" name="filterfor">Newest</label>
                        </div>
                        <div class="radio">
                        <label><input type="radio" name="filterfor">Best Offer</label>
                        </div>
                        <div class="radio">
                        <label><input type="radio" name="filterfor">Best Selling</label>
                    </div>
                </section>
            </main>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-10 px-0">
                    <section class="mt-20">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for products ..">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </section>
                </div>
                <div class="col-md-2 text-center">
                    <a href="place-ad.php">
                        <button class="btn btn-primary mt-20" width="100%" type="button"><small>New Ad <i class="fa fa-plus px-5"></i></small></button>
                    </a>
                </div>
            </div>
            <section class="global-head">
                <article>
                    <h4><strong>Explore New Deals Today</strong></h4>
                    <p>Welcome, We wish you the best deal today</p>
                </article>
            </section>
            <?php
            include 'controllers/product.php';
            ?>
            <?php
                include 'controllers/product.php';
            ?>
            </div>
        </div>
    </div>
</div>
<?php
    include 'controllers/footer.php';
?>