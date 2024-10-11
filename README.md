## About Laravel


Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


### Task specifications 🏗️

*   Create a registration page where users can register for vaccination (consider that only one doze of vaccine will be given).
    
*   Users must select a Vaccine center at the time of registration.
    
*   Every vaccine center has a limit of how many users they can serve in a single day (the limit can be varied from center to center).
    
*   Distribute the registered people to vaccine centers and schedule their vaccination date based on ‘first come first serve’ strategy.
    
*   Send a notification email to the users at 9 PM before the night of their scheduled vaccination date.
    
*   Create a search page (authentication is not needed) where users can enter their NID and see the status. The statuses can be Not registered, Not scheduled, Scheduled, Vaccinated. Consider the following when showing the statuses after the search:
    
    *   If the user is not registered yet, Show Not registered status along with a link to the ‘registration’ page.
        
    *   If the users vaccination date is scheduled, show Scheduled status along with the scheduled date.
        
    *   If the user is registered but not scheduled for vaccine yet, show Not scheduled status.
        
    *   Assume that every user will take their vaccine on their scheduled date. Show the Vaccinated status if the scheduled date is passed.
