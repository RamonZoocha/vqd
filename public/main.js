var myConnection;
var mediaConstraints = {audio: false, video: {width: { min: 1024, ideal: 1280, max: 1920 },height: { min: 576, ideal: 720, max: 1080 },}};
var rtcConfiguration = {"iceServers": [{ "url": "stun:stun.1.google.com:19302" }]};


navigator.mediaDevices.getUserMedia(mediaConstraints)
    .then(
        function(stream)
        {
            setupRTCConnection(stream);
            checkForRoom();
        }
    )
    .catch(function(err){alert("ERROR WHEN ACCESSING YOUR CAMERA. PRESS F5 TO REFRESH AND ALLOW US TO USE IT.");});

function setupRTCConnection(stream){

    myConnection = new RTCPeerConnection(rtcConfiguration);
    myConnection.onicecandidate = function (event) { send({type:"ice", candidate: event.candidate}); };
}

function checkForRoom(){
    send({type: "check_for_room"});
}
