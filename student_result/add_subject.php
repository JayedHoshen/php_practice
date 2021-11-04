<!--============ HEADER: php code ============-->
<?php include_once('./inc/header.php'); ?>

<!--============ Add Subject: PHP code ============-->		



<!--============ Add Subject: HTML code ============-->		
<div class="container p-2">
    <div class="row">
        <div class="col-lg-12 p-0">
            <h2 class="page_title">Subject and Marks Information Form</h2>
            <div class="add_student_from p-3">
                <form action="" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="inputName">Student Name</label>
                            <input name="inputName" type="text" class="form-control" id="inputName" placeholder="Student name..." required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputRoll">Class Roll</label>
                            <input name="inputRoll" type="number" class="form-control" id="inputRoll" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="inputTech">Technology</label>
                            <input name="inputTech" type="text" class="form-control" id="inputTech" placeholder="Civil, computer...." required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputDOB">Date Of Birth</label>
                            <input name="inputDOB" type="date" class="form-control" id="inputDOB" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputSem">Semister</label>
                            <input name="inputSem" type="text" class="form-control" id="inputSem" placeholder="1, 2, 3..." required>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="inputMobile">Mobile Number</label>
                            <input name="inputMobile" type="text" class="form-control" id="inputMobile" placeholder="Type your 11 digit mobile number....." required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Full Address</label>
                        <input name="inputAddress" type="text" class="form-control" id="inputAddress" placeholder="Purana Paltan. Dhaka – 1000. Bangladesh.." required>
                    </div>
                    <button name="submitBtn" type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!--============ FOOTER: php code ============-->
<?php include_once('./inc/footer.php'); ?>		
