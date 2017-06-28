# Functional web framework (FWF)
Modern front-end centric framework using functionallly programmed frontend with database server support

## Key planned features:
### Server-side
 - PHP and Doctrine ORM based entity management for use with any database (preferably MariaDB)
 - Ridden by message loop, provides communication with the local client using web sockets
 - The messages support creation, modification, cloning and deleting of entities and also user authentication
 - Entities may contain no logic at all and serve just as a pattern for controlling the database
 - Secure, as all important actions have to be done through socket connection with a specific user token provided
### Client-side
 - Elm language driven functional MVC framework (compiles into javascript)
 - As mentioned earlier, connects with the server and database using web sockets
 
## Installation
To be done (composer)
 
## Troubleshooting
Please post an issue here on github
