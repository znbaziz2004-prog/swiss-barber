# Swiss Barber

Swiss Barber is an online barber booking and shop management platform designed for barbershops in Switzerland.

## Project Panels

### 1. Customer Website
Customers can browse barber shops, explore services, and book appointments online without needing an account to browse.

- **Local URL:** `http://localhost:5173`
- **Purpose:** Browse shops, view services, and book appointments.

### 2. Barber Admin Panel
Barbershop owners and staff can manage their shop operations.

- **Local URL:** `http://localhost:5174`
- **Purpose:** Manage appointments, calendar, customers, services, staff, and shop details.

### 3. Super Admin Panel
The platform administrator manages registrations, shops, subscriptions, and platform operations.

- **Local URL:`http://localhost:5175`
- **Purpose:** Manage barber registrations, approve shops, and oversee subscriptions.

## Technology Stack

- **Frontend:** React, JavaScript, HTML, CSS
- **Backend:** Node.js, Express.js
- **Database:** MySQL 8
- **API:** REST API
- **Payments:** Stripe
- **Tools:** Git, GitHub, Postman

## Main Features

- Online appointment booking
- Multiple barbershops and branches
- Barber and staff management
- Service and pricing management
- Customer management
- Subscription plans and payment integration
- Super admin approval workflow

## Project Structure

- `backend/` — Express API and backend logic
- `database/` — MySQL schema and SQL files
- `panels/` — Admin panel applications
- `website/` — Website and related application files
- `public/` — Public assets and built files

## Local Setup

1. Clone the repository.
2. Install backend dependencies using `npm install` inside `backend/`.
3. Configure your environment variables in `backend/.env`.
4. Set up the MySQL database using the appropriate SQL file in `database/`.
5. Start the backend using the script configured in `backend/package.json`.
6. Install dependencies and start each frontend application in its respective folder.

## Environment Variables

Create local `.env` files and configure the required database, authentication, and Stripe settings. Never commit real passwords, API keys, or Stripe secret keys to GitHub.

## License

This project is currently maintained as a private project unless a license is added.
