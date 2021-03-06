<!--============ Side menu: HTML code ============-->
<div class="col-lg-3">
    <div class="accordion" id="accordionExample">
        <!-- Dashboard start -->
        <div class="card">
            <div class="card-header show p-0" id="headingDashboard">
                <h2 class="mb-0"><a href="index.php">
                    <button class="p-3 btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseDashboard" aria-expanded="false" aria-controls="collapseDashboard">
                    <i class="fas fa-house-user"></i> Dashboard
                    </button></a>
                </h2>
            </div>
        </div>
        <!-- Student start -->
        <div class="card">
            <div class="card-header p-0" id="headingTwo">
                <h2 class="mb-0">
                    <button class="p-3 btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <i class="fas fa-user-graduate"></i> Students
                    </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse sub_menu_style" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    <ul>
                        <li><a href="#">Student Admission</a></li>
                        <li><a href="#">Manage Students</a></li>
                        <li><a href="#">Update Students</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Class start -->
        <div class="card">
            <div class="card-header p-0" id="headingThree">
                <h2 class="mb-0">
                    <button class="p-3 btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <i class="fas fa-school"></i> Student Classes
                    </button>
                </h2>
            </div>
            <div id="collapseThree" class="collapse sub_menu_style" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <ul>
                        <li><a href="#">Add Class</a></li>
                        <li><a href="#">Manage Class</a></li>
                        <li><a href="#">Update Class</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Subject start -->
        <div class="card">
            <div class="card-header p-0" id="headingFour">
                <h2 class="mb-0">
                    <button class="p-3 btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <i class="fas fa-book-reader"></i> Subjects
                    </button>
                </h2>
            </div>
            <div id="collapseFour" class="collapse sub_menu_style" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                    <ul>
                        <li><a href="#">Add Subject</a></li>
                        <li><a href="#">Manage Subject</a></li>
                        <li><a href="#">Update Subject</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Result start-->
        <div class="card">
            <div class="card-header p-0" id="headingFive">
                <h2 class="mb-0">
                    <button class="p-3 btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    <i class="fas fa-database"></i> Result
                    </button>
                </h2>
            </div>
            <div id="collapseFive" class="collapse sub_menu_style" aria-labelledby="headingFive" data-parent="#accordionExample">
                <div class="card-body">
                    <ul>
                        <li><a href="#">Create Result</a></li>
                        <li><a href="#">View Result</a></li>
                        <li><a href="#">Update Result</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Admin start -->
        <div class="card">
            <div class="card-header p-0" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left p-3" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-users-cog"></i> Admin
                    </button>
                </h2>
            </div>
            <div id="collapseOne" class="collapse sub_menu_style" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <ul>
                        <li><a href="#">Add New Admin</a></li>
                        <li><a href="#">Remove Admin</a></li>
                        <li><a href="#">Change password</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>