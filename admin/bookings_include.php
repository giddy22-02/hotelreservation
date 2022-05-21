<div class="my-3 table-responsive">
    <div class="row">
        <div class="col-md-4 text-center">
            <!--Notification Message upon submission-->
            <?php
                if(isset($_SESSION['status']))
                {?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Hey!</strong>
                <?php echo $_SESSION['status']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
            <?php
                    unset($_SESSION['status']);
                }?>
            <!--Notification Message upon submission-->
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Full Name</th>
                <th scope="col">Email Address</th>
                <th scope="col">Phone</th>
                <th scope="col">Room Type</th>
                <th scope="col">Check In</th>
                <th scope="col">Check Out</th>
                <th scope="col">Card_Number</th>
                <th scope="col">Security Code</th>
                <th scope="col">Exp Month</th>
                <th scope="col">Exp Year</th>
                <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>
            <?php
               require_once('partials/i_bookings.php');
                ?>
        </tbody>
    </table>
</div>

