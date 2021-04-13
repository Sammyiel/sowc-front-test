// import express from "express";
// import bodyParser from "body-parser";
// import dotenv from "dotenv";
// import router from "./routes/index.js"

// const app = express();

// dotenv.config()

// const port = process.env.PORT || 5050;


// app.use(function(req, res, next) {
//     res.header('Access-Control-Allow-Origin', "*");
//     res.header('Access-Control-Allow-Methods', 'GET, PUT, POST, DELETE, UPDATE');
//     res.header('Access-Control-Allow-Headers', 'Content-Type');
//     next();
// })

// app.use(express.json());
// app.use(bodyParser.json());
// app.use(router);

// app.listen(port, () => {
//     console.log(`Our app is available on port ${port}`)
// })

// const http = require('http');

// const hostname = 'localhost';

// const port = 3000;

// const server = http.createServer(function(req, res) {
//     console.log(req.headers);

//     res.statusCode = 200;
//     res.setHeader('Content-Type', 'text/html');
//     res.end('<html><body><h1>Hello, World of Programmers and Web Developers</h1></body></html>');
// })

// server.listen(port, hostname, () => {
//     console.log(`Server running at http://${hostname}:${port}`)
// });


// var http = require('http');
// http.createServer(function (req, res) {
//   res.writeHead(200, {'Content-Type': 'text/html'});
//   res.write(req.url);
//   res.end();
// }).listen(8080);
// var http = require('http');
// http.createServer(function (req, res) {
//   res.writeHead(200, {'Content-Type': 'text/plain'});
//   res.write('Hello World!');
//   res.end();
// }).listen(8080);