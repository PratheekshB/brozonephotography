document.addEventListener('DOMContentLoaded', function () {
    const offerButton = document.getElementById('what-we-offer-button');
    const offerSection = document.getElementById('what-we-offer');

    offerButton.addEventListener('click', function () {
        offerSection.classList.toggle('hidden');
    });
});
