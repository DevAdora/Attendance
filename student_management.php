<?php
$active = "student_management"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- /* CSS */ -->
    <link href="./styles/aside.css" rel="stylesheet">
    <link href="./styles/index.css" rel="stylesheet">
    <link href="./styles/management.css" rel="stylesheet">

    <title></title>
</head>

<body>

    <?php include('partials/aside.php') ?>

    <?php include('partials/nav.php') ?>

    <section class="management">
        <div class="management-title">
            <h5>Filter Options</h5>
        </div>
        <div class="management-options">
            <select class="select-options">
                <option disabled selected class="placeholder">Department</option>
                <option>SECSA</option>
                <option>SEAS</option>
                <option>SBA</option>
                <option>SHTM</option>
            </select>
            <select class="select-options">
                <option disabled selected class="placeholder">Course</option>
                <option>SECSA</option>
                <option>SEAS</option>
                <option>SBA</option>
                <option>SHTM</option>
            </select>
            <select class="select-options">
                <option disabled selected class="placeholder">Year</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            <button class="btn">NEW</button>
        </div>
        <div class="management-table">
            <table>
                <tr>
                    <th>ID</th>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>MIDDLE NAME</th>
                    <th>DEPT</th>
                    <th>COURSE</th>
                    <th>YEAR</th>
                </tr>
                <tbody>
                    <tr class="management-content">
                        <td>10101010</td>
                        <td>Heart</td>
                        <td>Eledia</td>
                        <td>Titong</td>
                        <td>SECSA</td>
                        <td>BSIT</td>
                        <td>3</td>
                    </tr>
                    <tr class="management-content">
                        <td>10101010</td>
                        <td>Heart</td>
                        <td>Eledia</td>
                        <td>Titong</td>
                        <td>SECSA</td>
                        <td>BSIT</td>
                        <td>3</td>
                    </tr>
                    <tr class="management-content">
                        <td>10101010</td>
                        <td>Heart</td>
                        <td>Eledia</td>
                        <td>Titong</td>
                        <td>SECSA</td>
                        <td>BSIT</td>
                        <td>3</td>
                    </tr>
                    <tr class="management-content">
                        <td>10101010</td>
                        <td>Heart</td>
                        <td>Eledia</td>
                        <td>Titong</td>
                        <td>SECSA</td>
                        <td>BSIT</td>
                        <td>3</td>
                    </tr>
                    <tr class="management-content">
                        <td>10101010</td>
                        <td>Heart</td>
                        <td>Eledia</td>
                        <td>Titong</td>
                        <td>SECSA</td>
                        <td>BSIT</td>
                        <td>3</td>
                    </tr>
                </tbody>
            </table>
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <h2 class="modal-title">Student Information</h2>
                    <span class="close">&times;</span>
                    <div class="flex">
                        <div class="flex-input">
                            <label>ID Number</label>
                            <input type="text" id="idInput" class="modal-input">
                        </div>
                        <div class="flex-input">
                            <label>Department</label>
                            <input type="text" id="deptInput" class="modal-input">
                        </div>
                    </div>
                    <div class="flex">
                        <div class="flex-input">
                            <label>First Name</label>
                            <input type="text" id="firstNameInput" class="modal-input">
                        </div>
                        <div class="flex-input">
                            <label>Last Name</label>
                            <input type="text" id="lastNameInput" class="modal-input">
                        </div>
                    </div>
                    <div class="flex">
                        <div class="flex-input">
                            <label>Middle Name</label>
                            <input type="text" id="middleNameInput" class="modal-input">
                        </div>
                        <div class="flex-input">
                            <label>Course</label>
                            <input type="text" id="courseInput" class="modal-input">
                        </div>
                    </div>
                    <div class="flex">
                        <div class="flex-input">
                            <label>Year</label>
                            <input type="text" id="yearInput" class="modal-input">
                        </div>
                        <div class="flex-buttons">
                            <button id="editBtn" class="modal-btn">Edit</button>
                            <button id="deleteBtn" class="modal-btn">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</body>

</html>

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    var span = document.getElementsByClassName("close")[0];

    var rows = document.getElementsByClassName("management-content");

    for (var i = 0; i < rows.length; i++) {
        rows[i].addEventListener("click", function() {
            var cells = this.getElementsByTagName("td");
            document.getElementById("idInput").value = cells[0].innerText;
            document.getElementById("firstNameInput").value = cells[1].innerText;
            document.getElementById("lastNameInput").value = cells[2].innerText;
            document.getElementById("middleNameInput").value = cells[3].innerText;
            document.getElementById("deptInput").value = cells[4].innerText;
            document.getElementById("courseInput").value = cells[5].innerText;
            document.getElementById("yearInput").value = cells[6].innerText;
            modal.style.display = "block";
        });
    }

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    document.getElementById("editBtn").addEventListener("click", function() {
        alert("Edit button clicked!");
    });

    document.getElementById("deleteBtn").addEventListener("click", function() {
        alert("Delete button clicked!");
    });
</script>