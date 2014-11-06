var express =require('express');
var express = require('express'),
    app = express()
  , http = require('http')
  , server = http.createServer(app)
  , io = require('socket.io').listen(server);

// listen for new web clients:
server.listen(8080);

     //------------------- Default Shit--------------------------------------//
app.configure(function(){
    app.use(express.methodOverride());
    //app.use(express.bodyParser());
    app.use(app.router);
	app.use(express.json());
    app.use(express.urlencoded());
});

app.configure('development', function(){
    app.use(express.static(__dirname + '/public'));
    app.use(express.errorHandler({ dumpExceptions: true, showStack: true }));
});

app.configure('production', function(){
  var oneYear = 31557600000;
  app.use(express.static(__dirname + '/public', { maxAge: oneYear }));
  app.use(express.errorHandler());
});

//------------------- Default Shit ends--------------------------------------//



//Socket functions starts//
io.sockets.on('connection', function (socket) {
	console.log('starts');
	socket.on('cheese', function(data){
		console.log('clicked');
		socket.emit('cheese', "server received: "+data);
	})
});