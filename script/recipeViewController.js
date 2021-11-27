document.getElementById().addEventListener('click',()=>{

});
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