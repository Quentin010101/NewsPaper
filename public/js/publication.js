const title = document.getElementById('title')
const objet = document.getElementById('objet')
const photo = document.getElementById('file')
const content = document.getElementById('content')

const titleA = document.getElementById('titleA')
const objetA = document.getElementById('objetA')
const photoA = document.getElementById('photoA')
const contentA = document.getElementById('contentA')

const p = document.querySelector('.photo-erreur')

let arrStockage = [[title, titleA],[objet, objetA],[content, contentA]]

arrStockage.forEach(function(element){
    
    element[0].addEventListener('change', function(){
        let elementValue = element[0].value
        element[1].innerText = elementValue
    })
})

photo.addEventListener('change', function(){

    let reader = new FileReader()
    reader.readAsDataURL(photo.files[0])
    p.innerText = ""
    reader.onload = ()=>{
        let photoUrl = reader.result 
        console.log(photoUrl)
        photoA.setAttribute('src', photoUrl)   
    }
})
