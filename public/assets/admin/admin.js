//hamberger side menu start
let bar = document.querySelector('#bar');
let sideBar = document.querySelector('#sideBar');
let time = document.querySelector('#time');
bar.addEventListener('click', ()=>{
    sideBar.classList.toggle('ml-0');
    bar.classList.add('hidden');
    time.classList.remove('hidden');
})
time.addEventListener('click', ()=>{
    sideBar.classList.toggle('ml-0');
    time.classList.add('hidden');
    bar.classList.remove('hidden');
})
//hamberger side menu end

//profile start
let profile = document.querySelector('#profile');
let profile_d = document.querySelector('#profile_d');
profile.addEventListener('click', ()=>{
    profile_d.classList.toggle('hidden');
})
//profile end

//massage & notification start
let massage = document.querySelector('#massage');
let notification_msg = document.querySelector('#notification_msg');
let bell = document.querySelector('#bell');
let notification = document.querySelector('#notification');

massage.addEventListener('click', ()=>{
    notification_msg.classList.toggle('hidden');
})

bell.addEventListener('click', ()=>{
    notification.classList.toggle('hidden');
})
//massage & notification end

//search mobile version start
let search_btn = document.querySelector('#search_btn');
let search = document.querySelector('#search');
search_btn.addEventListener('click', ()=>{
    search.classList.toggle('hidden');
})
//search mobile version end

//dropdown start
let drop = document.querySelector('#drop');
let drop_ment = document.querySelector('#drop_ment');
let drop1 = document.querySelector('#drop1');
let drop_menu1 = document.querySelector('#drop_menu1');
drop.addEventListener('click', ()=>{
    drop_ment.classList.toggle('hidden');
})

drop1.addEventListener('click', ()=>{
    drop_menu1.classList.toggle('hidden');
})
//dropdown end