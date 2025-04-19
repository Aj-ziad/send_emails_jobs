# send_emails_jobs
📬 This Laravel project automates the process of sending personalized job application emails to companies. It helps job seekers streamline their job hunt by composing and sending emails with custom content, dynamic fields, and attachments (like CVs or cover letters , pdfs ...), all while keeping credentials secure via `.env` configuration.

---

## 🛠 Tech Stack

- PHP (Laravel Framework)  
- Laravel Mail (SMTP / Mailgun / SendGrid, etc.)  
- Blade Templates (for email formatting)  
- MySQL (or any other supported DB)  

---

## 🔧 Features

- Send emails to multiple companies with one script  
- Customize message content for each recipient  
- Dynamic email content using Blade templates  
- Add attachments (e.g. CV, cover letter, PDFs)  
- Use environment variables for secure credentials  
- Secure email credentials using `.env`  

---

## ✅ Use Cases

- Automating job hunt tasks  
- Saving time on repetitive email writing  
- Ensuring consistency and professionalism in applications  

---

## 📦 Installation & ⚙️ Environment Configuration

```bash
git clone https://github.com/your-username/your-repo-name.git
cd your-repo-name
composer install
cp .env.example .env
php artisan key:generate

⚙️ Environment Configuration

Update your .env file with your mail service credentials:
MAIL_MAILER=smtp
MAIL_HOST=smtp.yourprovider.com
MAIL_PORT=587
MAIL_USERNAME=your@email.com
MAIL_PASSWORD=yourpassword
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your@email.com
MAIL_FROM_NAME="${APP_NAME}"
