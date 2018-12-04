# WordPress starter

## Quickstart
- `$ cp .env.example .env` and configure it
- `$ docker-compose up -d` 
- `$ cd assets && npm install && npm start` 
- Visit: `http://localhost:8080` 

## Deploy setup
- Generate SSH key pair : `$ ssh-keygen -t rsa -C "deploy" -b 4096`
- Add generated public key to your server (~/.ssh/authorized_keys)
- Add generated private key to Gitlab > Settings > Variables > SSH_PRIVATE_KEY
- Add server public SSH key to Gitlab > Settings > Repository > Deploy keys
- In the deploy folder, run `git init && git remote add origin ...`
- Configure .gitlab-ci.yml

___
**Release new version on Docker Hub :**  
`$ docker build -t atillay/wordpress ./docker`  
`$ docker push atillay/wordpress` 