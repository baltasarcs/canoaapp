## Project setup

### Copy .env file AND set env's database
```
cp /backend/.env_example /backend/.env
```

### Copy .env to ./
```
cp /backend/.env .
```

### Run docker-compose
```
docker-compose up
```

### Run composer install
```
docker-compose exec php composer install
```

### Run create database
```
docker-compose exec mysql mysql -u root -p -e "CREATE DATABASE canoatest"
```

### Run migrations an seeders
```
docker-compose exec php php artisan migrate --seed
```

### Open localhost
```
http://127.0.0.1
```
