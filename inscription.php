<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="compte.css">
    <title>Inscription</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">

        <?php
        include("php/config.php"); // Connexion à la base de données

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
            // Sécurisation des entrées utilisateur
            $full_name = mysqli_real_escape_string($con, $_POST['full_name'] ?? '');
            $email = mysqli_real_escape_string($con, $_POST['email'] ?? '');
            $password = mysqli_real_escape_string($con, $_POST['password'] ?? '');

            // Vérification si tous les champs sont remplis
            if (empty($full_name) || empty($email) || empty($password)) {
                echo "<div class='message'><p>Veuillez remplir tous les champs.</p></div><br>";
            } else {
                // Vérifier si l'email existe déjà
                $verify_query = mysqli_query($con, "SELECT email FROM users WHERE email='$email'");

                if (mysqli_num_rows($verify_query) != 0) {
                    echo "<div class='message'>
                            <p>Cette adresse e-mail est déjà utilisée. Veuillez en choisir une autre.</p>
                          </div><br>";
                } else {
                    // Hachage du mot de passe
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                    // Exécution de la requête SQL
                    $insert_query = "INSERT INTO users(full_name, email, password) VALUES('$full_name', '$email', '$hashed_password')";
                    
                    if (mysqli_query($con, $insert_query)) {
                        echo "<div class='message'>
                                <p>Inscription réussie !</p>
                              </div><br>";
                        echo "<a href='compte.php'><button class='btn'>Se connecter</button></a>";
                    } else {
                        echo "<div class='message'>
                                <p>Une erreur s'est produite : " . mysqli_error($con) . "</p>
                              </div><br>";
                    }
                }
            }
        } 
        ?>

            <header>Create Account</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="full_name">Name and Surname</label>
                    <input type="text" name="full_name" placeholder="Enter your name and surname" required>
                </div>

                <div class="field input">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" placeholder="Entrez votre adresse e-mail" required>
                </div>
            
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="" name="password" placeholder="Enter your email address" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="S'inscrire">
                </div>

                <div class="links">
                    Déjà membre ? <a href="compte.php">Se connecter</a>
                </div>
            </form>

        </div>
    </div>
</body>
</html>
