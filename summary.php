<?php

if (empty($_POST['name']) || empty($_POST['email'])) {
    header("Location: register.php");
    exit();
}

$name = $_POST['name'];
$dob = $_POST['dob'];
$sex = $_POST['sex'];
$email = $_POST['email'];
$address = $_POST['address'];
$department = $_POST['department'];
$program = $_POST['program'];
$mobile = $_POST['mobile'];

$color = "";

if ($sex == "Male") {
    $color = "background-color:blue; color:white;";
}
elseif ($sex == "Female") {
    $color = "background-color:red; color:white;";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Summary</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <h3>Registration Summary</h3>

    <table class="table table-bordered">

        <tr>
            <th>Name</th>
            <td style="<?php echo $color; ?>">
                <?php echo $name; ?>
            </td>
        </tr>

        <tr>
            <th>Date of Birth</th>
            <td><?php echo $dob; ?></td>
        </tr>

        <tr>
            <th>Sex</th>
            <td><?php echo $sex; ?></td>
        </tr>

        <tr>
            <th>Email</th>
            <td><?php echo $email; ?></td>
        </tr>

        <tr>
            <th>Address</th>
            <td><?php echo $address; ?></td>
        </tr>

        <tr>
            <th>College Department</th>
            <td><?php echo $department; ?></td>
        </tr>

        <tr>
            <th>Program</th>
            <td><?php echo $program; ?></td>
        </tr>

        <tr>
            <th>Mobile Number</th>
            <td><?php echo $mobile; ?></td>
        </tr>

    </table>

</div>

</body>
</html>
