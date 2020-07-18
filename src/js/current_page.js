function setNavigation() {

    // look for SECOND level /pulse/youtube or /pulse/instagram
    let current_location = location.pathname.split('/')[2];

    // root page /pulse
    if (current_location === ""){
        document.querySelector(".chips__link").className += " current";
        return;
    };

    let menu_items = document.querySelector(".chips").getElementsByTagName("a");

    for (let i = 0, len = menu_items.length; i < len; i++) {

        if (menu_items[i].getAttribute("href").indexOf(current_location) !== -1) {
            menu_items[i].className += " current";
        }
    }
}
setNavigation()