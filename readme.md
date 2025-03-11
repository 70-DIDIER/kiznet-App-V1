# Lancer les containers
docker-compose up -d --build

# Installer les dépendances (dans le container app)
docker exec -it symfony_app composer install

# Vérifier les logs si problème
docker-compose logs -f

# Arrêter les containers
docker-compose down