function openTweetPopup() {
    let tweetPopup = document.getElementById('tweetPopup');
    tweetPopup.classList.remove('hidden');
    window.addEventListener('click', closeTweetPopupClickOutside);
    window.addEventListener('keydown', closeTweetPopupEchap);
}


function closeTweetPopup() {
    let tweetPopup = document.getElementById('tweetPopup');
    tweetPopup.classList.add('hidden');

    window.removeEventListener('click', closeTweetPopupClickOutside);
    window.removeEventListener('keydown', closeTweetPopupEchap);
}

function closeTweetPopupClickOutside(event) {
    let tweetPopup = document.getElementById('tweetPopup');
    if (event.target == tweetPopup) {
        closeTweetPopup();
    }
}

function closeTweetPopupEchap(event) {
    if (event.key === 'Escape') {
        closeTweetPopup();
    }
}
