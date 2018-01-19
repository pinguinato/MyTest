// TODO: scrivere le funzioni


var Calcolatrice = function(){

    // per il DOM
    var doc = document;
    
    return{

        // TODO: finire di definire tutti i metodi del calcolatore qui dentro 
        // click sul numero 7
        clickOn7 : function(){
            doc.getElementById('btn7').onclick = function(){
                console.log("Cliccato 7");
            }
        },
        //click sul numero 8
        clickOn8 : function(){
            doc.getElementById('btn8').onclick = function(){
                console.log("Cliccato 8");
            }
        },
        // click sul numero 9
        clickOn9 : function(){
            doc.getElementById('btn9').onclick = function(){
                console.log("Cliccato 9");
            }
        }


    }


}

// quando il documento sarà pronto
document.addEventListener('DOMContentLoaded',function(){

    var myApp = Calcolatrice();

    // test delle funzioni definite
    myApp.clickOn7();
    myApp.clickOn8();
    myApp.clickOn9();



});


/*

window.onload = function(){
    clickOn7();
    clickOn8();
    clickOn9();
}


function clickOn7(){
    document.getElementById('btn7').onclick = function(){
        console.log("Cliccato 7");
    }
}
function clickOn8(){
    document.getElementById('btn8').onclick = function(){
        console.log("Cliccato 8");
    }
}
function clickOn9(){
    document.getElementById('btn9').onclick = function(){
        console.log("Cliccato 9");
    }
}

*/
