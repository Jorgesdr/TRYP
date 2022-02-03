var mail=document.getElementById('contact_email');
var nom=document.getElementById('name');
var text=document.getElementById('text');
var send=document.getElementById('button_contact');

send.disabled = true;

mail.addEventListener('keyup',validateEmail);
nom.addEventListener('keyup',validatename);
text.addEventListener('keyup',validatetexts);
send.addEventListener('click',sendform,true);



function sendform(e) {
    if (validateEmail()&& validatename()&& validatetexts()) {
        send.disabled = false;
        return true;
    }
    e.preventDefault();
    return false;
}


function validateEmail(){
    const email=document.getElementById('contact_email').value;
    var preg=/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    if (email != '') {
        if (preg.test(email)) {
            
            document.getElementById('required').classList.add('non');
            document.getElementById("button_contact").disabled = false;
            //console.log(email);
             return true;
        }else{
            document.getElementById('required').classList.remove('non');
            document.getElementById("button_contact").disabled = true;
            return false;
            
        }
        
        
    } else {
        document.getElementById('required').classList.add('non');
        
        return false;
    }

};

function validatename() {
    const nomb=document.getElementById('name').value;
    if (nomb != '' && nomb.length >3 ) {
       
        document.getElementById('requiredname').classList.add('non');
        send.disabled = false;
        console.log(nom);
        return true;
        
    }else {
        document.getElementById('requiredname').classList.remove('non');
        send.disabled = true;
        return false;
    }
    
}
function validatetexts() {
    const textarea=document.getElementById('text').value;
    if (textarea != '' && textarea.length >3 ) {

        document.getElementById('requiredtext').classList.add('non');
        send.disabled = false;
        return true;
        
    }else{
        document.getElementById('requiredtext').classList.remove('non');
        send.disabled = true;
        return false;
    }
    
}