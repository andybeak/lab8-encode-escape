# Lab 8 Demo

## Running this project

You can run the project by using these commands:

    cd docker
    CURRENT_UID=$(id -u):$(id -g) docker-compose up -d

Once the stack is running install the dependencies with the following:

    docker exec -it php /bin/bash
    composer install

