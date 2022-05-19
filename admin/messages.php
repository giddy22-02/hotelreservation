<!--Header Section-->
<?php
include ('actions/connect.php');

?>
<div class="card my-3 table-responsive">
    <div class="card-header fw-bold" style="background:#8c19c2;">
        <div class="row">
            <div class="col-md-4 text-left text-light">
                <h3>Admins</h3>
            </div>
            <div class="col-md-4 text-center">
                <!--Notification Message upon submission-->
                <?php
                if(isset($_SESSION['status']))
                {?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">   
                        </button>
                    </div>
                    <?php
                    unset($_SESSION['status']);
                }?>
                <!--Notification Message upon submission-->
            </div>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
               require_once('partials/i_messages.php');
                ?>
        </tbody>
    </table>
</div>