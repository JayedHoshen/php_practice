<!--============ HEADER: php code ============-->
<?php include_once('./inc/header.php'); ?>

<!--============ Add Subject: PHP code ============-->		



<!--============ Add Subject: HTML code ============-->		
<div class="container p-0">
    <div class="row">
        <div class="col-lg-12">
            <div class="add_student_from py-3">
                <h2 class="text-center" style="text-decoration: underline; text-decoration-style:double;text-decoration-color:whitesmoke;">Subject and Marks Information Form</h2>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="inputName">Student Name</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Type your name..." required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputRoll">Class Roll</label>
                            <input type="number" class="form-control" id="inputRoll" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputTech">Technology</label>
                            <input type="text" class="form-control" id="inputTech" placeholder="Civil, computer...." required>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputSem">Semister</label>
                            <input type="text" class="form-control" id="inputSem" placeholder="1, 2, 3..." required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputDOB">Date Of Birth</label>
                            <input type="date" class="form-control" id="inputDOB" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputNid">NID No</label>
                            <input type="text" class="form-control" id="inputNid" placeholder="Type your 17 digit nid no...">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPhone">Mobile Number</label>
                            <input type="text" class="form-control" id="inputPhone" placeholder="Type your 11 digit mobile number....." required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Full Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Purana Paltan. Dhaka – 1000. Bangladesh.." required>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                            Check me out
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!--============ FOOTER: php code ============-->
<?php include_once('./inc/footer.php'); ?>		
