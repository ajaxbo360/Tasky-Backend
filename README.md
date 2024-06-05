# dockflow-docky

Logistics Enablement Platform

[![pipeline status](https://gitlab.com/dockflow/dockflow-docky/badges/master/pipeline.svg)](https://gitlab.com/dockflow/dockflow-docky/-/commits/master)
[![coverage report](https://gitlab.com/dockflow/dockflow-docky/badges/master/coverage.svg)](https://gitlab.com/dockflow/dockflow-docky/-/commits/master)

## Documentation

Please refer to the documentation in the [API docs](https://apidocs.dockflow.com/).

## Mission

We envision a world where supply chains are interconnected networks. Open, automated systems with better, faster, cheaper, and greener logistics.

## Project Information

Welcome to Docky!

Docky is a hassle-free solution designed for sharing maritime shipping information. It serves as a server-side back-end, providing essential functionality for managing and exchanging data related to maritime logistics.

## How to Use This Repository:

This repository contains the server-side codebase for Docky. You can easily set up and develop Docky within a Gitpod environment:

1. Click the Gitpod button to open the project in a pre-configured Gitpod workspace.
2. Once the workspace is loaded, follow the instructions provided in the `README.md` file to configure and run Docky within Gitpod.

### Install in Gitpod:

To set up Docky in a Gitpod workspace:

1. Click the Gitpod button above to open the project in a pre-configured Gitpod workspace.
2. Alternatively, you can visit the [Gitpod website](https://gitpod.io/) and set up the workspace manually.
3. Follow the instructions on the Gitpod website to create a new workspace and connect it to your Git repository.
4. Once the workspace is ready, navigate to your repository and follow the instructions provided in the `README.md` file to configure and run Docky.

### Setup Docky Locally:

To set up Docky locally:

1. Navigate to your local copy of the project directory.
2. Run the following command to set up and run all scripts and spin up all containers and services locally:

    ```sh
    sh run_local.sh
    ```

3. Once the setup is complete, Docky will be accessible at the specified local endpoint. You can check if Docky is working by entering the following link in your web browser:

`http://localhost:1081/`

If the link takes you to the Dockflow API documentation website, then you're all set to go! Congratulations!

### Entering a Docker Container

You may need to enter the Docker container running Docky to perform specific tasks or troubleshoot issues directly within the container environment. This can be useful for tasks such as inspecting logs, checking configurations, or running manual commands.

To enter our Docky container and run commands inside Docky containers, you can use the following command:

```bash
docker exec -it <container_name_or_id> bash
```

For example, to run into our Docky backend container, you can use:

```bash
docker exec -it docky-logic bash
```

Once inside the container, you can navigate to the /www directory to run your commands:

```bash
cd /www/
```

Now, you're all set to execute any command you need, such as running tests:

```bash
php composer.phar test
```

Thank you for choosing Docky! Happy coding!
