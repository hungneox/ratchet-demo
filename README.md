# Ratchet demo


# Testing WebSocket applications

To test WebSocket applications, I can recommend the wscat tool. It is a command-line tool written in JavaScript (and thus requires Node.js to be running on your machine) and can be installed using npm, as follows:

```
$ npm install -g wscat
```

With the WebSocket server listening at port 8080, you can use wscat to open a new WebSocket connection using the following CLI command:

```
php server.php
```

Then

```
$ wscat -o localhost --connect localhost:8080/reverse
```