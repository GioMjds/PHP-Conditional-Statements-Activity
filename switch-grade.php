<?php

    if (isset($_POST['submitted'])) {
        $score = (int) $_POST['score'];
        switch (true) {
            case $score < 0 || $score > 100:
                $result = "<span style='color: red;'>Invalid score. Score must be between 0 and 100.</span>";
                break;
            case $score >= 90:
                $result = "Your grade is: A";
                break;
            case $score >= 80:
                $result = "Your grade is: B";
                break;
            case $score >= 70:
                $result = "Your grade is: C";
                break;
            case $score >= 60:
                $result = "Your grade is: D";
                break;
            default:
                $result = "Your grade is: F";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>Switch-Case Grade System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <form method="post">
            <div class="mb-3">
                <label for="score">Enter your score from 0-100:</label>
                <input type="number" name="score" id="score" required>
            </div>
            <input type="hidden" name="submitted" value="1">
            <input type="submit" value="Calculate Grade" class="btn btn-primary">
        </form>

        <?php if (isset($result)) { ?>
        <div class="alert px-4 alert-<?php echo $score < 0 || $score > 100 ? 'danger' : 'success'; ?>">
            <?php echo $result; ?>
        </div>
        <?php } ?>
    </div>

</body>

</html>