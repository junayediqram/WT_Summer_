<html>
    <head>
        <link rel="stylesheet" href="../css/style.css">
    <title> Registration Form</title>
</head>
        <body>
            <div class="header">
        <h1> ABC MANAGEMENT SYSTEM  </h1>
        <h3> We Create Future </h3>
</div>
<div class="topnav">
    <a href = "#">Home</a>
    <a href = "#">About Us</a>
    <a href = "#">Shop</a>
</div>
<div class = "regform">
    <h1> Registration Form </h1>
    <hr>
</div>
<div class = "line-1"></div>
<br>
    </div>
<form action="" method="post" enctype="multipart/form-data">
                <table>
                    <tr><td>First Name:</td>
                    <td> <input type="text"name="fname" ></td></tr>
                    <tr><td>Last Name:</td>
                    <td><input type="text"name="lname"></td></tr>
                    <tr><td>Age:</td>
                    <td><input type="text" name="age"></td></tr>
                    <tr><td>Designation</td>
                    <td><input type="radio" name="designation"value="Junior Programmer">Junior Programmer
                    <input type="radio" name="designation"value="Senior Programmer">Senior Programmer
                    <input type="radio" name="designation"value="Project Lead">Project Leader</td></tr>
                    <tr><td>Preferred Language</td>
                    <td><input type="checkbox" name="PL1" value="java">Java
                    <input type="checkbox" name="PL2" value="php">PHP
                    <input type="checkbox" name="PL3" value="c++">C++</td></tr>
                    <tr><td>E-mail:</td>
                    <td><input type="text"name="email"></td></tr>
                    <tr><td>Password: </td>
                    <td> <input type="password" name="password" ></td></tr>
                    <tr> <td> Please choose a file: </td>
                    <td><input type="file" name="myfile" > </td></tr>
                    </table>
                    <tr> <td> <br>
                    <input type="submit"name="submit" class="button"value="Submit">
                    <input type="submit"name="reset"class="button"value="Reset"></td> </tr>
            </table>
        </form> 
    </body>
</html>