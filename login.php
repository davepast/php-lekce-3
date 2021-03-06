<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Log In</title>
</head>
<body>
<br>
<div class="container-fluid" >
    <div class="row justify-content-lg-center">


        <div class="col-md-4">
            <form method="post">

                <div class="form-group">
                    <p>Login:</p>
                    <input type="text" name="login" placeholder="Zadejte login" class="form-control">
                </div>

                <div class="form-group">
                <p>Heslo:</p>
                <input type="password" name="password" placeholder="Zadejte heslo" class="form-control">
                </div>

                <input type="submit" value="Přihlásit" class="btn btn-primary" >
            </form>
            <?php
            session_start();
    echo "<br>";
            if (isset($_POST['login'])) {
                if ($_POST['login'] == "admin" && $_POST['password'] == "top-secret") {
                    $_SESSION['login'] = $_POST['login'];
                    $_SESSION['data'] = [
                        'Datum registrace' => '2.4.2018',
                        'Souhlas s podmínkami' => 'ANO',
                        'Počet objednávek' => 23
                    ];
                    echo '<a href="admin.php">Pokračovat do administrace</a>';
                } else {
                    echo "Chybné jméno nebo heslo";
                }
            }
            ?>
        </div>


    </div>

</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>