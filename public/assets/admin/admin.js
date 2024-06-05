//hamberger side menu start
let bar = document.querySelector("#bar");
let sideBar = document.querySelector("#sideBar");
let time = document.querySelector("#time");
bar.addEventListener("click", () => {
    sideBar.classList.toggle("ml-0");
    bar.classList.add("hidden");
    time.classList.remove("hidden");
});
time.addEventListener("click", () => {
    sideBar.classList.toggle("ml-0");
    time.classList.add("hidden");
    bar.classList.remove("hidden");
});
//hamberger side menu end

//profile start
let profile = document.querySelector("#profile");
let profile_d = document.querySelector("#profile_d");
profile.addEventListener("click", () => {
    profile_d.classList.toggle("hidden");
});
//profile end

//massage & notification start
let massage = document.querySelector("#massage");
let notification_msg = document.querySelector("#notification_msg");
let bell = document.querySelector("#bell");
let notification = document.querySelector("#notification");

massage.addEventListener("click", () => {
    notification_msg.classList.toggle("hidden");
});

bell.addEventListener("click", () => {
    notification.classList.toggle("hidden");
});
//massage & notification end

//search mobile version start
let search_btn = document.querySelector("#search_btn");
let search = document.querySelector("#search");
search_btn.addEventListener("click", () => {
    search.classList.toggle("hidden");
});
//search mobile version end

//dropdown start
function dropDown() {
    document.querySelector("#drop_down_menu").classList.toggle("hidden");
    document.querySelector(".icon").classList.toggle("rotate-180");
}
function dropDown1() {
    document.querySelector("#drop_menu").classList.toggle("hidden");
    document.querySelector(".icon1").classList.toggle("rotate-180");
}
function dropDown3() {
    document.querySelector("#drop_down_menu1").classList.toggle("hidden");
    document.querySelector(".icon3").classList.toggle("rotate-180");
}
//dropdown end
