var wsClient = new WebSocket('ws://localhost:9090');

function send(message){
    message.room_key = key;
    wsClient.send(JSON.stringify(message));
}

