# WordPress starter
> This is still a work in progress

This stater is meant to avoid versioning dependencies like Wordpress Core and plugins

## Quickstart
- `$ cp .env.example .env` and configure it
- `$ docker-compose up -d` 
- `$ docker-compose exec app composer install` 
- Visit: `http://localhost:8080` 

___
**Release new version on Docker Hub :**  
`$ docker build -t atillay/wordpress ./docker`  
`$ docker push atillay/wordpress` 