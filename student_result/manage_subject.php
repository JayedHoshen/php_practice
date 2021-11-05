<?php include_once('./inc/header.php'); ?>

<!--============ Update Subject: PHP code ============-->
<?php
    if ( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        $std_id = $_POST['stdid'];
        $subjc_name = $_POST['subjName'];
        $subjc_Code = $_POST['subCode'];
        $subjc_Fmark = $_POST['subFullMark'];
        $subjc_TCmark = $_POST['subTCMark'];
        $subjc_TFmark = $_POST['subTFMark'];
        $subjc_PCmark = $_POST['subPCMark'];
        $subjc_PFmark = $_POST['subPFMark'];

        // database query
        $query = "UPDATE  subject 
        SET name = '$subjc_name', code = '$subjc_Code', f_mark = '$subjc_Fmark', tc_mark = '$subjc_TCmark', tf_mark = '$subjc_TFmark', pc_mark = '$subjc_PCmark', pf_mark = '$subjc_PFmark' WHERE id = '$std_id'";

        $result = mysqli_query($connection, $query);

        if ($result == 1) {
            $_SESSION['subSuccess'] = "Thanks, Subject updated successfully.";
        } 
        else {
            echo "Update Error: " . $result . "<br>" . mysqli_error($connection);
        }
    }
?>

<!--============ Manage Subject: PHP/HTML code ============-->
<h2 class="page_title">Manage Subject Information</h2>
<p style="text-align: center; font-size: 20px; color: red; margin: 0px">
    <?php 
        if(isset($_SESSION['subSuccess'])) {
            if(strlen($_SESSION['subSuccess']) > 10) {
                echo '<span>'.$_SESSION['subSuccess'].'</span>';
                $_SESSION['subSuccess'] = '';
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
                <th>Code</th>
                <th>Full_Marks</th>
                <th>TC_Marks</th>
                <th>TF_Marks</th>
                <th>PC_Marks</th>
                <th>PF_Marks</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // database query
                $query = "SELECT * FROM subject ORDER BY code ASC";
                $result = mysqli_query($connection, $query);
                
                // collecting data from database
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $data = '';
                        $data .= '<tr>';
                        $data .= '<td>'.$row['id'].'</td>';
                        $data .= '<td>'.$row['name'].'</td>';
                        $data .= '<td>'.$row['code'].'</td>';
                        $data .= '<td>'.$row['f_mark'].'</td>';
                        $data .= '<td>'.$row['tc_mark'].'</td>';
                        $data .= '<td>'.$row['tf_mark'].'</td>';
                        $data .= '<td>'.$row['pc_mark'].'</td>';
                        $data .= '<td>'.$row['pf_mark'].'</td>';
                        $data .= '<td>'.'<form action="edit_subject.php" method="post">
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