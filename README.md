# WordPress starter
> This is still a work in progress

Modern web development with Wordpress

## Features
- Composer (for WP core and plugins)
- Docker as a local dev environment (PHP7, PhpMyAdmin, MailCatcher)
- Webpack Encore for assets

## Quickstart
- `$ cp .env.example .env` and configure it
- `$ docker-compose up -d` 
- `$ docker-compose exec wp composer install` 
- `$ npm install && npm start`

| Service      | Path                    |
| ------------ | ----------------------- |
| Website      | `http://localhost:8080` | 
| PhpMyAdmin   | `http://localhost:8081` |
| MailCatcher  | `http://localhost:8082` |
