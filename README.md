# 📝 Exam Management System

A Laravel-based **Exam Management System** designed to manage online tests, questions, student attempts, scoring, and results.

The system provides separate functionality for **Admin, Teacher, and Student** users with role-based access control.

## 🚀 Features

* 🔐 Role-based Authentication
* 👨‍🏫 Teacher Dashboard
* 👨‍🎓 Student Dashboard
* 📝 Create and Manage Tests
* ❓ Create Questions with Multiple Options
* ✅ Correct Answer Management
* 🎯 Online Quiz Attempt
* 📊 Automatic Result Calculation
* ➕ Negative Marking Support
* 📋 Student Attempt History
* 🔍 View Selected and Correct Answers
* 🔒 User Status Management
* 📱 Responsive Bootstrap UI

## 👥 User Roles

### Admin

* Manage users
* Manage system data
* Control user roles and status

### Teacher

* Create tests
* Add questions and options
* Set marks and negative marking
* Publish or close tests
* View student attempts and results

### Student

* View available tests
* Attempt online quizzes
* Submit answers
* View scores and results
* Review selected and correct answers

## 🛠️ Technologies Used

* **Laravel 12**
* **PHP 8.2+**
* **MySQL**
* **Bootstrap 5**
* **JavaScript**
* **jQuery**
* **Blade Templates**
* **Eloquent ORM**
* **SweetAlert**
* **Bootstrap Icons**

## 🗄️ Main Database Tables

The application uses several tables to manage the examination workflow:

* `users`
* `tests`
* `questions`
* `question_options`
* `test_attempts`
* `attempt_answers`

## ⚙️ Installation

Clone the repository:

```bash
git clone https://github.com/your-username/your-repository.git
```

Go to the project directory:

```bash
cd your-repository
```

Install PHP dependencies:

```bash
composer install
```

Create the environment file:

```bash
copy .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

Configure your database in `.env`:

```env
DB_DATABASE=exam-manegment
DB_USERNAME=root
DB_PASSWORD=
```

Run migrations:

```bash
php artisan migrate
```

Start the Laravel development server:

```bash
php artisan serve
```

Open the application:

```text
http://127.0.0.1:8000
```

## 📸 Project Workflow

```text
Admin
  │
  ├── Manage Users
  │
  └── Manage System
        │
        ▼
Teacher
  │
  ├── Create Test
  ├── Add Questions
  ├── Add Options
  └── Publish Test
        │
        ▼
Student
  │
  ├── View Tests
  ├── Attempt Quiz
  ├── Submit Answers
  └── View Result
        │
        ▼
Automatic Score Calculation
```

## 📊 Scoring System

The system supports:

* Correct answer marks
* Wrong answer negative marks
* Unanswered questions
* Total score calculation
* Correct and wrong answer count

## 🔮 Future Improvements

* Timer-based automatic quiz submission
* Email notifications
* Advanced result analytics
* PDF result generation
* Teacher-wise test reports
* Student performance charts
* Question randomization
* REST API integration

## 👨‍💻 Developer

**Anubhav Srivastava**

B.Tech Computer Science & Engineering

---

⭐ If you find this project useful, consider giving the repository a star.
