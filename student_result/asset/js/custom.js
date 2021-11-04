// datatables.net start (manage_student.php)
$(document).ready(function() {
    $('#manageTable').DataTable({
        scrollY: '50vh',
        scrollCollapse: true,
        "lengthMenu": [
            [5, 10, 20, -1],
            [5, 10, 20, "All"]
        ]
    });
});