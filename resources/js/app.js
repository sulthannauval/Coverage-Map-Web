import './bootstrap';

document.addEventListener('DOMContentLoaded', function (){
    const hamburger = document.querySelector("#toggle-btn");

    if (hamburger) {
        console.log('Hamburger Found!');

        hamburger.addEventListener("click", function(){
            const sidebar = document.querySelector('#sidebar');
            console.log('Clicked! Sidebar before:', sidebar.className);
            sidebar.classList.toggle('expand');
            console.log('Sidebar after:', sidebar.className);
            // document.querySelector("#sidebar").classList.toggle("expand");
    });
    } else {
        console.log('Hamburger NOT found');
    }
});