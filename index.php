<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/utilities.css">
    <link rel="stylesheet" href="style1.css">
    <title>EMS | Contact Page</title>
    
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="container flex">
            <h1 class="logo">Employee Management</h1>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="features.html">Features</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="contact.html">Login</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Head -->
    <section class="docs-head bg-primary py-3">
        <div class="container grid">
            <div>
                <h1 class="md">Employee Management System(EMS)
                    </h1>
                <p class="lead">
                   
                    Call: 9119422727<br>
                    Email: employeeManagementEMS@gmail.com
                </p>
                  <div class="social">
                    <a href="https://github.com/omkaroc27" target="_blank"><i class="fab fa-github fa-2x"></i></a>
                    <a href="https://www.facebook.com/omkar.charate2727/"target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="https://www.instagram.com/___oc__27__/" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                    <a href="https://twitter.com/OMKAROC27" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
                </div>
            </div>
            <img src="images\emp-removebg-preview.png" alt="" >
        </div>
    </section>

    <!-- Docs main -->
    <section class="docs-main my-4">
        <div class="container grid">
            <div class="card bg-light p-3">
                <h3 class="my-22">Employee feedback</h3>
               <p>
                The value of positive employee feedback is obvious. It reinforces the right behaviors, and it is directly linked to increased employee engagement and productivity. 
               </p>

            </div>
            <div class="box">
                <h2  class="my-22"  align="center">Feedback Form</h2>
               	<form action="register.php" method="post">
			<p>Name*</p>
			<input type="text"  name="name"
				required>
			<p>Email*</p>
			<input type="text" name="email"
				required>
			<p>Phone No*</p>
			<input type="number" name="phn"
				>
                <p>Company Name</p>
			<input type="text"  name="cmp"
				required> 
                <p>Position</p>
			<input type="text"  name="pos"
				required>
                <p>Feedback</p>
			<input type="text"  name="fdbk"
				required>
					<input type="submit" value="Send"> 
            <a href="index.php">Already
				Submited Feedback?</a>
		</form>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="footer bg-dark py-5">
        <div class="container grid grid-3">
            <div>
                <h1>Employee Management System(EMS)
                </h1>
                <p>Copyright &copy; 2021</p>
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="features.html">Features</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
            <div class="social">
                <a href="https://github.com/omkaroc27" target="_blank"><i class="fab fa-github fa-2x"></i></a>
                <a href="https://www.facebook.com/omkar.charate2727/"target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="https://www.instagram.com/___oc__27__/" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="https://twitter.com/OMKAROC27" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>