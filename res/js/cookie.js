const button=document.getElementById('btn_cookies');
const cookie=document.getElementById('cookies_bar');
const font=document.getElementById('fontcookies');


if (!localStorage.getItem('cookies')==' ') {
   button.classList.add('activo');
    font.classList.add('activefont'); 
}   


button.addEventListener('click',quitcookie);

function quitcookie() {
    cookie.classList.remove('active');
    font.classList.remove('activefont');

    localStorage.setItem('cookies',true);

};

