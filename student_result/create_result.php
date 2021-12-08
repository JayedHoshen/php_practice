<?php include_once('./inc/header.php'); ?>
<?php
    if ( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        $stdRname = $_POST['stdName'];
        $stdRroll = $_POST['stdRoll'];
        $stdRSname = $_POST['subjName'];
        $stdRScode = $_POST['subCode'];
        $stdR_TCmark = $_POST['subTCMark'];
        $stdR_TFmark = $_POST['subTFMark'];
        $stdR_PCmark = $_POST['subPCMark'];
        $stdR_PFmark = $_POST['subPFMark'];

        // database query
        

        $result = mysqli_query($connection, $query);
        
        if ($result == 1) {
            $_SESSION['pubResult'] = 'Thanks, Result created successfully. <a href="view_result.php">Show Now<a>';
        } 
        else {
            echo "Error: " . $result . "<br>" . mysqli_error($connection);
        }
    }
?>

<!--============ Create Result: PHP/HTML code ============-->
<h2 class="page_title">Create and Publish Individual Student Result</h2>
<p style="text-align: center; font-size: 20px; color: red; margin: 0px">
    <?php 
        if(isset($_SESSION['pubResult'])) {
            if(strlen($_SESSION['pubResult']) > 10) {
                echo '<span>'.$_SESSION['pubResult'].'</span>';
                $_SESSION['pubResult'] = '';
            }
        }
    ?>
</p>
<div class="create_result p-3">
    <form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="stdName">Student Name</label>
                <input name="stdName" type="text" class="form-control" id="stdName" placeholder="Student name..." required>
            </div>
            <div class="form-group col-md-6">
                <label for="stdRoll">Student Roll</label>
                <input name="stdRoll" type="number" class="form-control" id="stdRoll" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="subjName">Subject Name</label>
                <input name="subjName" type="text" class="form-control" id="subjName" placeholder="Web Development Project..." required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="subCode">Subject Code</label>
                <input name="subCode" type="number" class="form-control" id="subCode" placeholder="66654....." required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="subTCMark">Theory continue</label>
                <input name="subTCMark" type="number" class="form-control" id="subTCMark" required>
            </div>
            <div class="form-group col-md-3">
                <label for="subTFMark">Theory Final</label>
                <input name="subTFMark" type="number" class="form-control" id="subTFMark" required>
            </div>
            <div class="form-group col-md-3">
                <label for="subPCMark">Practical continue</label>
                <input name="subPCMark" type="number" class="form-control" id="subPCMark" required>
            </div>
            <div class="form-group col-md-3">
                <label for="subPFMark">Practical Final</label>
                <input name="subPFMark" type="number" class="form-control" id="subPFMark" required>
            </div>
        </div>
        <button name="subBtn" type="submit" class="btn btn-primary">Publish</button>
    </form>
</div>

<!--============ FOOTER: php code ============-->
<?php include_once('./inc/footer.php'); ?>