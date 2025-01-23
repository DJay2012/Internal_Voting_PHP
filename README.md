# Online Voting System using PHP and MySQL

## Description
The **Online Voting System** is a secure and user-friendly platform that allows voters to cast their votes online with ease. This system eliminates the need for physical polling stations, reducing logistical challenges and enhancing accessibility for voters.

The system ensures that only eligible voters can participate by requiring registration, which is primarily managed by the **System Administrator** for security purposes. Once registered, voters are provided with a unique **Voter ID** that serves as their login credential for accessing the system and participating in elections.

The platform also includes an **Administrative Dashboard** for managing voters, candidates, and results, ensuring a streamlined and efficient election process. It is built with **PHP** and **MySQL**, making it robust and scalable for small to medium-sized elections.

---

## Key Features

### Voter Features:
1. **Voter Registration**:
   - Registration is handled securely by the administrator.
   - Voters are provided with a unique **Voter ID** upon registration.

2. **Login and Authentication**:
   - Secure login using the assigned **Voter ID**.
   - Ensures election integrity by allowing each voter to vote only once.

3. **Voting**:
   - User-friendly interface for selecting and voting for candidates.
   - Confirmation message after a successful vote.

4. **Profile Management**:
   - View personal details and voting history.

---

### Admin Features:
1. **Admin Dashboard**:
   - Access to manage voters, candidates, and election results.
   - Real-time monitoring of voting progress.

2. **Register Voters**:
   - Add, edit, or delete voter records.
   - Manage voter profiles and access.

3. **Manage Candidates**:
   - Add, edit, or remove candidates.
   - Assign candidates to elections.

4. **Monitor and Publish Results**:
   - View election statistics and results.
   - Publish results securely and generate reports.

5. **Generate Reports**:
   - Export voting data for archival or public disclosure.

---

## Installation Instructions

### Prerequisites:
1. A local server environment like **XAMPP**, **WAMP**, or **MAMP** (to support PHP and MySQL).
2. A modern web browser (e.g., Chrome, Firefox, Edge).
3. Basic knowledge of **phpMyAdmin** or MySQL database management.

---

### Installation Steps:
1. Download or clone the repository to your local machine.
2. Move the project folder to the `htdocs` directory (if using XAMPP) or the appropriate directory for your web server.
3. Start your local server (Apache and MySQL).
4. Create a database named `poll` in your MySQL server using **phpMyAdmin** or another database management tool.
5. Import the `poll.sql` file into the `poll` database. This file contains the database schema and initial data for the system.
6. Open your browser and navigate to the following URLs:
   - **Main Voting Page**: `http://localhost/online_voting`
   - **Admin Login Page**: `http://localhost/online_voting/admin`

---

### Admin Login Credentials:
Use the following credentials to access the admin dashboard:
- **URL**: `http://localhost/online_voting/admin`
- **Email**: `admin@gmail.com`
- **Password**: `admin`

---

## Folder Structure

The project is structured as follows:

- **admin/**: Contains admin functionalities, including dashboards, candidate management, and results management.
- **css/**: Stores stylesheets for the user interface.
- **images/**: Contains images used in the application (logos, UI elements, etc.).
- **js/**: Includes JavaScript files for client-side interactivity.
- **layout/**: Holds layout templates for the system.
- **pages/**: Contains static and dynamic content pages.
- **poll.sql**: Database schema and initial data dump.
- **index.php**: The main entry point of the application.

---

## Technical Details

- **Backend**: PHP (Hypertext Preprocessor)
- **Frontend**: HTML, CSS, JavaScript
- **Database**: MySQL
- **Security Features**:
  - Encrypted storage for sensitive voter and admin data.
  - Session management to prevent unauthorized access.

---

## Future Enhancements

1. **Two-Factor Authentication** for improved security.
2. **Email Notifications** for updates like registration confirmation, voting reminders, and election results.
3. **Mobile-Responsive Design** for better usability on smartphones and tablets.
4. **Cloud Deployment** to scale the system for larger elections.

---

## License

This project is licensed under the **MIT License**. You are free to modify and distribute the project as per the license terms.

---

## Acknowledgments

This system was developed to simplify and secure the voting process for small to medium-sized elections. Special thanks to all contributors and testers who ensured the system's functionality and reliability.
