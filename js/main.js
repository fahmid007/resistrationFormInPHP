/*
document.querySelector('.row_1').onclick = testEvent;
function testEvent(){
    document.querySelector('.row_1').style.background = 'red';
}



document.querySelector('#row2').addEventListener('click',testAddEvent)
document.querySelector('#row2').addEventListener('mouseleave',testAddEvent1)

function testAddEvent(){
    document.querySelector('#row2').style.background = 'orange';
}
function testAddEvent1(){
    document.querySelector('#row2').style.background = 'green';
}




document.querySelector('#row5').addEventListener('click',function(){
    document.querySelector('#row5').style.background = 'tan';
})

document.querySelector('#row5').addEventListener('mouseover',function(){
    this.style.background = 'pink';
})
*/
/*

document.querySelector('.abt').addEventListener('click',function(){
    alert('inner section');
},true)

document.querySelector('.row_10').addEventListener('click',function(){
    alert('outer section');
},true)
*/
/*

document.querySelector('#row2').addEventListener('click',function(){
    this.style.background = 'orange';
})

document.querySelector('#row2').addEventListener('mouseleave',test)
function test(){
    this.style.background = 'yellow';
}



document.querySelector('#row2').addEventListener('dblclick',function(){
    this.removeEventListener('mouseleave',test)
})*/
/*

var element = document.querySelector('.inner').parentElement .style.background = 'red';
//console.log(element);

var element = document.querySelector('body').parentElement;
var element = document.querySelector('.outer').parentElement.style.background = 'yellow';
var element = document.querySelector('html').parentNode;
var element = document.querySelector('.child').parentNode;
var element = document.querySelector('.inner').children;
var element = document.querySelector('.inner').children[5].style.background = 'orange';
var element = document.querySelector('.inner').childNodes;
var element = document.querySelector('.inner').firstElementChild.style.background = 'yellow';
var element = document.querySelector('.inner').lastElementChild.style.background = 'yellow';

console.log(element);
*/

function inputValue(){
    var usrname = document.form.UserName.value;
    var show = 'your usename is: '+usrname;
    document.getElementById('result').innerHTML = show;
}
function inputValueRadio(){
    
}