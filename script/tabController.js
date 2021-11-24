document.addEventListener('DOMContentLoaded', ()=>{
    switchTabs('home-content');
});
document.getElementById("btnHome").addEventListener('click', ()=>{
    switchTabs('home-content');
});
document.getElementById("btnCake").addEventListener('click', ()=>{
    switchTabs('recipe-content');
});
document.getElementById("btnTart").addEventListener('click', ()=>{
    switchTabs('recipe-content');
});
document.getElementById("btnPastry").addEventListener('click', ()=>{
    switchTabs('recipe-content');
});
document.getElementById("btnDessert").addEventListener('click', ()=>{
    switchTabs('recipe-content');
});
document.getElementById("btnPreserves").addEventListener('click', ()=>{
    switchTabs('recipe-content');
});
document.getElementById("btnDecoration").addEventListener('click', ()=>{
    switchTabs('recipe-content');
});

document.getElementById("btnBookmark").addEventListener('click', ()=>{
    switchTabs('bookmark-content');
});

document.getElementById("btnGallery").addEventListener('click', ()=>{
    switchTabs('gallery-content');
});

document.getElementById("btnAbout").addEventListener('click', ()=>{
    switchTabs('about-content');
});

document.getElementById("navSignup").addEventListener('click', ()=>{
    switchTabs('signup-content');
});

document.getElementById("navLogin").addEventListener('click', ()=>{
    switchTabs('login-content');
});
document.getElementById("navProfile").addEventListener('click', ()=>{
    switchTabs('profile-content');
});
document.getElementById("navLogout").addEventListener('click', ()=>{
    switchTabs('logout-content');
});

function switchTabs(tabID) {
    let tabContents = document.getElementsByClassName('tab-content');
    for (let i = 0; i < tabContents.length; i++) {
        if (tabID !== tabContents[i].id) {
            tabContents[i].style.display = 'none';
        } else {
            tabContents[i].style.display = 'block';
        }
    }
}