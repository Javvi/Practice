===El Dorado Sub Shop===
By: Javier Dominguez
Date of last successful run April 25th, 2018
COP3834C-01 Web Application Development
Bonus Project

=====Description=====
El Dorado Sub Shop is a simple, yet easy to maintain e-commerce website where customer can purchase their favorite South Florida sandwiches online to pick up in store at a low cost. 

First, customers arrive at the home page with information of the navigation bar displayed, including the restaurants phone number (fake), address, and open working hours. 

Next, using the navbar, customers can view the different sub options and their respective pricing by clicking the "menu" tab on the navbar.

After reviewing the delicacies, customers can select what they would like to order in the "checkout" tab of the navbar. After filling out all of the forms, the sandwich information is sent to our calculation PHP site using $_POST requests, and the total price of the order is displayed on the screen.

After reviewing their order price, customers can click on "continue with payment" to finalize their purchase. In this webpage customers enter their credit card information, and phone number for accountability of their purchase. 

The main inputs of the website are located as HTML submisson forms on CheckoutPage.html which utilize the $_POST command to send the user information to the checkoutPHP file.

The checkoutPHP file processes the inputs in an OOP manner by setting the inputs as attributes of the PurchaseItem class. These attributes are then summed together in the calculateValue() method and the total purchase value is displayed, along with the attributes displayed in displayAmount() method. 

No further processing is done after this point on the website, with the credit card information not being stored (since it was not in the requirements or scope of this project to store sensitive credit card information). 

===Flow Chart===
The general flow of the website is as follows:

Index.html->Options.html->CheckoutPage.html->checkoutPHP.php->payment.html

***It is extremely important to note that any component of the website except payment.html is accessible from any other component. Since I wanted to include proper navbar support/functionality for this website, I made the navbar buttons usable so as to be able to easily navigate around in case the users wanted to back-track or start from the beginning. Payment.html is only accessibly from checkoutPHP.php ****

===Future Work===
In the future, I could expand on the website by including error handling for all major methods between the different sites, as well as including database functionality for the credit card and customer information. Along with this, I could include an automated confirmation e-mail after each purchase.

===Credits===
Credit to VincentGarreau for the publicly available background "particles.js" that was used as the background of the webpage. Particles.js may be downloaded from:  https://github.com/VincentGarreau/particles.js/
