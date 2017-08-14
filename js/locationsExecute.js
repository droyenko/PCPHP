document.addEventListener('DOMContentLoaded', main);

function main() {
    let locationBtn = document.querySelector('#locationBtn');
    locationBtn.addEventListener('click', () => {
         let locationsListModal = new LocationsList();
    });
}
