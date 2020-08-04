<?php
    include 'controllers/header.php';
?>
    <div class="container">
                <!-- place an Ad -->
        <section class="global-head">
            <article>
                <h4><strong>Place an Ad</strong></h4>
                <p>Please make sure you add all details to your Ad</p>
            </article>
        </section>
        <!--  edit form to add details to Ad -->
        <form action="" class="p-20">
            <div class="row">
                <!-- title -->
                    <div class="col-sm-2 mb-20">
                        <label for="title">Title</label>
                    </div>
                    <div class="col-sm-10 mb-20">
                        <input type="text" class="form-control" id="title" placeholder="search about products">
                        <span class="validation-color">70 characters left</span>
                    </div>
                <!-- main category -->
                    <div class="col-md-2 col-sm-4 mb-20">
                        <label for="title">Main category</label>
                    </div>
                    <div class="col-md-4 col-sm-8 mb-20">
                        <select class="form-control select-style" id="sel1">
                            <option value="" selected disabled>search about category</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                    <!-- main category -->
                        <div class="col-md-2 col-sm-4 mb-20">
                            <label for="title">Main category</label>
                        </div>
                        <div class="col-md-4 col-sm-8 mb-20">
                            <select class="form-control select-style" id="sel1">
                                <option value="" selected disabled>search about category</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <!-- Description -->
                            <div class="col-sm-2 mb-20">
                                <label for="title">Description</label>
                            </div>
                            <div class="col-sm-10 mb-20">
                                <textarea name="" id="" cols="30" rows="4" placeholder="write a description"></textarea>
                                <span class="validation-color">4689 characters left</span>
                            </div>
                        <!-- photos -->
                            <div class="col-sm-2 mb-20">
                                <label for="choose-photo">photos</label>
                            </div>
                            <div class="col-sm-10 mb-20">
                                <div  class="relative">
                                    <input class="multable-photos" id="file-input" type="file" multiple>
                                    <div id="preview" class="pro-images">
                                    </div>
                                </div>
                            </div>
                    <!-- country -->
                        <div class="col-md-2 col-sm-4 mb-20">
                            <label for="title">country</label>
                        </div>
                        <div class="col-md-4 col-sm-8 mb-20">
                            <select class="form-control select-style" id="sel1">
                                <option value="" selected disabled>country</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <!-- name -->
                        <div class="col-md-2 col-sm-4 mb-20">
                            <label for="name"> Name</label>
                        </div>
                        <div class="col-md-4 col-sm-8 mb-20">
                            <input type="text" class="form-control" id="NAme" placeholder="Add Name">
                        </div>
                        <!-- mobile number -->
                        <div class="col-md-2 col-sm-4 mb-20">
                            <label for="mobile-num">Mobile Number</label>
                        </div>
                        <div class="col-md-4 col-sm-8 mb-20">
                            <input type="number" class="form-control" id="mobile-num" placeholder="Add Number">
                        </div>
                        <!-- Email Address -->
                        <div class="col-md-2 col-sm-4 mb-20">
                            <label for="email-add">Email Address</label>
                        </div>
                        <div class="col-md-4 col-sm-8 mb-20">
                            <input type="email" class="form-control" id="email-add" placeholder="Add Email">
                        </div>
                        <!-- gender -->
                        <div class="col-md-2 col-sm-4 mb-20">
                            <label for="Gender">Gender</label>
                        </div>
                        <div class="col-md-4 col-sm-8 mb-20">
                            <input type="text" class="form-control" id="Gender" placeholder="Gender">
                        </div>
                        <!-- size -->
                        <div class="col-md-2 col-sm-4 mb-20">
                            <label for="size">Size</label>
                        </div>
                        <div class="col-md-4 col-sm-8 mb-20">
                            <input type="number" class="form-control" id="size" placeholder="Size">
                        </div>
                        <!-- mobile number -->
                        <div class="col-md-2 col-sm-4 mb-20">
                            <label for="year">year</label>
                        </div>
                        <div class="col-md-4 col-sm-8 mb-20">
                            <input type="number" class="form-control" id="year" placeholder="yaer">
                        </div>
                        <!-- mobile number -->
                        <div class="col-md-2 col-sm-4 mb-20">
                            <label for="shape">shape</label>
                        </div>
                        <div class="col-md-4 col-sm-8 mb-20">
                            <input type="text" class="form-control" id="shape" placeholder="shape">
                        </div>
                        <!-- contact me -->
                        <div class="col-md-2 col-sm-4 mb-20">
                            <label for="contact-me">contact me by</label>
                        </div>
                        <div class="col-md-10 col-sm-8 mb-20">
                            <label class="radio-inline"><input type="radio" name="optradio" checked>Both</label>
                            <label class="radio-inline"><input type="radio" name="optradio">phone</label>
                            <label class="radio-inline"><input type="radio" name="optradio">message</label>
                        </div>
                        <!-- submit -->
                        <div class="col-sm-12 text-right">
                            <a href="product-details.php" class="p-20">Preview Your Ad</a>
                            <button class="btn btn-primary " width="100%" type="button"><small>Submit </small></button>
                        </div>
                    </div>
                </form>
            </div>
<?php
    include 'controllers/footer.php';
?>