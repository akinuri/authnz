document.querySelectorAll("[data-toggle-dropdown]").forEach(toggleEl => {
    let dropdownSelector = toggleEl.dataset.toggleDropdown;
    if (!dropdownSelector) {
        return;
    }
    let dropdownEl = document.querySelector(dropdownSelector);
    if (!dropdownEl) {
        return;
    }
    dropdownToggle(toggleEl, dropdownEl);
});

function dropdownToggle(toggleEl, dropdownEl) {
    toggleEl.addEventListener("click", () => {
        dropdownEl.hidden = !dropdownEl.hidden;
    });
    window.addEventListener("click", e => {
        if (toggleEl.contains(e.target) || dropdownEl.contains(e.target)) {
            return;
        }
        dropdownEl.hidden = true;
    });
}