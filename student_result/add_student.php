<?php include_once('./inc/header.php'); ?>

<!--============ Add Student: PHP code ============-->		
<?php
    if ( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        $stdname = $_POST['inputName'];
        $stdRoll = $_POST['inputRoll'];
        $stdDob = $_POST['inputDOB'];
        $stdTech = $_POST['inputTech'];
        $stdSem = $_POST['inputSem'];
        $stdAddress = $_POST['inputAddress'];
        $stdMob = $_POST['inputMobile'];
        $stdStatus = true;

        // database query
        $query = "INSERT INTO  student_info (name, roll, do_birth, tech, sem, address, mobile, status)
        VALUES('$stdname', '$stdRoll', '$stdDob', '$stdTech', '$stdSem', '$stdAddress', '$stdMob', '$stdStatus')";
        $result = mysqli_query($connection, $query);

        if ($result == 1) {
            $_SESSION['addSuccess'] = 'Thanks, New record created successfully. <a href="manage_student.php">Show Now<a>';
        } 
        else {
            echo "Error: " . $result . "<br>" . mysqli_error($connection);
        }
    }
?>

<!--============ Add Student: HTML code ============-->		
<h2 class="page_title">Student Admission Form</h2>
<p style="text-align: center; font-size: 20px; color: red; margin: 0px">
    <?php 
        if(isset($_SESSION['addSuccess'])) {
            if(strlen($_SESSION['addSuccess']) > 10) {
                echo '<span>'.$_SESSION['addSuccess'].'</span>';
                $_SESSION['addSuccess'] = '';
            }
        }
    ?>
</p>
<div class="add_student_from p-3">
    <form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="inputNam">Student Name</label>
                <input name="inputName" type="text" class="form-control" id="inputNam" placeholder="Student name..." required>
            </div>
            <div class="form-group col-md-4">
                <label for="inputRol">Class Roll</label>
                <input name="inputRoll" type="number" class="form-control" id="inputRol" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="inputTec">Technology</label>
                <input name="inputTech" type="text" class="form-control" id="inputTec" placeholder="Civil, computer...." required>
            </div>
            <div class="form-group col-md-4">
                <label for="inputDO">Date Of Birth</label>
                <input name="inputDOB" type="date" class="form-control" id="inputDO" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputSe">Semister</label>
                <input name="inputSem" type="text" class="form-control" id="inputSe" placeholder="1, 2, 3..." required>
            </div>
            <div class="form-group col-md-8">
                <label for="inputMobil">Mobile Number</label>
                <input name="inputMobile" type="text" class="form-control" id="inputMobil" placeholder="Type your 11 digit mobile number....." required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputAddres">Full Address</label>
                <input name="inputAddress" type="text" class="form-control" id="inputAddres" placeholder="Purana Paltan. Dhaka – 1000. Bangladesh.." required>
            </div>
        </div>
        <button name="submitBtn" type="submit" class="btn btn-primary">Admit</button>
    </form>
</div>

<!--============ FOOTER: php code ============-->
<?php include_once('./inc/footer.php'); ?>