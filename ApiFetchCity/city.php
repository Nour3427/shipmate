<?php 
// $data = json_decode(file_get_contents('php://input'), true);
// if ($data === null) {
//     // une erreur s'est produite lors du décodage JSON
//     echo 'Erreur lors de la récupération des données JSON';
// } else {
//     // Les données ont été récupérées avec succès, vous pouvez les utiliser ici
//     var_dump($data);
// }
var_dump($_GET);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $data = json_decode($_GET['data'], true);
    if ($data === null) {
        // une erreur s'est produite lors du décodage JSON
        echo 'Erreur lors de la récupération des données JSON';
    } else {
        // Les données ont été récupérées avec succès, vous pouvez les utiliser ici
        var_dump($data);
    }
} else {
    // La méthode HTTP n'est pas autorisée
    http_response_code(405);
    header('Allow: GET');
    echo 'Méthode HTTP non autorisée';
}
// $data = json_decode(file_get_contents('php://input'));
// $villes = $data['nom'];

// // Connexion à la base de données
// $host = 'localhost';
// $dbname = 'shipmate';
// $username = 'root';
// $password = '';
// $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

// try {
//     $pdo = new PDO($dsn, $username, $password);
// } catch (PDOException $e) {
//     die('Erreur de connexion à la base de données : ' . $e->getMessage());
// }

// // Insertion des données dans la table ville
// $sql = "INSERT INTO city(city_name) VALUES (:nom)";
// $stmt = $pdo->prepare($sql);
// $stmt->bindParam(':nom', $villes);


// if ($stmt->execute()) {
//     echo 'Données insérées avec succès dans la base de données';
// } else{
//     echo 'Données non insérées avec succès dans la base de données';

// }