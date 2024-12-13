<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Profile - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>
    
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-3">
                <?php include 'layouts/sidebar.php' ?>
            </div>
            <div class="col-lg-9">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Update Profile</h2>
                </div>
                <div class="mt-4">
                    <div class="card">
                        <div class="card-body">
                            <form action="" class="d-flex flex-column gap-3">
                                <div class="form-group col-md-6 mt-3 gap-2 d-flex flex-column">
                                    <img src="../assets/img/profile.png" class="border-2 border-black rounded-circle" style="width: 7.5rem;"/>
                                    <!-- <input type="file" class="form-control" name="title" placeholder="John Doe"> -->
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Full Name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter Post Title">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email 
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="email" class="form-control" name="title" placeholder="john.doe@example.com">
                                </div>

                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary">Update Profile</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>