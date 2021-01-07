# PHP objektinis programavimas

* PHP web puslapis
    * http://localhost:8080
* PHP My Admin
    * http://localhost:8090
* Mysql Duomenų bazė
    * user: root
    * password: nera
    * port: 4406

## Reikalavimai

* docker
* docker-compose

## Paleidimas
 
```
docker-compose up -d
```

## Sustabdymas

```
docker-compose stop
```

# Konteinerių ištrynimas

```
docker-compose down
```

# PHP ir MySQL db

```
docker exec -it <phpcontainerid> bash  
```

inside container:

```
docker-php-ext-install mysqli

apachectl restart
```

Prisijungti prie db:
```
host = phpmyadmin_db
```