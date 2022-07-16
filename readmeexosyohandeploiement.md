# BileMo - Work In Progress

Creation of an REST API with Symfony. As part of an OpenClassrooms training




# Installation of the development environment

We provide a complete Docker development environment with the following:
- Apache / Php container
- Mysql container
- Varnish Container (Cache)
- Blackfire container (profiling)

## Generate the SSH keys

Set JWT_PASSPHRASE in .env and use it in the following commands :

```bash
openssl genpkey -out config/jwt/private.pem -aes256 -algorithm rsa -pkeyopt rsa_keygen_bits:4096
openssl pkey -in config/jwt/private.pem -out config/jwt/public.pem -pubout
chmod 755 -R config/jwt/
```

## Start the development environment (with Fixtures)

```bash
cd docker/dev
sh run_dev_bilemo.sh
```

## Run Unit tests

```bash
docker exec www_bilemo_dev php bin/phpunit --testdox
```

##
### **4. Run functional tests (With Postman)**

-   Install [Postman](https://www.postman.com/downloads/)
-   Open Postman
-   Click on File>Import
-   Choose file ./documentation/postman/API BileMo.postman_collection.json
-   Click on "Runner"
-   Choose "API BileMo"
-   Set the number of iterations
-   Click on "Run API BileMo" and enjoy the show !

* * *

## **2. Installation of the Production environment**

We provide a complete Docker Production environment with the following:

-   Apache / Php container
-   Mysql container
-   Varnish Container (Cache)

### **1. Generate the SSH keys**

Set JWT_PASSPHRASE in .env and use it in the following commands :

```bash
openssl genpkey -out config/jwt/private.pem -aes256 -algorithm rsa -pkeyopt rsa_keygen_bits:4096
openssl pkey -in config/jwt/private.pem -out config/jwt/public.pem -pubout
chmod 755 -R config/jwt/
```

### **2. Start the production environment (with Fixtures)**

```bash
cd docker/prod
sh install_prod_bilemo.sh
```

### **3. Run Unit tests**

```bash
docker exec www_bilemo_prod php bin/phpunit --testdox
```

### 
**4. Run functional tests (With Postman)**

-   Install [Postman](https://www.postman.com/downloads/)
-   Open Postman
-   Click on File>Import
-   Choose file ./documentation/postman/API BileMo.postman_collection.json
-   Change with your production URL
-   Click on "Runner"
-   Choose "API BileMo"
-   Set the number of iterations
-   Click on "Run API BileMo" and enjoy the show !

## License
* * *

