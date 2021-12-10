const title = document.getElementById('title')
const objet = document.getElementById('objet')
const photo = document.getElementById('file')
const content = document.getElementById('content')

const titleA = document.getElementById('titleA')
const objetA = document.getElementById('objetA')
const photoA = document.getElementById('fileA')
const contentA = document.getElementById('contentA')

let arrStockage = [[title, titleA],[objet, objetA],[content, contentA]]

arrStockage.forEach(function(element){
    
    element[0].addEventListener('change', function(){
        let elementValue = element[0].value
        element[1].innerText = elementValue
    })
})
window.addEventListener('click', function(){
    console.log(photo.files[0])

})
