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