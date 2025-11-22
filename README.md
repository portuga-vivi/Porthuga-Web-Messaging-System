Porthuga Web Messaging System

A complete messaging platform built with PHP, HTML, CSS, JavaScript, and MySQL (PHPMyAdmin).
This system allows users to register, log in, send messages, view history, and interact through a clean and responsive interface.

Originally developed as a full web application, this version includes a fully cleaned and professionalized file structure suitable for deployment and GitHub hosting.

🚀 Features
🔐 User Management

Register new users

Secure login (PHP session-based)

Logout functionality

Input validation

💬 Messaging System

Send and receive messages in real time (AJAX)

Chat window UI

Message history

Sound notifications (msg3.mp3, msg.wav)

🧩 Backend & Database

Built using PHP

Structured MySQL database

Prepared connection files (conexaophp/)

Uploads folder for images/files

🎨 Interface & Layout

Custom CSS design

Responsive layout

Icons and images optimized

JavaScript enhancements for usability

🛠️ Technologies Used

PHP (core backend logic)

MySQL / PHPMyAdmin (database)

HTML5 / CSS3 (layout & design)

JavaScript (interactivity & AJAX)

Bootstrap (selected UI components)

📦 Project Structure
/porthuga_github_ready/
│
├── index.php
├── chat/
├── conexaophp/
├── imgs/
├── js/
├── icons/
├── msg.wav
├── msg3.mp3
└── README.md

⚙️ Installation & Setup
1️⃣ Download the Project

Download the GitHub ZIP or clone the repository:

git clone https://github.com/portuga-vivi/porthuga-web-messaging-system

2️⃣ Move the Project to Your Server

Place it inside:

htdocs (for XAMPP)

www (for WAMP)

Your web hosting root

3️⃣ Configure the Database

Open phpMyAdmin

Create a database (example: porthuga_chat)

Import the SQL file if included

Edit the connection file:

conexaophp/conexao.php


Set your database credentials:

$servidor="localhost";
$usuario="root";
$senha="";
$dbname="porthuga_chat";

4️⃣ Run the System

Open the browser:

http://localhost/porthuga_github_ready


You’re ready to go!

📸 Screenshots

(Add your screenshots here after uploading them to /docs)

## 📸 Screenshots
![Tela Inicial](docs/screen1.jpg)
![Painel de Contactos](docs/screen2.jpg)
![Painel de Chat](docs/screen3.jpg)
![Definições](docs/screen4.jpg)

👨‍💻 Author

Egas Viegas Portugal
GitHub: https://github.com/portuga-vivi

📄 License

This project is currently not licensed.
If needed, you may add MIT License later.
