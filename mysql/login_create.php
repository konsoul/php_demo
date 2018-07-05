<?php include "functions.php"; ?>
<?php include "db.php"; ?>
<?php include "includes/header.php"; ?>
<?php createData(); ?>

<title>Create</title>
<!-- Username and Password Form -->

<body>
    <div class="container">
        <h1 class="text-center">Create:</h1>
        <div class="col-xs-6">

            <form action="login_create.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="form-group">
                    <input class="btn btn-primary" type="submit" name="submit" value="Create">
                </div>
            </form>

        </div>
    </div>


    <?php include "includes/footer.php"; ?>