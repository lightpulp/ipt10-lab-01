<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    $email = $_POST['email'];
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Wrong Email Format!');</script>";
        header("Location: register.php"); exit();
    }
}
?>

<div class="container mt-4">
    <h3>Registration Form</h3>

    <form action="summary.php" method="post">

        <div class="mb-2">
            <label>Name *</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-2">
            <label>Date of Birth</label>
            <input type="date" name="dob" class="form-control">
        </div>

        <div class="mb-2">
            <label>Sex</label><br>

            <input type="radio" name="sex" value="Male"> Male

            <input type="radio" name="sex" value="Female"> Female
        </div>

        <div class="mb-2">
            <label>Email *</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-2">
            <label>Address</label>
            <textarea name="address" class="form-control"></textarea>
        </div>

        <div class="mb-2">
            <label>College Department</label>

            <select name="department" class="form-select">
                <option value="CAS">CAS</option>
                <option value="CCS">CCS</option>
                <option value="COE">COE</option>
                <option value="CBA">CBA</option>
            </select>
        </div>

        <div class="mb-2">
            <label>Program</label>
            <input type="text" name="program" class="form-control">
        </div>

        <div class="mb-2">
            <label>Mobile Number</label>
            <input type="text" name="mobile" id="mobile" class="form-control" placeholder="+63 000 000 000">
        </div>


        <input type="reset" class="btn btn-secondary">
        <input type="submit" class="btn btn-primary">

    </form>
</div>

<script> 

document.getElementById("mobile").addEventListener("input", function () {
    let n = this.value.replace(/\D/g, "").replace(/^63/, "").substring(0, 10);
    if (n.length === 0) this.value = "+63";
    else this.value = "+63 " + n.replace(/(\d{3})(\d{3})(\d{4})/, "$1 $2 $3").trim();
});

</script>

</body>
</html>