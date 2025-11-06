# Web Fundamentals Quiz

Simple HTML form demonstrating common form controls and a PHP receiver.

## Local development

1. Start a PHP server:
   ```bash
   php -S localhost:8000
   ```
2. Open `http://localhost:8000/index.html`, fill the form, and submit.
3. The receiver script prints the submitted data.

## Project structure
- `index.html` – Quiz form
- `sendData.php` or `receiver.php` – PHP endpoint (prints request data)

