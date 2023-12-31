<?php include "includes/header.php"; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Full Name</h3>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="row mt-3">
                                <label class="col-md-4">First Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="first_name" class="form-control" placeholder="First Name"/>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label class="col-md-4">Last Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="last_name" class="form-control" placeholder="Last Name"/>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label class="col-md-4">Full Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" value="<?php echo $result; ?>" placeholder="Full Name"/>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="btn" class="btn btn-success" value="Get Full Name"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php' ?>