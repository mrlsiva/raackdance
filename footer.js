// footer.js
document.addEventListener('DOMContentLoaded', function () {
    var footerContainer = document.getElementById('footer-container');

    if (footerContainer) {
        fetch('footer.html')
            .then(response => response.text())
            .then(data => {
                footerContainer.innerHTML = data;
            })
            .catch(error => console.error('Error fetching footer:', error));
    }
});
