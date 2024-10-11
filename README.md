## About Laravel

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

### Task specifications 🏗️

-   Create a registration page where users can register for vaccination (consider that only one doze of vaccine will be given).
-   Users must select a Vaccine center at the time of registration.
-   Every vaccine center has a limit of how many users they can serve in a single day (the limit can be varied from center to center).
-   Distribute the registered people to vaccine centers and schedule their vaccination date based on ‘first come first serve’ strategy.
-   Send a notification email to the users at 9 PM before the night of their scheduled vaccination date.
-   Create a search page (authentication is not needed) where users can enter their NID and see the status. The statuses can be Not registered, Not scheduled, Scheduled, Vaccinated. Consider the following when showing the statuses after the search:

    -   If the user is not registered yet, Show Not registered status along with a link to the ‘registration’ page.
    -   If the users vaccination date is scheduled, show Scheduled status along with the scheduled date.
    -   If the user is registered but not scheduled for vaccine yet, show Not scheduled status.
    -   Assume that every user will take their vaccine on their scheduled date. Show the Vaccinated status if the scheduled date is passed.

-   php artisan vaccine:send-reminders

# Using

-   Laravel-10
-   Breeze
-   PHP 8.1
-   Mail Gmail Configration

### Downlaod and Clone

    -   git clone -b dev https://github.com/akasifislam/kahf

# Larave10:

    -   composer install
    -   npm install && npm run dev
    -   cp .env.example .env
    -   database configure
    -   php artisan key:generate
    -   php artisan migrate:fresh --seed
    -   php artisan serve --port=9000
    ## login credential

    - backend login url: http://127.0.0.1:9000/login
    - email: admin@mail.com
    - password: secret007

### Home Page

![hh](https://github.com/user-attachments/assets/4f928bf1-38d6-425f-afd4-062e216b368a)

### Vaccine Center

![11](https://github.com/user-attachments/assets/da47c007-ce17-46e3-a3cd-79535db7130d)

### Vaccine Schedule

![2](https://github.com/user-attachments/assets/dba9d9cd-ba8f-42d4-9937-feb0b054e65e)

### Registration and Search

![3](https://github.com/user-attachments/assets/4c68b964-67e9-4bce-b3a5-8c0b8e15ef65)

### Registration form

![4](https://github.com/user-attachments/assets/21d0b9a4-a7b8-4821-a57b-36b0374029e8)

### Schedule Card

![5](https://github.com/user-attachments/assets/0c760114-d1a5-4dd4-b929-9796fa496b68)

### Not Register

![6](https://github.com/user-attachments/assets/bca51d25-ff16-4cbe-b558-ae4a284653c4)

### Vaccinated

![7](https://github.com/user-attachments/assets/bc1ca8bc-f79f-4353-8b24-780d5cd7d744)

###

![11](https://github.com/user-attachments/assets/d3f29b95-5ba4-4d9c-bada-8d6096c4a65d)

### Mail Configration

![mail](https://github.com/user-attachments/assets/64547ebc-b2dd-4eaf-93ad-bd74e9c2c732)

## Future Upgrade: Adding SMS Notifications

To incorporate SMS notifications alongside email notifications for vaccine schedules in the future, the following steps will be implemented:

1. **Bulk SMS Provider Selection:**

    - Select an appropriate bulk SMS provider.
    - Begin the integration process according to the provider's API documentation.

2. **Helper Method Creation:**

    - Create a new helper file in the `app/Helpers` directory (e.g., `SmsHelper.php`).
    - Write a method in this file for sending SMS, utilizing the bulk SMS provider's API.

3. **Configuration Setup:**

    - Add SMS provider API credentials to the `.env` file.
    - Create a new configuration file in the `config` directory to store SMS settings.

4. **Update Notification Logic:**

    - Integrate SMS sending logic with the existing email sending logic.
    - In the `SendVaccineReminders` command, call the SMS helper method immediately after sending the email.

5. **Error Handling:**

    - Implement try-catch blocks to handle any potential errors during SMS sending.
    - Set up an error logging system to record any failed SMS deliveries.

6. **Testing:**

    - Conduct extensive testing to ensure both email and SMS notifications are working correctly.
    - Write unit tests using a mock SMS service.

7. **Monitoring:**
    - Set up a monitoring system to track SMS delivery rates and failure rates.

By following this approach, we can easily add SMS notifications to the current email notification system, providing users with more effective communication channels.
