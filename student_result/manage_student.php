<?php include_once('./inc/header.php'); ?>

<!--============ Update Student: PHP code ============-->
<?php
    if ( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        $std_id = $_POST['stdid'];
        $stdNam = $_POST['inputNam'];
        $stdRol = $_POST['inputRol'];
        $stdDob = $_POST['inputDob'];
        $stdTec = $_POST['inputTec'];
        $stdSe = $_POST['inputSe'];
        $stdAddres = $_POST['inputAddres'];
        $stdMobile = $_POST['inputMobil'];

        // database query
        $query = "UPDATE  student_info 
        SET name = '$stdNam', roll = '$stdRol', do_birth = '$stdDob', tech = '$stdTec', sem = '$stdSe', address = '$stdAddres', mobile = '$stdMobile' WHERE id = '$std_id'";

        $result = mysqli_query($connection, $query);

        if ($result == 1) {
            $_SESSION['updSuccess'] = "Thanks, Record updated successfully.";
        } 
        else {
            echo "Update Error: " . $result . "<br>" . mysqli_error($connection);
        }
    }
?>

<!--============ Manage Student: PHP/HTML code ============-->
<h2 class="page_title">Manage Student Information</h2>
<p style="text-align: center; font-size: 20px; color: red; margin: 0px">
    <?php 
        if(isset($_SESSION['updSuccess'])) {
            if(strlen($_SESSION['updSuccess']) > 10) {
                echo '<span>'.$_SESSION['updSuccess'].'</span>';
                $_SESSION['updSuccess'] = '';
            }
        }
    ?>
</p>
<div class="management_table table-responsive">
    <table class="table table-striped table-hover" id="manageTable">
        <thead style="background-color:#FFFFFF;">
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Roll</th>
                <th>Technology</th>
                <th>Semister</th>
                <th>Mobile</th>
                <th>Admission_date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // database query
                $query = "SELECT * FROM student_info ORDER BY sem ASC, tech ASC, roll ASC";
                $result = mysqli_query($connection, $query);
                
                // collecting data from database
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $data = '';
                        $data .= '<tr>';
                        $data .= '<td>'.$row['id'].'</td>';
                        $data .= '<td>'.$row['name'].'</td>';
                        $data .= '<td>'.$row['roll'].'</td>';
                        $data .= '<td>'.$row['tech'].'</td>';
                        $data .= '<td>'.$row['sem'].'</td>';
                        $data .= '<td>'.$row['mobile'].'</td>';
                        $data .= '<td>'.$row['reg_date'].'</td>';
                        $data .= '<td>'.$row['status'].'</td>';
                        $data .= '<td>'.'<form action="edit_student.php" method="post">
                        <input type="hidden" name="stdid" value="'.$row['id'].'">
                        <button type="submit" class="btn btn-primary" style="cursor:pointer;">
                        <i class="fa fa-edit"></i> Edit</button></form>'.'</td>';
                        $data .= '</tr>';
                        
                        echo $data;
                    }
                }
            ?>
        </tbody>
    </table>
</div>

<!--============ FOOTER: php code ============-->
<?php include_once('./inc/footer.php'); ?>