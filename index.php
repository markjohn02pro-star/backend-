<?php

include "./config.php";

if (isset($_POST['submit'])) {

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];


    $sql = "insert into `backend`.`feedback`
(fullname, email, phone, message)
value ('$fullname','$email', '$phone','$message')";

    $check = "select * from feedback where email = '$email'";

    $result = mysqli_query($connection, $check);

    if (mysqli_num_rows($result) > 0) {
        echo "
    <script>
    alert('email already exist');
    window.location.heref = 'index.php';
    </script> ";
        exit();
    } else {
        $sql = "insert into `backend`.`feedback`
(fullname, email, phone, message)
value ('$fullname','$email', '$phone','$message')";
        if (mysqli_query($connection, $sql)) {
            echo "
    <script>
    alert('feedback form has been submitted');
    window.location.heref = 'index.php';
    </script> ";
            exit();
        } else {
            $error = json_encode(mysqli_errno($connection));
            echo "
    <script>
    alert('Error:' + $error);
    window.location.heref = 'index.php';

    </script>
    ";
            exit();
        }
    }
}









?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Feedback Form</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <div class="glow glow-purple"></div>
    <div class="glow glow-cyan"></div>

    <main class="feedback-container">
        <section class="feedback-card">

            <div class="d-flex align-items-center gap-3">
                <div class="brand-icon">
                    <i class="fa-regular fa-comments"></i>
                </div>

                <div>
                    <div class="eyebrow">YOUR VOICE MATTERS</div>
                    <div class="brand-subtitle">Feedback &amp; Suggestions</div>
                </div>
            </div>

            <h1 class="form-title">
                We'd Love to <span class="gradient-text">Hear From You</span>
            </h1>

            <!-- Exactly 10 words -->
            <p class="form-description">
                Your thoughts inspire us to create better experiences every day.
            </p>

            <form id="feedbackForm" method="POST">

                <div class="mb-4">
                    <label for="fullname" class="form-label">
                        Full Name <span class="required">*</span>
                    </label>

                    <div class="input-wrap">
                        <i class="fa-regular fa-user input-icon"></i>
                        <input type="text" class="form-control"
                            id="fullname" name="fullname"
                            placeholder="Enter your full name"
                            autocomplete="name" maxlength="100" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="email" class="form-label">
                        Email Address <span class="required">*</span>
                    </label>

                    <div class="input-wrap">
                        <i class="fa-regular fa-envelope input-icon"></i>
                        <input type="email" class="form-control"
                            id="email" name="email"
                            placeholder="you@example.com"
                            autocomplete="email" maxlength="254" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="phone" class="form-label">
                        Phone Number
                    </label>

                    <div class="input-wrap">
                        <i class="fa-solid fa-phone input-icon"></i>
                        <input type="tel" class="form-control"
                            id="phone" name="phone"
                            placeholder="+1 (555) 000-0000"
                            autocomplete="tel">
                    </div>
                </div>

                <div class="mb-4">
                    <label for="message" class="form-label">
                        Your Message <span class="required">*</span>
                    </label>

                    <div class="input-wrap textarea-wrap">
                        <i class="fa-regular fa-message input-icon"></i>
                        <textarea class="form-control"
                            id="message" name="message"
                            rows="4" maxlength="5000"
                            placeholder="Share your thoughts, ideas, or suggestions..."
                            required></textarea>
                    </div>
                </div>

                <button type="submit" name="submit" class="btn submit-btn">
                    <span>Send Your Feedback</span>
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </button>

                <div id="successMessage"
                    class="success-message"
                    role="status"
                    aria-live="polite">
                    <i class="fa-solid fa-circle-check me-2"></i>
                    Thank you! Your feedback has been submitted.
                </div>

            </form>

            <p class="privacy-note">
                <i class="fa-solid fa-shield-halved"></i>
                Your feedback matters. Your details stay private.
            </p>

        </section>
    </main>
    <!-- 
    <script>
        const form = document.getElementById('feedbackForm');
        const successMessage = document.getElementById('successMessage');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            if (!form.checkValidity()) {
                form.reportValidity();
                return;
            }

            successMessage.classList.add('show');

            successMessage.scrollIntoView({
                behavior: 'smooth',
                block: 'nearest'
            });

            form.reset();
        });
    </script> -->

</body>

</html>