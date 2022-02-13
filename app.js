
$(window).scroll(function(){
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 50)

});

const registerBtn = document.querySelector('#register');
const modal = document.querySelector('#modal');
const closeBtn = document.querySelector('#closeBtn')

registerBtn.addEventListener('click',(event) =>{
    modal.style.display = 'block'
})
closeBtn.addEventListener('click',(closed) =>{
    modal.style.display = 'none'
})

