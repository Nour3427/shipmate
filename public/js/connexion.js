const login=document.querySelector('#login');
const signup=document.querySelector('#signup');
const login_link=document.querySelector('#login_link');
const signup_link=document.querySelector('#signup_link');

login_link.addEventListener('click',function(event){
    event.preventDefault();
    login.style.display='none';
    signup.style.display='flex';
})


// password visibility 

const password_toggle=document.querySelectorAll('.password_toggle_button');
const password_input=document.querySelectorAll('.password_input');
for(let i=0; i<password_toggle.length;i++){
password_toggle[i].addEventListener('click',function(e){
    e.preventDefault();
    if(password_input[i].type==='text'){
         password_input[i].type='password';
        password_toggle[i].innerHTML='<i class="fas fa-eye-slash"></i>';
        
    }
    else{
       password_input[i].type='text';
        password_toggle[i].innerHTML='<i class="fa-solid fa-eye"></i>';
    }

})
}



