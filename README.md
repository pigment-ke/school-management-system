# School Management System

A web-based School Management System designed to efficiently manage students, teachers, classes, attendance, and more. This project is built using PHP, MySQL, HTML, CSS, JavaScript, and jQuery.

## Features

- **Admin Login**: Secure authentication system for administrators.
- **Dashboard**: A centralized overview of the system with quick access to key features.
- **Manage Students**: Add, edit, and view student details.
- **Manage Classes**: Create and manage classes and sections.
- **Manage Teachers**: Add and manage teacher information.
- **Subjects**: Organize and manage subjects taught in the school.
- **Attendance**: Mark and review attendance records for students.

## Technologies Used

- **Backend**: PHP, MySQL
- **Frontend**: HTML, CSS, JavaScript, jQuery
- **Libraries**:
  - [DataTables](https://datatables.net/) for interactive tables.
  - [Bootstrap](https://getbootstrap.com/) for responsive design.

## Installation

Follow these steps to set up the project:

1. **Clone the repository**:
   ```bash
   git clone https://github.com/pigment-ke/school-management-system.git
   ```
2. **Navigate to the project directory**:
   ```bash
   cd school-management-system
   ```
3. **Set up the database**:
   - Import the `school_management.sql` file into your MySQL database.
   - Update the database credentials in `config.php`.

4. **Start the server**:
   - If using XAMPP, place the project folder in the `htdocs` directory.
   - Start Apache and MySQL from the XAMPP control panel.

5. **Access the application**:
   - Open your browser and navigate to:
     ```
     http://localhost/school-management-system
     ```

## File Structure

```
school-management-system/
├── class/
│   ├── School.php          # Core class for database operations
├── inc/
│   ├── header.php          # Header file
│   ├── footer.php          # Footer file
├── js/
│   ├── attendance.js       # JavaScript for attendance management
│   ├── classes.js          # JavaScript for class management
│   ├── students.js         # JavaScript for student management
├── css/
│   ├── style.css           # Custom styles
├── index.php               # Admin login page
├── dashboard.php           # Admin dashboard
├── students.php            # Manage students
├── classes.php             # Manage classes
├── attendance.php          # Manage attendance
└── README.md               # Project documentation
```

## License

This project is licensed under the **MIT License**.

## Contact

For inquiries or support, feel free to reach out:

- **Email**: support@pigment-ke.com
- **GitHub**: [pigment-ke](https://github.com/pigment-ke)
