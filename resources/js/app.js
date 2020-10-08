require('./bootstrap'); // chiama axios e non il vero bootstrap
window.$ = require('jquery'); // non necessario perchè gia importato quando si fa la Auth

function init(){
    checkListner();
    getInfo(); 
}

$(init); // alternativa a document.ready

function getInfo(mostEspensive) {

    var url = '/api/pizze/all';

    if (mostEspensive) {
        url = '/api/pizze/mostExp'
    }

    $.ajax({
        url: url,
        method: 'GET',
        success: function(data){
            tgt = $('#writeHere');
            tgt.html("");
            for (var i = 0; i < data.length; i++) {

                var dato = data[i];
                var toWrite = "<li>" + dato['nome'] + '==>' +dato['prezzo'] + "€" + "</li>";
                tgt.append(toWrite);
            }
        },
        error: function(err){
            console.log('Errore su', err);
        }
    });
}

function checkListner() {
    var tgt = $('#checkif')
    tgt.on("change", checkboxToggle); // change è deprecato quindi uso .on
}

function checkboxToggle() {
    var trigger = $(this);
    var isTriggered = trigger.is(':checked');

    getInfo(isTriggered);
    console.log(isTriggered);
}