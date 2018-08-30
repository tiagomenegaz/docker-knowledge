# List of commands

### 1 - Add your python code at ./src/main.py

### 2 - Build your phython image

```
docker build -t python-hw .
```

* -t flag used to give a name to your container

### 3 - Run the python image in a container
```
docker run -it --rm python-hw
```

* -it flag is used to alocate a new process to output the via shell
* --rm remove the created container

### 4 - Changing you code at ./src/main.py

Your changes at main.py don't reflect on your container because it was builded using an old version for your program.
To see your changes you have to rebuild your image again. However, it depends on the code you're running on your container.
