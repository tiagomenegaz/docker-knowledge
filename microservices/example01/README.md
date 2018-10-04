# Example 01

This is project shows how to comunicate between two services using docker-compose. The first service is called `product-service` which is responsible for showing a simple list of products.
The second is called `website` which is where the users browse through the products.

### Checklist

1. create a service to show json data
2. add a dockerfile to the service created on the previous step
3. configure the docker-compose.yml to get the first service up and running
4. create another service to show the data from the first service
5. configure the docker-compose.yml to show the second service
