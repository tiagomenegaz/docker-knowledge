# List of commands

### 1 - Add your ruby code at ./src/main.rb

### 2 - Build your phython image

```
docker build -t ruby-hw .
```

* -t flag used to give a name to your container

### 3 - Run the ruby image in a container
```
docker run -it --rm ruby-hw
```

* -it flag is used to alocate a new process to output the via shell
* --rm remove the created container

### 4 - Changing you code at ./src/main.rb

Your changes at main.rb don't reflect on your container because it was builded using an old version for your program.
To see your changes you have to rebuild your image again. However, it depends on the code you're running on your container.
