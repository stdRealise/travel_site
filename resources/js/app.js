import './bootstrap';
document.addEventListener("DOMContentLoaded", () => {
    let titles = document.querySelectorAll(".accordion .item-title");
    titles.forEach((item) => {
        item.addEventListener('click', (e) => {
            let actives = document.querySelectorAll('.accordion .item-content.active');
            actives.forEach((item) => item.classList.remove('active'));
            let contentElem = e.target.nextElementSibling;
            contentElem.classList.add('active');
        });
    });
    let buttons = document.querySelectorAll('.tabs-header button');
    buttons.forEach(button => {
        button.addEventListener('click', () => {
            let tabs = document.querySelectorAll('.tabs-body div');
            tabs.forEach((tab) => tab.style.display='none');
            let target = document.querySelector(button.getAttribute('data-target'));
            target.style.display = 'contents';
        });
    });
});
