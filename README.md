# Adopte un Dev

Une plateforme innovante de mise en relation entre développeurs et entreprises. Le projet permet aux développeurs de créer leur profil en mettant en avant leurs compétences techniques, leur expérience et leurs attentes salariales. Les entreprises peuvent publier des offres d'emploi détaillées et rechercher des profils correspondant à leurs besoins. L'application facilite la recherche d'emploi dans le secteur du développement informatique en mettant l'accent sur la correspondance des compétences techniques et des attentes professionnelles.

## Installation

1. Cloner le projet
```bash
git clone [url-du-projet]
cd mon_projet
```

2. Installer les dépendances
```bash
composer install
```

3. Configurer la base de données
- Créer un fichier `.env.local` à partir du `.env`
- Configurer les paramètres de connexion à la base de données

4. Créer et migrer la base de données
```bash
# Supprimer la base de données si elle existe
php bin/console doctrine:database:drop --force

# Créer la base de données
php bin/console doctrine:database:create

# Mettre à jour le schéma de la base de données
php bin/console doctrine:schema:update --force
```


5. Charger les données de test (fixtures)
```bash
php bin/console doctrine:fixtures:load --no-interaction
```

## Accès à l'application
En tant que dev : email : sarah.dupont@dev.com | mdp : password123
En tant qu'entreprise : email : contact@innovtech.fr | mdp : password123

## Etudiants ayant réalisé ce projet : 
- Rahou Rabah
- Lavallee Mathieu
- Hammouche Gabriel
- Declaude Marcus