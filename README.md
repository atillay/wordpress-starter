# WordPress starter

## Quickstart
- `$ cp .env.example .env` and configure it
- `$ docker-compose up -d` 
- `$ docker-compose exec app composer install` 
- Visit: `http://localhost:8080` 

___
**Release new version on Docker Hub :**  
`$ docker build -t atillay/wordpress ./docker`  
`$ docker push atillay/wordpress` 