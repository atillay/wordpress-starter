# WordPress starter
> This is still a work in progress

This stater is meant to avoid versioning dependencies like Wordpress core and plugins

## Quickstart
- `$ cp .env.example .env` and configure it
- `$ docker-compose up -d` 
- `$ docker-compose exec wp composer install` 

| Service      | Path                    |
| ------------ | ----------------------- |
| Website      | `http://localhost:8080` | 
| PhpMyAdmin   | `http://localhost:8081` |
| Mail catcher | `http://localhost:8082` |
