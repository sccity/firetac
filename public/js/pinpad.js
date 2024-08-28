document.addEventListener('DOMContentLoaded', () => {
    const inputBox = document.getElementById('input-box');
    const clearButton = document.getElementById('clear-button');
    const submitButton = document.getElementById('submit-button');
    const messageBox = document.getElementById('message-box'); // For displaying error messages

    let inputValue = '';

    function updateInputBox() {
        inputBox.innerHTML = '•'.repeat(inputValue.length);
    }

    function handleButtonClick(event) {
        inputValue += event.target.textContent;
        updateInputBox();
    }

    function handleClearButtonClick() {
        inputValue = '';
        updateInputBox();
        messageBox.textContent = ''; // Clear the message box
    }

    function handleSubmitButtonClick() {
        if (inputValue.length === 0) {
            messageBox.textContent = 'Please enter a PIN.';
            return;
        }

        fetch('/validate-pin.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `pin=${encodeURIComponent(inputValue)}`,
        })
        .then(response => response.json())
        .then(data => {
            console.log('Response data:', data); // Log the response data
            if (data.success) {
                window.location.href = '/dashboard.php'; // Redirect to the dashboard
            } else {
                messageBox.textContent = 'Invalid PIN. Please try again.';
            }
        })
        .catch(error => {
            console.error('Error:', error);
            messageBox.textContent = 'An error occurred. Please try again.';
        });
    }

    document.querySelectorAll('.button').forEach(button => {
        button.addEventListener('click', handleButtonClick);
    });

    clearButton.addEventListener('click', handleClearButtonClick);
    submitButton.addEventListener('click', handleSubmitButtonClick);
});