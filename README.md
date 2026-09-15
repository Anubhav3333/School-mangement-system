# 📝 Exam Management System

A Laravel-based **Exam Management System** for managing online tests, questions, student attempts, scoring, and results.

The system provides separate functionality for **Teacher and Student** users with role-based access control.

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

### 👨‍🏫 Teacher

* Create and manage tests
* Add questions and multiple-choice options
* Set marks per question
* Set negative marking
* Publish, draft, or close tests
* View student attempts and results

### 👨‍🎓 Student

* View available tests
* Attempt online quizzes
* Submit answers
* View scores and results
* Review selected and correct answers
* View previous attempts

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

* `users`
* `tests`
* `questions`
* `question_options`
* `test_attempts`
* `attempt_answers`

## ⚙️ Installation

### 1. Clone the Repository

```bash
git clone https://github.com/your-username/your-repository.git
```

### 2. Go to the Project Directory

```bash
cd your-repository
```

### 3. Install Dependencies

```bash
composer install
```

### 4. Create Environment File

```bash
copy .env.example .env
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Configure Database

Update your `.env` file:

```env
DB_DATABASE=exam-manegment
DB_USERNAME=root
DB_PASSWORD=
```

### 7. Run Migrations

```bash
php artisan migrate
```

### 8. Start Development Server

```bash
php artisan serve
```

Open the application:

```text
http://127.0.0.1:8000
```

## 🔄 Application Workflow

```text
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
* Negative marking for wrong answers
* Unanswered question tracking
* Total score calculation
* Correct answer count
* Wrong answer count

## 🔮 Future Improvements

* ⏱️ Automatic timer-based submission
* 📧 Email notifications
* 📄 PDF result generation
* 📊 Advanced performance analytics
* 🔀 Question randomization
* 🌐 REST API integration
* 👨‍💼 Admin panel and administration features

## 👨‍💻 Developer

**Anubhav Srivastava**

B.Tech Computer Science & Engineering


⭐ If you find this project useful, consider giving the repository a star.
