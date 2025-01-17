

let errorPanel = document.querySelector('.show-panel');

document.querySelector('.close-button')
  .addEventListener('click', () => {
    errorPanel.classList.add('hidden');
  });