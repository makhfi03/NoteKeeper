# 📓 NoteKeeper

NoteKeeper est une application web simple, rapide et sécurisée de gestion de notes. Conçue avec une architecture MVC, elle permet aux utilisateurs de créer un compte, de se connecter et de gérer leurs notes personnelles (Créer, Lire, Modifier, Supprimer).

## ✨ Fonctionnalités

- **Authentification sécurisée** : Inscription, connexion et déconnexion des utilisateurs.
- **Gestion des notes (CRUD)** : 
  - Création de nouvelles notes.
  - Affichage de toutes les notes de l'utilisateur.
  - Modification des notes existantes.
  - Suppression des notes.
- **Validation côté client** : Les formulaires (connexion, inscription, notes) sont validés en temps réel avec JavaScript pour une meilleure expérience utilisateur.
- **Protection des routes** : Seuls les utilisateurs connectés ont accès au tableau de bord et à leurs notes.

## 🛠️ Technologies Utilisées

- **Backend** : PHP natif (Architecture MVC : Modèle-Vue-Contrôleur)
- **Frontend** : HTML5, CSS3, JavaScript Vanilla
- **Base de données** : MySQL (Interactions via PDO)

## 📁 Structure du Projet

```text
NoteKeeper/
├── app/
│   ├── controllers/   # Logique applicative (NoteController, AuthController...)
│   ├── models/        # Intéractions avec la base de données (Note, User...)
│   └── views/         # Interfaces utilisateur (home.php, notes/, auth/...)
├── config/
│   └── database.php   # Configuration et connexion à la base de données PDO
├── public/
│   ├── css/           # Feuilles de style
│   ├── js/            # Scripts de validation frontend
│   └── index.php      # Point d'entrée principal (Routeur)
```

## 🚀 Installation et Démarrage
Prérequis
Avoir PHP installé sur votre machine.
Avoir un serveur de base de données comme MySQL (via XAMPP, WAMP, ou Laragon).
Étapes
Cloner le dépôt
git clone https://github.com/makhfi03/NoteKeeper.git
cd NoteKeeper
Configuration de la Base de Données

Créez une base de données MySQL nommée notekeeper.
Exécutez le script SQL (database.sql) pour créer les tables users et notes.
Vérifiez les identifiants de connexion dans le fichier config/database.php.
Lancer le serveur de développement PHP À la racine du projet, exécutez la commande suivante pour pointer le serveur vers le dossier public :

php -S localhost:8080 -t public
Accéder à l'application Ouvrez votre navigateur et allez sur : http://localhost:8080

##💡 Auteur
Développé par MAKHFI Ghita.
