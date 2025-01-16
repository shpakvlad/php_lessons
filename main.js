

let errorPanel = document.querySelector('.show-panel');

document.querySelector('.close-button')
  .addEventListener('click', (e) => {
    errorPanel.classList.add('hidden');
  });