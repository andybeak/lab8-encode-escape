# Lab 8 Demo

## Running this project

You can run the project by using these commands:

    cd docker
    CURRENT_UID=$(id -u):$(id -g) docker-compose up -d

The current uid determines which user PHP and Nginx runs under.