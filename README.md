# hng12-php

Public API Project
This project is a simple PHP-based API that returns a JSON response containing an email, the current datetime in ISO 8601 format, and a GitHub URL. The API is designed to be publicly accessible and includes CORS handling. Additionally, a backlink button is provided to link to a specified URL.

Features
JSON Response: The API returns a JSON object with the following fields:

email: A predefined email address.

current_datetime: The current datetime in ISO 8601 format.

github_url: A link to the GitHub repository for this project.

CORS Handling: The API includes headers to allow cross-origin resource sharing (CORS).

Backlink Button: A styled button links to an external URL (e.g., https://hng.tech/hire/php-developers).

Requirements
PHP (version 7.0 or higher)

A web server (e.g., Apache, Nginx) or a hosting service (e.g., 000webhost, Heroku)

Installation and Setup
Clone the Repository:

bash
Copy
git clone https://github.com/yourusername/your-repo.git
cd your-repo
Deploy the API:

Upload the api.php file to your web server or hosting service.

Ensure the server supports PHP.

Access the API:

The API will be accessible at the deployed URL (e.g., https://yourdomain.com/api.php).

Access the Backlink Page:

The index.html file can be accessed at the deployed URL (e.g., https://yourdomain.com/index.html).

API Specification
Endpoint
Method: GET

URL: https://yourdomain.com/api.php

Response Format (200 OK)
json
Copy
{
  "email": "simeonedet89@gmail.com",
  "current_datetime": "2023-10-05T12:34:56Z",
  "github_url": "https://github.com/yourusername/your-repo"
}
Example Usage
Fetching Data from the API
You can fetch data from the API using JavaScript's fetch API:

javascript
Copy
fetch('https://yourdomain.com/api.php')
    .then(response => response.json())
    .then(data => {
        console.log(data);
    })
    .catch(error => {
        console.error('Error fetching data:', error);
    });
Backlink Button
The backlink button is included in the index.html file and links to https://hng.tech/hire/php-developers.

Project Structure
Copy
your-repo/
├── api.php                # PHP script for the API
├── index.html             # HTML file with the backlink button
├── README.md              # Project documentation
└── .gitignore             # Files and directories to ignore in Git
Deployment
Local Deployment
Use a local server like XAMPP or WAMP.

Place the api.php and index.html files in the htdocs or www directory.

Access the API via http://localhost/api.php.

Public Deployment
Upload the api.php and index.html files to your web server or hosting service.

Access the API via the public URL (e.g., https://yourdomain.com/api.php).

Contributing
Contributions are welcome! If you'd like to contribute, please follow these steps:

Fork the repository.

Create a new branch for your feature or bugfix.

Commit your changes.

Submit a pull request.

License
This project is licensed under the MIT License. See the LICENSE file for details.

Author
Your Name

Email: simeonedet89@gmail.com

GitHub: yourusername

Acknowledgments
Thanks to HNG for the inspiration.

