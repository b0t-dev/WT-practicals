const http = require('http');
const server = http.createServer((req, res)=>{
    res.writeHead(200, {'Content-Type': 'text/html'});
    res.write('<h1>Hello World</h1>');
    res.write('<p>This is my first Node.js server.</p>');
    res.end();   })

server.listen(4000, ()=>{
    console.log('Server running at http://localhost:4000/');});