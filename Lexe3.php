<?php

// Création du tableau de notes
$tabNotes = array(
    'prenot' => array(2, 10, 14),
    'perthuis' => array(10, 18, 12),
    'dupont' => array(16, 18, 20),
    'durand' => array(12, 14, 16),
    'martin' => array(8, 12, 10)
);

// Fonction pour afficher le nom et les notes de chaque élève
function afficherNotes($tabNotes)
{
    foreach ($tabNotes as $nom => $notes) {
        echo "Notes de $nom : ";
        foreach ($notes as $note) {
            echo "$note ";
        }
        echo "<br>";
    }
}

// Fonction pour afficher le nom et la moyenne de chaque élève
function afficherMoyennes($tabNotes)
{
    foreach ($tabNotes as $nom => $notes) {
        $moyenne = array_sum($notes) / count($notes);
        echo "Moyenne de $nom : $moyenne<br>";
    }
}

// Fonction pour afficher les notes et la moyenne d'un élève dont le nom est saisi au clavier
function afficherNotesEtMoyenne($tabNotes)
{
    $nom = readline("Entrez le nom de l'élève : ");
    if (array_key_exists($nom, $tabNotes)) {
        $notes = $tabNotes[$nom];
        $moyenne = array_sum($notes) / count($notes);
        echo "Notes de $nom : ";
        foreach ($notes as $note) {
            echo "$note ";
        }
        echo "<br>";
        echo "Moyenne de $nom : $moyenne<br>";
    } else {
        echo "L'élève $nom n'existe pas dans le tableau de notes<br>";
    }
}

// Menu pour afficher les questions 1, 2, 3
echo "1. Afficher le nom et les notes de chaque élève<br>";
echo "2. Afficher le nom et la moyenne de chaque élève<br>";
echo "3. Afficher les notes et la moyenne d'un élève dont le nom sera saisi au clavier<br>";
$choix = readline("Entrez votre choix : ");

switch ($choix) {
    case '1':
        afficherNotes($tabNotes);
        break;
    case '2':
        afficherMoyennes($tabNotes);
        break;
    case '3':
        afficherNotesEtMoyenne($tabNotes);
        break;
    default:
        echo "Choix invalide<br>";
        break;
}
 ?>