<?php
    include 'controllers/header.php';
?>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <!-- slider -->
                <!-- to be displayed correctly both section must have same image src 
                the loop will be done twice
                -->
                <div class="slider-for">
                    <!-- Here -->
                    <section>
                        <img class="img-responsive h-50" src="images/watch.png" alt=""> 
                    </section>
                    <section>
                        <img class="img-responsive h-50" src="images/002.png" alt=""> 
                    </section>
                    <section>
                        <img class="img-responsive h-50" src="images/003.png" alt="">
                    </section>
                    <section>
                        <img class="img-responsive h-50" src="images/003.png" alt="">
                    </section>

                </div>
                <div class="slider-nav">
                    <!-- and Here -->
                    <div class="item ">
                        <img class="img-responsive" src="images/watch.png" alt="">
                    </div>
                    <div class="item ">
                        <img class="img-responsive" src="images/002.png" alt="">
                        </div>
                    <div class="item ">
                        <img class="img-responsive" src="images/003.png" alt="">
                    </div>
                    <div class="item ">
                        <img class="img-responsive" src="images/003.png" alt="">
                    </div>
                </div>

            </div>
            <div class="col-md-7">
                <section class="product-card">
                    <div class="row">
                        <div class="col-sm-12 padding-adjust">
                            <h4><strong>Pre owned rolex</strong></h4>
                            <p> <img src="images/saudi.svg" class="mb-4" width="20px" alt=""> <span class="px-10 size-10 color-gray">Rolex watches</span> - <span class="px-10 size-10 color-gray">Saudi Arabia</span> <span class="rate">4.5 <i class="icon-star"></i></span></p>
                            <p class="mt-20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error unde sequi nobis asperiores eos quidem saepe consequuntur sint, atque dignissimos, ut perferendis commodi rerum aspernatur ratione doloremque ipsam quibusdam similique!</p>
                        </div>
                        <div class="col-sm-12 padding-adjust">
                            <h5 class="mt-20"><strong>Product Details</strong></h5>
                            <ul>
                                <li><p><strong>Year: </strong><span>2020</span></p></li>
                                <li><strong>Shape: </strong><span>Rounded</span></li>
                                <li><strong>Weight: </strong><span>10gm</span></li>
                            </ul>
                        </div>
                        <!-- <div class="col-sm-3 text-center">
                            <img class="product-card__img" src="images/watch.png" width="50%" alt="">
                        </div> -->
                        <div class="btn-group mt-30" role="group" aria-label="...">
                            <button type="button" class="btn btn-default text-center"><a href="messages.php"><i class="icon-message_square"></i><span class="px-10">Send Message</span></a></button>
                            <!-- can take class "is-favorite" -->
                            <button type="button" class="btn btn-default text-center is-favorite"><i class="icon-heart"></i><span class="px-10">Favorite</span></button>
                            <button type="button" class="btn btn-default text-center"><i class="icon-whatsapp"></i><span class="px-10">Send Whatsapp</span></button>
                            <button type="button" class="btn btn-default text-center"><i class="icon-flag"></i><span class="px-10">Report</span></button>                            

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <section class="comment-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <form action="">
                        <label for="">Comment</label>
                        <textarea name="comment" width="100%" id="" cols="15" rows="5" placeholder="Type Comment for the owner"></textarea>
                        <button class="btn btn-link mt-20" type="submit"><small>Add Comment</small></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php
    include 'controllers/footer.php';
?>


