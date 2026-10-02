<?php
include "Q2.1.php";

if ($_SERVER['REQUEST_METHOD']==="POST") {
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $job_title=$_POST['job_title'];
    $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
    $cpassword=$_POST['cpassword'];

    $sql=$conn->prepare("insert into remp (name,email,job_title,password,cpassword) values(?,?,?,?,?) ");
    $sql->bind_param('sssss',$fname,$email,$job_title,$password,$cpassword);
    if ($sql->execute()) {
        echo "inserted...";
    } else {
        echo "error:".$sql->error;
    }
    if ($password!=$cpassword) {
        echo"<script>alart('password not match')</script>";
    }
}
?>

<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <h3 class="text-center my-4">Registration page</h3>
            <form action="" method="post">
                <div
                    class="container border shadow p-3 rounded col-4"
                >
                    <div class="form-floating mb-3">
                        <input
                            type="text"
                            class="form-control"
                            name="fname"
                            id="formId1"
                            placeholder=""
                            <script value="<?php echo isset($_POST['fname']) ? $_POST['fname'] : ''; ?>">
                        />
                        <label for="formId1">Full Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input
                            type="text"
                            class="form-control"
                            name="email"
                            id="formId1"
                            placeholder=""
                        />
                        <label for="formId1">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input
                            type="text"
                            class="form-control"
                            name="job_title"
                            id="formId1"
                            placeholder=""
                        />
                        <label for="formId1">job_title</label>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input
                            type="text"
                            class="form-control"
                            name="password"
                            id="formId1"
                            placeholder=""
                        />
                        <label for="formId1">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input
                            type="text"
                            class="form-control"
                            name="cpassword"
                            id="formId1"
                            placeholder=""
                        />
                        <label for="formId1">confirm password</label>
                    </div>
                    <button
                        type="button"
                        class="btn btn-primary"
                    >
                        submit
                    </button>
                    
                </div>
                
            </form>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
