

# Hotel 2 Live. Project for work2live.com

This is a technical test for a job at work2live.com. I used Laravel 5.7.24 installed in Homestead Virtual Machine on Mac OSX for the best laravel environment.


# Features
***Plus** = additional feature not required in the test.

  - Search for hotels by name or location. If the field is empty, will show all the hotels in database
  - In the search bar the user can select a range of dates for the search. The user can't set a date in the past.
  - If the user don't set a date range, automatically will be set to 1 night, From Today to the Next Day
  - Show a list of hotels, can be filtered by Popular or All
  - Show a MAP location for the hotels ***Plus**
  - Google Maps Api Key used, and library to show beautiful box in map, with the hotel image and resume (If click, will show you the hotel section) ***Plus**
  - Star Rating
  - Every hotel have a button to show the Rooms and Availability. That will be display the room table
  - Every Room have a Name, Status, Price and All the information like Gallery ***Plus**, Policy of cancellation, promo, amenities ***Plus**
  - Price and Subtotals calculation on a beautiful box
  - If the Room is Sold Out, the Request Button is disabled ***Plus**
  - If a Room is Booked, the Status change to On Request ***Plus**
  - All the fields in the Payment Sections have validation by numbers, text, and email ***Plus**
  - All the searches is logged in the database, and send an email to the admin system with the last searches every 20 minutes. We have to set a cron job or execute the command '**php artisan searches:send**'
  - All the information in the Payment Section is stored in the database
  - After confirm the booking, the system send two (2) emails, the first is to the admin system with the resume of the booking, and the second mail is sent to the customer, with the resume of the booking. (We have to set the smtp server in the .env file)
  - I don't use any third integration for the form construction. All the technical information is in this repository
  - And too many optimization in the code (You can explore the routes and the quality of the code in the project)
  - Schedule task created for the search report
  - Migrations ready for the database structure ***Plus**
  - Logo specially created, and the project file in Adobe Illustrator Included ***plus**
  - Code commented ***Plus**

# Technical Information

  - Beautiful Interface builded in SASS and HTML5.
  - SASS and JS compiled and mixed by Laravel WebPack ***Plus**
  - All the assets is in resources and copied to the public folder by WebPack
  - I use jQuery imported from NPM Module
  - Responsive Design, of course ;) ***Plus**
  - Mail function use SMTP server to send mail (Please config in .env)

# TODO
I make this project specially for the test, but can be improved with:

  - Real time search
  - Backend admin for the Hotels administrators
  - Dedicated section for every hotel, with reviews, information and a better gallery
  - Payment Integration
  - User login for the order history and bookings
  - Add Language switch
  - Add currencies
  - Add Home, About us and Contact us sections
  - Add Newsletter system
  - Maybe build the frontend with ReactJs and make the backend with NodeJS or keep Laravel
  
# Installation and Test

You need to have a perfect environment for laravel, you can use a hosting or better, the Homestead Virtual machine for Laravel. I used that :)

Clone the repository

```sh
$ git clone ...
```

Install dependencies

```sh
$ cd hotel2live
$ npm install
```

You can too re-build the sass and javascript, with this command:

```sh
$ npm run dev
```

Configure .env exactly like this example

```
APP_NAME=Hotel2Live
APP_ENV=local
APP_KEY=base64:TVZPIypZ0HdUHX85XYSFDoEtRmsVWTBq0wbkZCN8Tk0=
APP_DEBUG=true
APP_URL=http://hotel2live.test

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=hotel2live
DB_USERNAME=homestead
DB_PASSWORD=secret

MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=xxx@xxx.xxx
MAIL_PASSWORD=xxxxxx
MAIL_ENCRYPTION=tls
MAIL_FROM=

MAIL_ADMIN_NOTIFICATION=

GMAPS_API_KEY=AIzaSyCNMQPv3XPhE_9LBMlQC7keGSghG7zgmSE
```

  - You have to complete the SMTP server, you can use the gmail, to test.
  - The **MAIL_FROM** have to be the same **MAIL_USERNAME** and is the mail that use the system to send mails.
  - **MAIL_ADMIN_NOTIFICATION** is your email, where the system send the booking resume and searches report.

Once configured the .env file, we have to run the migrations to build the database structure.

```sh
$ php artisan migrate
```

Once migrated, you have to import the data from the **data.sql** file stored in the repository. This is dummy data created for the test. You can create more hotels, rooms and locations if you want.

If everything is good, you have to run the site in the domain that you defined in homestead.yaml

# Screenshot Comparison

Example 1

![Example 1](https://lh3.googleusercontent.com/MKuEcsw5rC030sgnFCqPQyZEfC6rPGIjcLW1GGYwJwDV0bsUZjZqhzSYlKR28S-tIaZOTEup-KI2kA "Example 1")

Example 2

![enter image description here](https://lh3.googleusercontent.com/2Pyn6VKPTSIZwfJYSxXgyhKErR8OHYHGzrzZLTboO74h7Fd9nNX4-qL2RAJAynUt-zOGT32xHIkukQ)

Example 3

![enter image description here](https://lh3.googleusercontent.com/0_9Qye_lkH5Wj2LOKj8HBTAkZ_N5AWusPompJv-SUqiMiFtsfzA70jHEVjSly3GUT6R1OeBuZEBHDw)

Hotel 2 Live

Example 1

![enter image description here](https://lh3.googleusercontent.com/uYH_NN3JYaTEmtR7B_RnYit1uSlR19b0IfMB9dEHqNn8oFlhTJ0bsp8tYwhmOZkJrxfYAxI7lJlhDg)

Example 2

![enter image description here](https://lh3.googleusercontent.com/Z0Z0zYKy1CLsdpSB41EAim00cl8hO1G5yPEsA1VzLZfSvtQnx7zdYtJ1Bg_7wg9vkpYUdo95EPZMGg)

Example 3

![enter image description here](https://lh3.googleusercontent.com/s1BTBkCCUk5-xJn8fChr9M5bk0uQv6PqIYXmSaTLUl2woE9TyXQtczP8Api9kNe-tTLVcVEzigXmOQ)

Payment Process and Customer Information

![enter image description here](https://lh3.googleusercontent.com/-a7LaJEvvpSeIuoGlRjzKyRef9oB1zApTVcJyji6eAedrS3nAgXNglHSj66VqeX3yxoiX_kG1LmZRg)

Thank You Page

![enter image description here](https://lh3.googleusercontent.com/NgNmeorSuy1OZrUQE9LbaPYlS0N6ExHjp25VmCvZz7nPafCM36pnFO8kkMwy_5FV52ImZgeU1T1vvQ)

# Conclusion

I hope that my skills have been exposed with this test, and I am ready for an interview, I program since I was 12 years old, this has always been my passion, I know most of the languages used for web and desktop programming. I am excellent in Html5, Css, Sass, Php, Javascript (NodeJs, ReactJs, jQuery). I know a lot about cloud services and scalable services.

I live in Miami and I have full time availability.

Author:

**Javier Rocha Glenn**

[+1 (786) 728-7695](tel:+17867287695)

charro0407@gmail.com

Miami, FL