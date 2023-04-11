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

const password_toggle=document.querySelector('.password_toggle_button');
const password_input=document.querySelector('.password_input');

password_toggle.addEventListener('click',function(){
    if(password_input.type==='text'){
         password_input.type='password';
        password_toggle.innerHTML='<i class="fas fa-eye-slash"></i>';
        
    }
    else{
       password_input.type='text';
        password_toggle.innerHTML='<i class="fa-solid fa-eye"></i>';
    }
})



