<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Human Resource Management System</title>
    <link href="adminEmployeeDataManagement.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="Logo">
            <div id="logo"></div>
            <h3 id="logoName">Innovate Nepal</h3>
        </div>

        <nav>
            <a href="adminDashboard.php" id="home">Home</a>
        </nav>

        <div class="userlogo">
            <p>Bijay Gurung</p>
            <div class="image"></div>
        </div>

        <p class="role">Admin</p>
    </header>

    <section>
        <div class="sideNavbar">
            <button id="dashboard" onclick="dashboard()">Dashboard</button>
            <button id="employeeDataManagement" onclick="edm()">Employee Data Management</button>
            <button id="payroll">Payroll Management</button>
            <button id="Benefits">Benefits Management</button>
            <button id="performanceEvaluation">performance Evaluation</button>
            <button id="logout">Logout</button>

            <script>
                function dashboard(){
                    window.location.href = 'adminDashboard.php';
                }

                function edm(){
                    window.location.href = 'adminEmployeeDataManagement.php';
                }
            </script>
        </div>    

        <div class="searchSection">
            <input type="text" id="searchbar" name="searchbar" placeholder="Search....">
            <button><i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i></button>
        </div>

        <div class="addNewEmployee">
            <button>Add New Employee</button>
        </div>

        <div class="content">
            <table>
                <tr id="heading">
                    <th>Employee Name</th>
                    <th>Branch</th>
                    <th>Role</th>
                    <th>Department</th>
                    <th>Actions</th>
                </tr>
                    <tr>
                        <td>Bijay Gurung</td>
                        <td>Tokha Branch</td>
                        <td>Fullstack Developer</td>
                        <td>Development</td>
                        <td>
                            <div class="actions">
                                <i class="fa-solid fa-eye" style="color: #ffffff;" onclick="#"></i>
                                <i class="fa-solid fa-pencil" style="color: #ffffff;" onclick="#"></i>
                                <i class="fa-solid fa-trash" style="color: #ffffff;" onclick="#"></i>
                            </div>
                        </td>
                    </tr>
            </table>
        </div>
    </section>

    <script src="https://kit.fontawesome.com/4f9d824da5.js" crossorigin="anonymous"></script>
</body>
</html>