
// marca de tiempo para el inicio del proceso

var velMax = 0;
uSize = 1024 * 1024;
var maxVel = 0;


var gData = function(length) {
    var arr = [];
    for (var i = 1; i < length ; i++) {
        arr.push('');
    }
    return arr.join();
};

function inicio() {
    return new Date().getTime();
};

// calculo diferencia
function  getDiff (comienzo) {
    return (inicio() - comienzo) / 1000;
};

function Ping() {

    var comienzo = inicio();

    $.ajax({
        type: 'POST',
        // envía algo(nada) por el post
        url: '/inicio/post/' + '?id=' + comienzo,
        data: "sdjhvasdb fkjhasdbf akhfbsoduyge387rtgq3ifuhbawelkifhjb sadkhjf baskjdfhbasd kjfhbasdkjfhasb kdfjhas",
        dataType: 'application/octet-stream',
        beforeSend: function() {
            $("#loaderP").css("visibility","visible");
        },
        success: function(msg) {
            pingT = getDiff(comienzo);
        },
        complete: function(xhr, textStatus) {
            $("#loaderP").css("visibility","hidden");
            $("#spanPing").html(pingT);

            doW();
        }
    });    
};

var doW = function () {


    var comienzo = inicio();
    $.ajax({
        type: 'GET',
        //relleno un archivo con data base64. 
        url: 'http://velocidad.localhost/data/data.bin' + '?id=' + comienzo,

        dataType: 'application/octet-stream',
        beforeSend: function() {
            $("#loaderD").css("visibility","visible");

        },        
        success: function(msg) {
            velDescarga = msg.length / getDiff(comienzo);
            if(velDescarga > velMax) {
                velMax = velDescarga;
            }
        },
        complete: function(xhr, textStatus) {
                      $("#loaderD").css("visibility","hidden");                      
                      $("#spanDown").html(velMax);
                      upL();
                  }
              });
};






var upL = function() {
              var uData = gData(uSize);

              var start = inicio();
              $.ajax({
                type: 'POST',
                url: 'http://velocidad.localhost/data/data.post' + '?id=' + start,
                data: uData,
                dataType: 'application/octet-stream',
                beforeSend: function() {
                    $("#loaderU").css("visibility","visible");
                },                  
                success: function(msg) {
                    uploadSpeed = uData.length / getDiff(start);
                    if(uploadSpeed > maxVel) {
                        maxVel = uploadSpeed;
                    }
                },
                complete: function(xhr, textStatus) {
                       $("#loaderU").css("visibility","hidden");                      
                       $("#spanUp").html(maxVel);                       
                   }
               });
          };