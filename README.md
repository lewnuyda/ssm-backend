## Installation

### **1. Clone the repository**

```bash
git clone https://github.com/lewnuyda/ssm-backend.git
cd backend
```

### **2. Install dependencies**

```bash
composer install
```
### **3. Copy environment file**

```bash
cp .env.example .env
```
### **4. Generate application key**

```bash
php artisan key:generate
```
### **5. Environment Setup**

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dbssm
DB_USERNAME=root
DB_PASSWORD=
```
### **6. Database Setup**

Run migrations to create database tables:
```bash
php artisan migrate
```
Run seeders to populate initial data (including the sample admin user):
```bash
php artisan db:seed
```

### **7. Sample Credentials**

Email: admin@example.com
Password: password


