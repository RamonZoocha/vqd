var WebSocketServer = require('ws').Server;

var server = new WebSocketServer({port: 9090});

var connections = {};

server.on('connection', function(connection) {

    connection.on("message", function(message){handleMessage(message, connection);});

});

function handleMessage(message, connection) {

    try {message = JSON.parse(message);}
    catch (e) {console.log("Invalid msg received");}

    switch (message) {

        case "check_for_room":

            if()

            break;

    }

    console.log(JSON.stringify(rooms));

}