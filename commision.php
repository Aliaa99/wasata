<?php
    include 'controllers/header.php';
?>
    <div class="container  m-h-50 mb-60">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="sideprofile">
                    <section class="global-head">
                        <article>
                            <h4><strong>Commision</strong></h4>
                            <p>Change your settings</p>
                        </article>
                    </section>
                        <!-- tabs -->
                     <ul class="nav nav-tabs nav-stacked">
                        <li class="active"><a data-toggle="tab" href="#commision">Commision</a></li>
                        <li><a data-toggle="tab" href="#bank-accounts">Bank Accounts</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 col-sm-8">
                <div class="profilepage">
                    <div class="tab-content">
                        <!-- tabs content -->
                        <!-- Commision -->
                        <div id="commision" class="tab-pane fade in active">
                            <section class="global-head">
                                <article>
                                    <h4><strong>Commision</strong></h4>
                                    <p>calculate website's commision</p>
                                </article>
                            </section>
                            <!-- form -->
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-sm-3" >Price</label>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control"  placeholder="150 USD" >
                                        <span class="validation-color">You should pay 50 USD</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for ="" class="control-label col-sm-3" >Account Name</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" >
                                            <option value="" selected disabled>Account Name</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">        
                                    <div class="col-sm-offset-6 col-sm-4">
                                        <button type="submit" class="btn btn-primary">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                            <!-- Bank Accounts -->
                        <div id="bank-accounts" class="tab-pane fade">
                            <section class="global-head">
                                <article>
                                    <h4><strong>Bank Account</strong></h4>
                                    <p>Bank Account that use to send money by website</p>
                                </article>
                            </section>
                                <!-- table -->
                                <h2>Still not complete from design side</h2>
                            <!-- <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <h5>SAAB Bank</h5>
                                            <p>ACC Number <span>25478965</span></p>
                                        </td>
                                        <td>
                                            <a href="#" class="edit"><i class="fa fa-pencil"></i>Edit Account</a>
                                        </td>
                                        <td>
                                            <a href="#"> <i class="fa fa-trash"></i>Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    include 'controllers/footer.php';
?>