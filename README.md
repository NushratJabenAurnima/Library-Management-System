# 📚 Library Management System

The **Library Management System (LMS)** is a comprehensive platform designed to modernize and streamline library operations by managing **book inventory, user roles, transactions, and fines** efficiently. The system ensures an enhanced library experience for **members, librarians, and administrators** by automating key processes.



## 📌 Project Overview

This project is a **Library Management System** developed as part of the **Database System Course (CSE 302)**. The system provides a **digital platform** for managing library tasks, reducing manual interventions, and improving efficiency.

### 🔹 **Key Features**
- **📖 Online Book Requests** – Members can request and return books online.
- **📊 Automated Inventory Management** – Books can be **added, updated, and removed** dynamically.
- **🔐 Role-Based Access** – Secure system access for **Members, Librarians, and Admins**.
- **💰 Automated Fine Calculation** – Late returns are automatically detected and fines are generated.
- **🔍 Transaction Monitoring** – Admins can track all borrowing and returning activities.
- **📜 Secure Data Handling** – Ensures user and transaction data security.



## 🚀 **System Modules**
The **Library Management System** consists of different modules for efficient **role-based access**:

| Module | Description |
|---------|------------|
| **Authentication** | Secure login, registration, and role-based access. |
| **Member Module** | Profile management, book requests, return tracking, and fine management. |
| **Librarian Module** | Book inventory management, issuing books, handling requests, and monitoring transactions. |
| **Admin Module** | Managing users (adding/removing librarians), tracking transactions, and generating reports. |
| **Fine & Transaction System** | Automated fine calculation and detailed transaction logs. |



## 🏛 **System Architecture**
- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP (Object-Oriented)
- **Database:** MySQL (Relational Database Model)
- **Security:** Role-Based Access Control (RBAC)



## 🛠 **Database Structure**
The **Library Management System** follows a structured **MySQL relational database** with the following tables:

- 📂 **Users Table** (Members, Librarians, Admins)
- 📘 **Book Inventory Table**
- 📆 **Borrow & Return Transactions**
- ⚖️ **Fine Calculation System**
- 📝 **Reports & Logs**



## 🔧 **Installation & Setup**
### **1️⃣ Clone the Repository**
```bash
git clone https://github.com/your-username/library-management-system.git
cd library-management-system
```

### **2️⃣ Database Setup**
- Open **phpMyAdmin**.
- Create a new **database** named **library_db**.
- Import the **SQL files** included in the repository.

### **3️⃣ Run the Project**
- Start a local server using **XAMPP or WAMP**.
- Open a browser and visit:
  ```
  http://localhost/library-management-system
  ```
