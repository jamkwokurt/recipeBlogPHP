document.addEventListener('DOMContentLoaded', ()=>{
    switchTabs('home-content');
});
document.getElementById("btnHome").addEventListener('click', ()=>{
    switchTabs('home-content');
});

document.getElementById('btnAllRecipes').addEventListener('click', ()=>{
    switchTabs('recipe-content');
});

document.getElementById("btnCake").addEventListener('click', ()=>{
    switchTabs('recipe-content');
    switchView('Cake');
});

document.getElementById("btnTart").addEventListener('click', ()=>{
    switchTabs('recipe-content');
    switchView('Tart');
});
document.getElementById("btnBiscuit").addEventListener('click', ()=>{
    switchTabs('recipe-content');
    switchView('Biscuit');
});
document.getElementById("btnPastry").addEventListener('click', ()=>{
    switchTabs('recipe-content');
    switchView('Pastry');
});
document.getElementById("btnFrozen").addEventListener('click', ()=>{
    switchTabs('recipe-content');
    switchView('Forzen');
});
document.getElementById("btnDessert").addEventListener('click', ()=>{
    switchTabs('recipe-content');
    switchView('Plated Dessert');
});
document.getElementById("btnPreserves").addEventListener('click', ()=>{
    switchTabs('recipe-content');
    switchView('Fruit Preserves');
});
document.getElementById("btnDecoration").addEventListener('click', ()=>{
    switchTabs('recipe-content');
    switchView('Decoration');
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

document.getElementById("nav-profile").addEventListener('click', ()=>{
    switchTabs('profile-content');
});

document.getElementById("nav-signup").addEventListener('click', ()=>{
    switchTabs('signup-content');
});

document.getElementById("nav-login").addEventListener('click', ()=>{
    switchTabs('login-page-content');
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

function switchView(viewID) {
    let recipeContents = document.getElementsByClassName("recipe-content-section");
    for (let i = 0; i < recipeContents.length; i++) {
        if (viewID !== recipeContents[i].id) {
            recipeContents[i].style.display = 'none';
        } else {
            recipeContents[i].style.display = 'block';
        }
    }
}
