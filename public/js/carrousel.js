const box = document.querySelectorAll('#accueil .box');
const button = document.querySelectorAll('#accueil .button')

let arrBox = []
let arrButton = []

box.forEach( function(element){
    arrBox.push(element)
})
button.forEach( function(element){
    arrButton.push(element)
})
function setArr(){
    let x = -110
    for(let i = 0; i < arrBox.length ; i++){
        arrBox[i].style.transform = 'translateX(' + x +'%)'      
        x += 110
    }
}
function setArrTransitionL(){
    let x = -110
    for(let i = 0; i < arrBox.length ; i++){
        arrBox[i].style.transition = 'none'
        arrBox[i].style.transform = 'translateX(' + x +'%)'
        if(i != 4){
            arrBox[i].style.transition = 'transform 0.5s'    
        }
        x += 110
    }
}
function setArrTransitionR(){
    let x = -110
    for(let i = 0; i < arrBox.length ; i++){
        arrBox[i].style.transition = 'none'
        arrBox[i].style.transform = 'translateX(' + x +'%)'
        if(i != 0){
            arrBox[i].style.transition = 'transform 0.5s'    
        }
        x += 110
    }
}
setArr()
function moveLeftArr(){
    let arrValue = arrBox.shift()
    arrBox.push(arrValue)
}
function moveRightArr(){
    let arrValue = arrBox.pop()
    arrBox.unshift(arrValue)
}

arrButton[0].addEventListener('click', function(){
    moveLeftArr()
    setArrTransitionL()
})
arrButton[1].addEventListener('click', function(){
    moveRightArr()
    setArrTransitionR()
})

