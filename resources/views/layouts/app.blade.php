<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Ajoutez vos feuilles de style CSS, scripts JavaScript, etc. ici -->
    <style>
        /* Ajoutez vos styles CSS ici */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            overflow: hidden;
            background-color: #333;
        }
        nav ul li {
            float: left;
        }
        nav ul li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        nav ul li a:hover {
            background-color: #111;
        }
    </style>
</head>
<body>
    <header>
        <!-- Ajoutez votre barre de navigation ici -->
        <nav>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Livres</a></li>
                <li><a href="#">Auteurs</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <!-- Contenu spécifique à chaque page sera ajouté ici -->
        @yield('content')
    </main>

    <footer>
        <!-- Ajoutez votre pied de page ici -->
        <p>&copy; {{ date('Y') }} Ma Bibliothèque. Tous droits réservés.</p>
    </footer>
    <!-- Ajoutez vos scripts JavaScript en bas de la page si nécessaire -->
</body>
</html>
