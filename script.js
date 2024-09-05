// Get all input fields with a label
const inputFields = document.querySelectorAll('.peer');

// Add an event listener to each input field
inputFields.forEach((inputField) => {
  inputField.addEventListener('input', () => {
    // Get the label associated with the input field
    const label = inputField.nextElementSibling;

    // Check if the input field has a value
    if (inputField.value !== '') {
      // Add classes to the label to hide it
      label.classList.add('opacity-0', '-translate-y-4');
    } else {
      // Remove classes to show the label
      label.classList.remove('opacity-0', '-translate-y-4');
    }
  });
});