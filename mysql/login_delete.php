<?php include "functions.php";?>
<?php include "db.php";?>
<?php include "includes/header.php"; ?>
<?php deleteRows(); ?>

    <title>Delete</title>

<!-- Username and Password Form -->
<body>
    <div class="container">
        <h1 class="text-center">Delete:</h1>
        <div class="col-xs-6">

            <form action="login_delete.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="form-group">
                    <input class="btn btn-primary" type="submit" name="submit" value="DELETE">
                </div>

                <div class="form-group">
                    <select name='id'>
                        <?php showAllData(); ?>
                    </select>
                </div>
             </div>
         </div>
            </form>

        </div>
     </div>
<?php include "includes/footer.php"; ?>