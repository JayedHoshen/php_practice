<?php include_once('./inc/header.php'); ?>

<!--============ Add Subject: PHP code ============-->		
<?php
    if ( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        $subj_name = $_POST['subjName'];
        $subj_Code = $_POST['subCode'];
        $subj_Fmark = $_POST['subFullMark'];
        $subj_TCmark = $_POST['subTCMark'];
        $subj_TFmark = $_POST['subTFMark'];
        $subj_PCmark = $_POST['subPCMark'];
        $subj_PFmark = $_POST['subPFMark'];

        // database query
        $query = "INSERT INTO  subject (name, code, f_mark, tc_mark, tf_mark, pc_mark, pf_mark)
        VALUES('$subj_name', '$subj_Code', '$subj_Fmark', '$subj_TCmark', '$subj_TFmark', '$subj_PCmark', '$subj_PFmark')";

        $result = mysqli_query($connection, $query);

        if ($result == 1) {
            $_SESSION['addSubj'] = 'Thanks, New Subject created successfully. <a href="manage_subject.php">Show Now<a>';
        } 
        else {
            echo "Error: " . $result . "<br>" . mysqli_error($connection);
        }
    }
?>

<!--============ Add Subject: HTML code ============-->		
<h2 class="page_title">Add Subject & Marks</h2>
<p style="text-align: center; font-size: 20px; color: red; margin: 0px">
    <?php 
        if(isset($_SESSION['addSubj'])) {
            if(strlen($_SESSION['addSubj']) > 10) {
                echo '<span>'.$_SESSION['addSubj'].'</span>';
                $_SESSION['addSubj'] = '';
            }
        }
    ?>
</p>
<div class="add_subject_from p-3">
    <form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
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
            <div class="form-group col-md-8">
                <label for="subFullMark">Full Marks</label>
                <input name="subFullMark" type="number" class="form-control" id="subFullMark" required>
            </div>
            <div class="form-group col-md-4">
                <label for="subTCMark">Theory continue</label>
                <input name="subTCMark" type="number" class="form-control" id="subTCMark" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="subTFMark">Theory Final</label>
                <input name="subTFMark" type="number" class="form-control" id="subTFMark" required>
            </div>
            <div class="form-group col-md-4">
                <label for="subPCMark">Practical continue</label>
                <input name="subPCMark" type="number" class="form-control" id="subPCMark" required>
            </div>
            <div class="form-group col-md-4">
                <label for="subPFMark">Practical Final</label>
                <input name="subPFMark" type="number" class="form-control" id="subPFMark" required>
            </div>
        </div>
        <button name="subBtn" type="submit" class="btn btn-primary">Add</button>
    </form>
</div>

<!--============ FOOTER: php code ============-->
<?php include_once('./inc/footer.php'); ?>