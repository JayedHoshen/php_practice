<?php include_once('./inc/header.php'); ?>

<!--============ Edit & Updated Student Information: PHP/HTML code ============-->
<h2 class="page_title">Edit & Update Student information.</h2>
<div class="edit_student">
    <?php 
        if ( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        	$student_id = $_POST['stdid'];
        	
        	// database query
        	$query = "SELECT * FROM student_info WHERE id = '$student_id'";
        	$result = mysqli_query($connection, $query);
        	
        	$student_name = '';
        	$student_roll = '';
        	$student_do_birth = '';
        	$student_tech = '';
        	$student_sem = '';
        	$student_address = '';
        	$student_mobile = '';
        	
        	// show data from database
        	if (mysqli_num_rows($result) > 0) {
        		while ($row = mysqli_fetch_assoc($result)) {
        			$student_name = $row['name'];
        			$student_roll = $row['roll'];
        			$student_do_birth = $row['do_birth'];
        			$student_tech = $row['tech'];
        			$student_sem = $row['sem'];
        			$student_address = $row['address'];
        			$student_mobile = $row['mobile'];
        		}
        	}
        ?>
    <form action="manage_student.php" method="post">
        <input type="hidden" name="stdid" value="<?php echo $student_id;?>">
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="inputNam">Student Name</label>
                <input type="text" class="form-control" id="inputNam" name="inputNam" value="<?php echo $student_name; ?>" required>
            </div>
			<div class="form-group col-md-4">
                <label for="inputRol">Class Roll</label>
                <input name="inputRol" type="number" class="form-control" id="inputRol" value="<?php echo $student_roll; ?>" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="inputTec">Technology</label>
                <input name="inputTec" type="text" class="form-control" id="inputTec" value="<?php echo $student_tech; ?>" required>
            </div>
            <div class="form-group col-md-4">
                <label for="inputDO">Date Of Birth</label>
                <input name="inputDob" type="date" class="form-control" id="inputDO" value="<?php echo $student_do_birth; ?>"required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputSe">Semister</label>
                <input name="inputSe" type="text" class="form-control" id="inputSe" value="<?php echo $student_sem; ?>" required>
            </div>
            <div class="form-group col-md-8">
                <label for="inputMobil">Mobile Number</label>
                <input name="inputMobil" type="text" class="form-control" id="inputMobil" value="<?php echo $student_mobile; ?>" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputAddres">Full Address</label>
                <input name="inputAddres" type="text" class="form-control" id="inputAddres" value="<?php echo $student_address; ?>" required>
            </div>
        </div>
        <button name="submitBtn" type="submit" class="btn btn-primary">Update</button>
    </form>
    <?php
    }
    else {
        echo '<h1>Ohh! Student id not found...</h2><p>Click here to <a href="manage_student.php">Edit</a> Student Information</p>';
    }

    ?>
</div>

<!--============ FOOTER: php code ============-->
<?php include_once('./inc/footer.php'); ?>