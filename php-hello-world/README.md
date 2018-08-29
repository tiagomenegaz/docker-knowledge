# List of commands

1) Build the php docker image

```
docker build -t hello-world .
```

* -t flag is the name of the container (in this case hello-world)
* `.` is the path to the Dockerfile 

2) Run the container
```
docker run -p 80:80 hello-world
```

* -p flag is to map the port from the container to your machine
* the name of the container is necessary

