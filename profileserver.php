<?php 
	session_start();

	// variable declaration
    $name = "";
    $email    = "";
    $bio ="";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', 'axelle', 'ghostblade');

	// UPDATE USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
        $name = mysqli_real_escape_string($db, $_POST['name']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$bio = mysqli_real_escape_string($db, $_POST['bio']);

		// form validation: ensure that the form is correctly filled
        if (empty($name)) { array_push($errors, "Your name is required"); }
		if (empty($email)) { array_push($errors, "Your E-mail is required"); }
		if (empty($bio)) { array_push($errors, "Your bio is required"); }

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "INSERT INTO profile (name, gender, email, bio) 
					  VALUES('$name', '$gender', '$email', '$bio')";
            mysqli_query($db, $query);

			$_SESSION['name'] = $name;
			$_SESSION['success'] = "Profile successfully updated!";
			header('location: profile.php');
		}

	}

?>