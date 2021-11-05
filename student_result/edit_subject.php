<?php include_once('./inc/header.php'); ?>

<!--============ Edit & Updated Subject Information: PHP/HTML code ============-->
<h2 class="page_title">Edit & Update Subject information.</h2>
<div class="edit_subject">
    <?php 
        if ( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        	$student_id = $_POST['stdid'];
        	
        	// database query
        	$query = "SELECT * FROM subject WHERE id = '$student_id'";
        	$result = mysqli_query($connection, $query);
        	
        	$subje_name = '';
        	$subje_Code = '';
        	$subje_Fmark = '';
        	$subje_TCmark = '';
        	$subje_TFmark = '';
            $subje_PCmark = '';
            $subje_PFmark = '';

        	// show data from database
        	if (mysqli_num_rows($result) > 0) {
        		while ($row = mysqli_fetch_assoc($result)) {
        			$subje_name = $row['name'];
        			$subje_Code = $row['code'];
        			$subje_Fmark = $row['f_mark'];
        			$subje_TCmark = $row['tc_mark'];
        			$subje_TFmark = $row['tf_mark'];
        			$subje_PCmark = $row['pc_mark'];
        			$subje_PFmark = $row['pf_mark'];
        		}
        	}
        ?>
    <form action="manage_subject.php" method="post">
        <input type="hidden" name="stdid" value="<?php echo $student_id;?>">
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="subjName">Subject Name</label>
                <input name="subjName" type="text" class="form-control" id="subjName" placeholder="Web Development Project..." value="<?php echo $subje_name; ?>" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="subCode">Subject Code</label>
                <input name="subCode" type="number" class="form-control" id="subCode" placeholder="66654....." value="<?php echo $subje_Code; ?>" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="subFullMark">Full Marks</label>
                <input name="subFullMark" type="number" class="form-control" id="subFullMark" value="<?php echo $subje_Fmark; ?>" required>
            </div>
            <div class="form-group col-md-4">
                <label for="subTCMark">Theory continue</label>
                <input name="subTCMark" type="number" class="form-control" id="subTCMark" value="<?php echo $subje_TCmark; ?>" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="subTFMark">Theory Final</label>
                <input name="subTFMark" type="number" class="form-control" id="subTFMark" value="<?php echo $subje_TFmark; ?>" required>
            </div>
            <div class="form-group col-md-4">
                <label for="subPCMark">Practical continue</label>
                <input name="subPCMark" type="number" class="form-control" id="subPCMark" value="<?php echo $subje_PCmark; ?>" required>
            </div>
            <div class="form-group col-md-4">
                <label for="subPFMark">Practical Final</label>
                <input name="subPFMark" type="number" class="form-control" id="subPFMark" value="<?php echo $subje_PFmark; ?>" required>
            </div>
        </div>
        <button name="subBtn" type="submit" class="btn btn-primary">Update</button>
    </form>
    <?php
    }
    else {
        echo '<h1>Ops! Student id not found...</h2><p>Click here to <a href="manage_subject.php">Edit</a> Subject Information</p>';
    }

    ?>
</div>

<!--============ FOOTER: php code ============-->
<?php include_once('./inc/footer.php'); ?>