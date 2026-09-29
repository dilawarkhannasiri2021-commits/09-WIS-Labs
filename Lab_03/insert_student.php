<?php
$message = "";
$messageType = "";

$fullName = "";
$email = "";
$department = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullName = trim($_POST["full_name"]);
    $email = trim($_POST["email"]);
    $department = trim($_POST["department"]);

    // Create MySQL connection
    $conn = new mysqli("localhost", "root", "", "DilawarDB");

    // Check connection
    if ($conn->connect_error) {

        $message = "Connection failed: " . $conn->connect_error;
        $messageType = "danger";

    } 
    // Validate fields
    elseif ($fullName == "" || $email == "" || $department == "") {

        $message = "All fields are required.";
        $messageType = "warning";

    }
    // Validate email
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $message = "Please enter a valid email address.";
        $messageType = "danger";

    } 
    else {

        // Prepared INSERT statement
        $sql = "INSERT INTO students (full_name, email, department)
                VALUES (?, ?, ?)";

        $stmt = $conn->prepare($sql);

        if ($stmt) {

            $stmt->bind_param("sss", $fullName, $email, $department);

            if ($stmt->execute()) {

                $message = "Student added successfully.";
                $messageType = "success";

                // Clear form after successful insertion
                $fullName = "";
                $email = "";
                $department = "";

            } else {

                $message = "Error inserting student: " . $stmt->error;
                $messageType = "danger";
            }

            $stmt->close();

        } else {

            $message = "Error preparing statement: " . $conn->error;
            $messageType = "danger";
        }
    }

    // Close connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Student</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-7">

            <div class="card shadow">

                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Student Information</h3>
                </div>

                <div class="card-body">

                    <?php if ($message != ""): ?>

                        <div class="alert alert-<?php echo $messageType; ?>">
                            <?php echo htmlspecialchars($message); ?>
                        </div>

                    <?php endif; ?>


                    <form method="POST">

                        <!-- Full Name -->
                        <div class="mb-3">

                            <label class="form-label">
                                Full Name
                            </label>

                            <input
                                type="text"
                                name="full_name"
                                class="form-control"
                                value="<?php echo htmlspecialchars($fullName); ?>"
                                required
                            >

                        </div>


                        <!-- Email -->
                        <div class="mb-3">

                            <label class="form-label">
                                Email
                            </label>

                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                value="<?php echo htmlspecialchars($email); ?>"
                                required
                            >

                        </div>


                        <!-- Department -->
                        <div class="mb-3">

                            <label class="form-label">
                                Department
                            </label>

                            <input
                                type="text"
                                name="department"
                                class="form-control"
                                value="<?php echo htmlspecialchars($department); ?>"
                                required
                            >

                        </div>


                        <!-- Buttons -->
                        <button
                            type="submit"
                            class="btn btn-primary"
                        >
                            Save Student
                        </button>

                        <button
                            type="reset"
                            class="btn btn-secondary"
                        >
                            Clear
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>
