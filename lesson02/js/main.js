let errorPanel = document.querySelector('.error-panel');

//error message hide after press button
document.querySelector('.error-panel-button')
  .addEventListener('click', () => {
    errorPanel.classList.add('hidden');

    console.log('OK');
  });


//error message hide after time
document.addEventListener('DOMContentLoaded', () => {
  if (errorPanel) {
    setTimeout(() => {
      errorPanel.classList.add('hidden');
    }, 5000);
  }
});