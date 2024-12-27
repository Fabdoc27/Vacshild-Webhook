# Vacshield - Webhook

An application designed for efficient vaccine registration, scheduling, and status management. The system focuses on automation, offering features like user scheduling based on vaccine center capacities, an intuitive admin panel for easy record management, and seamless webhook integration with Zapier and Google Forms.

## Features

-   **User Registration**: Register users and track their vaccine registration statuses.
-   **Vaccine Center Management**: Assign users to centers and track schedules.
-   **Automated Scheduling**: Automatically schedule users daily, respecting center limits and skipping weekends.
-   **Notifications**: Notify users about their schedules via email.
-   **Admin Panel**: Filter and manage records through a user-friendly interface powered by FilamentPHP.
-   **Zapier + Google Form Integration**: Integrate Google Forms with the system via Zapier webhooks to automate user registration.

## Demonstration

[Watch the demonstration video](https://drive.google.com/file/d/11tHVgh8LJxnlmiEeG_Knk-cXIYnKe-qy/view?usp=sharing)

## Getting Started

Follow these instructions to set up the project.

### Installation

1. **Clone the repository:**

    ```shell
    git clone "git@github.com:Fabdoc27/Vacshild-Webhook.git"
    ```

2. **Navigate to the project directory:**

    ```shell
    cd "Vacshild-Webhook"
    ```

3. **Install PHP dependencies:**

    ```shell
    composer install
    ```

4. **Install Node.js dependencies:**

    ```shell
    npm install
    ```

5. **Create the environment file:**

    ```shell
    cp .env.example .env
    ```

6. **Set ngrok URL in the `.env` file for testing:**

    Replace `APP_URL` with ngrok URL to ensure Zapier works correctly.

    ```env
    APP_URL=https://your-ngrok-url.ngrok-free.app
    ```

7. **Generate the application key:**

    ```shell
    php artisan key:generate
    ```

8. **Run database migrations:**

    ```shell
    php artisan migrate
    ```

9. **Seed the database:**

    ```shell
    php artisan db:seed
    ```

10. **Start the local development server:**

    ```shell
    php artisan serve
    ```

11. **Compile front-end assets:**

    ```shell
    npm run dev
    ```

12. **Start the queue worker:**

    ```shell
    php artisan queue:work
    ```

13. **Run the scheduler manually (for local development):**

    ```shell
    php artisan schedule:work
    ```
