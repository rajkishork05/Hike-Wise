// Function to reveal the hidden section when the button is clicked
function revealMore() {
    const moreInfo = document.getElementById('more-info');
    const button = document.getElementById('reveal-button');

    // Toggle visibility of the additional information
    if (moreInfo.classList.contains('hidden')) {
        moreInfo.classList.remove('hidden');
        button.innerHTML = 'Show Less';
    } else {
        moreInfo.classList.add('hidden');
        button.innerHTML = 'Learn More';
    }
}
