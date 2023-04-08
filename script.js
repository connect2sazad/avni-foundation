
var modal = document.querySelector('#modal');
var campaign_button = document.querySelector('#campaign-button');
var close_modal_btn = document.querySelector('#close-modal');

campaign_button.addEventListener('click', function () {
    modal.style.display = 'flex';
});

close_modal_btn.addEventListener('click', function () {
    modal.style.display = 'none';
});
