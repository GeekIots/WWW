var dgram = require('dgram');
var iconv = require('iconv-lite');

var serverSocket = dgram.createSocket('udp4');
function fibo (n) {
  return n > 1 ? fibo(n - 1) + fibo(n - 2) : 1;
}
var n=8
function back(){
	if(!--n) return console.timeEnd('no thread');
}
//接收到数据
serverSocket.on('message', function(msg, rinfo){
  var arr = JSON.parse(msg); 
  console.log('-----收到数据----------');
  console.log(arr.type);
  console.log(arr.userid);
  console.log(arr.deviceid);
  console.log(arr.state);
  
  console.log('-----返回数据----------');
  arr.type = 'response';
  arr.state='设备不在线！';
  var response = JSON.stringify(arr);
  
  console.log(response);
  
  //编码转为GB2312
  response = iconv.encode(response,'GB2312');
  

  fibo(40);

  //返回数据
  serverSocket.send(response, 0, response.length, rinfo.port, rinfo.address);
});

//    err - Error object, https://nodejs.org/api/errors.html
serverSocket.on('error', function(err){
  console.log('error, msg - %s, stack - %s\n', err.message, err.stack);
});

serverSocket.on('listening', function(){
  console.log("echo server is listening on port 2525 ");
})

serverSocket.bind(2525);