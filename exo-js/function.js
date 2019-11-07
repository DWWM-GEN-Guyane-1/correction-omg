// Exercice 1
function changeExo1(img) {

    var image = document.getElementById('image1');
    image.src = img;

}
//Exercice 2

function focusExo2() {

    alert('Merci de votre participation')

}

//Exercice 3

function bindKey() {

    var key = document.getElementById('nom').value
    alert(key)
}

//Exercice 4

function raz() {
    
    //https://developer.mozilla.org/en-US/docs/Web/API/HTMLFormElement/elements

    //document.getElementById("form").reset(); 

    var inputs = document.getElementById("form").elements;

    // Iterate over the form controls
    for (i = 0; i < inputs.length; i++) {
        
        if (inputs[i].nodeName === "INPUT" && inputs[i].type === "text") {
        // Update text input
        inputs[i].value = "";
    
    }
}

}

// Exercice 5 + 6
//https://developer.mozilla.org/fr/docs/Web/API/Element/mouseout_event

function changeExo5(currentImg) {

    var idImage = currentImg.id
    
    var image = document.getElementById(idImage);
    image.src = 'images/' + idImage + '_2.jpg';

    image.addEventListener("mouseout", function() {

        image.src = 'images/' + idImage + '.jpg';

    })

    
}