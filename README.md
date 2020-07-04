
# Hotel WebApp

This is an exercise for a course I attend to learn web development.

# Technologies

For the Front-End I've used:
1. HTML
2. CSS
3. Bootstrap

For the Back-End I've used:
1. PHP 
2. MariaDB for the database

##  Questions for the teacher

## To do:

### FRONT-END (responsive)
* Add favicon (Added, pending to check)


### FRONT-END - Data loaded from database

* rooms.php
    * Loads a table with the rooms available, data retrieved from database

* Index
* Location
* Guest rooms
* Services
* Menu
* San Sebastian
* Book a room
 

### Database
## Tables
* users: id, password, email, rol, tel, streetName, postalCode, city, country
* rooms: id, roomName, description
* reservations: id, roomId, userId, arrival, departure


# Pendiente
* el login con sesión, si es admin ve una cosa y si es regular ve otra
    * si es admin
        * Lista de clientes (ve los perfiles y sus reservas)
            * Ver, editar, añadir y borrar
        * Reservas
            * Ver, eliminar, añadir, editar reservas
    * si es regular
        * Perfil
            * Ver y modificar
        * Habitaciones
            * Reservar
            * Anular reservas
* sign in 
    * solo usuarios
cambiar la navbar del admin
### BACK-END

* Admin-Manager (with custom views): 
    * Access to all
        * Customers
        * Access to view and edit customer data
        * Rooms availability
* Customer (with the same views of the web): 
    * Sign up in the reservation link
    * Log in in the reservation link
    * Reservation page after sign up or log in
    * User profile: View, edit reservations (the payment in the hotel), complete and update personal info    
* disclaimer COOKIES??

## Done:

### Front-End
* Center the navbar
* Add copyright of the logo in legal notice
* Scale-down the picture of San Sebastian panorama
* Add custom font from Google fonts

#### Index
* Nav Bar: logo, and links: hotel (index), location, guest rooms, services, “san sebastián”, big button of “make reservation”
* A carousel:
    * 1 - The hotel
    * 2 - Rooms
    * 3 - Social Room
    * 4 - Services: wifi, views…
* After the carousel the elements are ¾ and centered
* Three boxes with photos and links: 
    * meals services, link to services page
    * availability and rates, reservation page
    * view services 
* Two columns:	
    * ¾ a brief description of the hotel with a picture in the left side
    * ¼ online reservation, arrival date, nights and button. Tiny link (view rooms)
* Top hotel of the city:  
    * San Sebastian
* After those, all the viewport
* Footer with four columns:
    * Hotel name with slogan
    * Social networks
    * Copyright and legal notice

#### Links of the navbar:
* Hotel: 
    * the index web page
* Location
    * Location with a description and distances from the hotel to places of interest

* Services (Dropdown for menus)
    * Navbar, footer and slider
        * Two rows:
        * First row: two columns:
            * ¾ Services list with a picture in the left side
            * ¼ on-line reservartion
        * Second row, 3 column with pics of common areas: social room, cafeteria and gym

* San Sebastián
    * Navbar and footer
    * A slider with 4 San Sebastian pictures 
    * A box with two rows
        * First row, one columns
            * A picture in the left side and online reservation in the right side
        * Second row: a picture gallery preview with click to bigger pictures
* Guest rooms 
    * Two rows with three columns each with pictures of rooms and a brief description. Using cards an lorem ipsum
* Menus
    * Navbar a footbar
    * An intro paragraph
    * Six cards, two rows
* Make a reservation
    * The navbar and footer
    * A central box: Sign up, Log-in

* Put all html pages inside a folder: front-end (change links inside)

### Back-End

