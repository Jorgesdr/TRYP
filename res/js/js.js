
    


window.onload=function () {
}
        var input=document.getElementById('register_pass');
        var input2=document.getElementById("register_pass2");
        var inputemail=document.getElementById('register_email');
        
        document.getElementById("button_register").disabled = true;
        //inputemail.onfocus=function(){validateEmail()};
        inputemail.addEventListener('keyup',validateEmail);
        document.addEventListener('keyup',validatePass);
        
        
       
        input.onfocus=function(){mostrar()};
        input2.onfocus=function(){mostrar()}; 
           
        document.addEventListener("blur", ocultar,true);
        document.addEventListener("blur", sendform,true);
        
        
        

     
function mostrar() {
    document.getElementById('pass_info').classList.remove('non');    
} ;

function ocultar() {
    document.getElementById('pass_info').classList.add('non');
};

function sendform(){

    if (validateEmail()) {
        if (validatePass()) {

            document.getElementById("button_register").disabled = false;
        } else {
            document.getElementById("button_register").disabled = true;
        }
    } else {
        document.getElementById("button_register").disabled = true;
    }


};
function validateEmail(){
    const email=document.getElementById('register_email').value;
    var preg=/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    if (email != '') {
        if (preg.test(email)) {
            //console.log(email);
            document.getElementById('required').classList.add('non');
             return true;
        }else{
            document.getElementById('required').classList.remove('non');
            
            return false;
        }
        
        
    } else {
        document.getElementById('required').classList.add('non');
        
        return false;
    }

};

function validatePass() {   
    const pass= document.getElementById("register_pass").value;
    const pass1=document.getElementById('register_pass2').value;
    const novalido = / /;
    
    if (pass !='') {
                    
        if (pass.length < 6) {
            document.getElementById("length").classList.remove('valid');
            document.getElementById("length").classList.add('invalid');
        } else {
            document.getElementById('length').classList.remove('invalid');
            document.getElementById("length").classList.add('valid');
        }
        if (pass.match(/[a-z]/)) {
            
            document.getElementById("letter").classList.add('valid');
            document.getElementById("letter").classList.remove('invalid');
        }else{
            document.getElementById('letter').classList.add('invalid');
            document.getElementById("letter").classList.remove('valid');
        }
        if (pass.match(/[A-Z]/)) {
            document.getElementById("capital").classList.add('valid');
            document.getElementById("capital").classList.remove('invalid');
        } else {
            document.getElementById("capital").classList.add('invalid');
            document.getElementById("capital").classList.remove('valid');
        }
        if (pass.match(/[0-9]/)) {
            document.getElementById("number").classList.add('valid');     
            document.getElementById("number").classList.remove('invalid');        
        } else {
            document.getElementById("number").classList.add('invalid');
            document.getElementById("number").classList.remove('valid'); 
        }             
        

        if (pass !='' && pass1 !='' ) {

            if (novalido.test(pass || pass1)) {
                document.getElementById("blank").classList.remove('valid');
                document.getElementById("blank").classList.add('invalid');            
            } else {
                document.getElementById("blank").classList.remove('invalid');
                document.getElementById("blank").classList.add('valid');  
            }
            
            if (pass != pass1) {
                document.getElementById("match").classList.remove('valid');
                document.getElementById("match").classList.add('invalid');
                document.getElementById('required_pass').classList.remove('non');  
                document.getElementById('required_pass').classList.add('required');          
            } else {
                document.getElementById("match").classList.remove('invalid');
                document.getElementById("match").classList.add('valid');  
                document.getElementById('required_pass').classList.add('non');  
            }
            if ( pass1.length ==0) {
                document.getElementById("null").classList.remove('valid');
                document.getElementById("null").classList.add('ivalid');  
            } else {
                document.getElementById("null").classList.remove('invalid');
                document.getElementById("null").classList.add('valid'); 
            }
            return true;
            
        }else{
            
            return false;
        }
    }else{
        return false;
    }    
        
};




    


