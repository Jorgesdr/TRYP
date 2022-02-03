
var emailinput=document.getElementById('forgot_email');
var button=document.getElementById('button_forgot');

button.addEventListener('click',sendform,true);

emailinput.addEventListener('keyup',validateEmail);
document.getElementById("button_forgot").disabled = true;

function sendform(e) {
    if (validateEmail()) {
        document.getElementById("button_forgot").disabled = false;
        return true;
    }
    e.preventDefault();
    return false;
}


function validateEmail(){
    const email=document.getElementById('forgot_email').value;
    var preg=/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    if (email != '') {
        if (preg.test(email)) {
            
            document.getElementById('required').classList.add('non');
            document.getElementById("button_forgot").disabled = false;
            //console.log(email);
             return true;
        }else{
            document.getElementById('required').classList.remove('non');
            document.getElementById("button_forgot").disabled = true;
            return false;
            
        }
        
        
    } else {
        document.getElementById('required').classList.add('non');
        
        return false;
    }

};