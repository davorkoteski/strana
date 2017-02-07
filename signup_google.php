<?php 

include "includes/header.php"; 
include "includes/navigation.php";
include "signup_database.php";
?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <?php 
                    if(isset($_SESSION['user_id'])) 
                    { 
                        header("Location: profile.php"); 
                    } 
                    else if(isset($_SESSION['value']) && $_SESSION['value'] == 3) 
                    { 
                        ?>
                        <form action="" method="post" id="register-form">
                            <div class="form-group col-sm-6 form-first">
                                <input value="<?php echo $_SESSION['firstname']; ?>" type="text" id="first" class="form-control" name="first" placeholder="First">
                            </div>
                            <div class="form-group col-sm-6 form-first">
                                <input value="<?php echo $_SESSION['lastname']; ?>" type="text" id="last"  class="form-control" name="last" placeholder="Last">
                            </div>
                            <div class="form-group col-sm-12">
                                <input value="<?php echo $_SESSION['email']; ?>" type="email" id="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="form-group col-sm-12">
                                <input value="<?php echo $_SESSION['birthday']; ?>" type="date" id="birthday" class="form-control" name="birthday">
                            </div>
                            <div class="form-group col-sm-12">
                                <select class="select_country form-control" name="country">
                                    <option class="option_country">Select Country</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-12">
                                <?php if(isset($response)) { echo $response; }  ?>
                            </div>
                            <div class="form-group col-sm-6 col-sm-offset-4">
                                <input class="btn btn-primary" id="register" type="submit" name="register" value="Register">
                            </div>
                        </form>
                        <?php 
                    } 
                    ?>
                </div>  
            </div>
        </div>
    </section>
</body>
</html>