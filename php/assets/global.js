// #region ==================== DROPDOWN TOGGLE

let dropdownToggles = Array.from(document.querySelectorAll("[data-dropdown-toggle]"));

dropdownToggles = dropdownToggles.filter(toggleEl => {
    let dropdownSelector = toggleEl.dataset.dropdownToggle;
    return dropdownSelector && document.querySelector(dropdownSelector);
});

dropdownToggles.forEach(toggleEl => {
    const dropdownEl = document.querySelector(toggleEl.dataset.dropdownToggle);
    dropdownEl.hidden = true;
    dropdownToggle(toggleEl, dropdownEl);
});

function dropdownToggle(toggleEl, dropdownEl) {
    toggleEl.addEventListener("click", () => {
        dropdownEl.hidden = !dropdownEl.hidden;
    });
    window.addEventListener("click", e => {
        if (!toggleEl.contains(e.target) && !dropdownEl.contains(e.target)) {
            dropdownEl.hidden = true;
        }
    });
}

//#endregion

// #region ==================== ASIDE TOGGLE

document.querySelector("header").style.transition = "margin-left 250ms";
document.querySelector("aside").style.transition  = "left 250ms";
document.querySelector("main").style.transition   = "margin-left 250ms";
document.querySelector("#aside-toggle").addEventListener("click", () => {
    if (isAsideMenuVisible()) {
        hideAsideMenu();
    } else {
        showAsideMenu();
    }
});

function isAsideMenuVisible() {
    return document.querySelector("aside").style.left == "";
}

function hideAsideMenu() {
    document.querySelector("header").style.marginLeft = "0";
    document.querySelector("aside").style.left = "calc(var(--aside-width) * -1)";
    document.querySelector("main").style.marginLeft = "0";
}

function showAsideMenu() {
    document.querySelector("header").style.marginLeft = "";
    document.querySelector("aside").style.left = "";
    document.querySelector("main").style.marginLeft = "";
}

//#endregion
