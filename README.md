Basic DDD todo application

- PHP 7.2
- Slim Framework 4
- No database (used in-memory repository)

To run project:

> composer install

> composer start

or

> php -S localhost:8080 -t public


Postman collection: _https://www.getpostman.com/collections/2ccfd301b7b24a4851b2_

GET http://localhost:8080/tasks

GET http://localhost:8080/tasks/{id}

POST http://localhost:8080/tasks

PUT http://localhost:8080/tasks/{id}

DELETE http://localhost:8080/tasks/{id}
