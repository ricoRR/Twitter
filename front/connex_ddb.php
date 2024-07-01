<?php
if (!empty($_POST['tweetContent']) && !empty($_POST['tweetUser'])) {
    $tweetContent = rawurldecode($_POST['tweetContent']);
    $tweetUser = rawurldecode($_POST['tweetUser']);

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=twitter;charset=utf8', 'rico', 'champs');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $bdd->prepare("INSERT INTO tweet (id_user, content) VALUES (:user, :content)");
        $stmt->bindValue(':user', $tweetUser);
        $stmt->bindValue(':content', $tweetContent);

        if ($stmt->execute()) {
            echo "Tweet enregistré avec succès!";
        } else {
            echo "Échec de l'enregistrement du tweet.";
        }
    } catch (PDOException $e) {
        echo "Erreur de base de données : " . $e->getMessage();
    }
} else {
    return "Le champ tweetContent est vide.";
}
?>
