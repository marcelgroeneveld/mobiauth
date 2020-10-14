# mobiauth
Code for an embedded authentication system that makes use of smartphone fingerprint authentication.

# regels
 - eet kk gore friet
 - altijd direct naar master & prod pushen

# omschrijving

- De webserver directory bevat de website files: Deze is voor de beheerder van een organisatie bedoeld: Hier is een overzicht van alle 'pas'-houders, kan toegang tot ruimtes worden toegevoegd en / of ontzegd en worden logs/statestieken bij gehouden


- De access_simulator directory is ter demonstratie van een succesvolle OF foutieve scan voor de pas, om interacties met de webserver te demonstreren én te testen. In de realiteit moet dit de arduino voorstellen.

- De backend directory is c# code voor interactie met de site, pasjes en paslezers. Dit is de 'core' van het authorisatiesysteem: De paslezers communiceren met de backend, de backend controleert uit de database en verstuurd weer statestiek richting de database. Het hele systeem werkt vanuit de core, authorisatie werkt zonder dat de site beschrikbaar is.
![alt text](https://i.redd.it/0gstgkrdk3v31.jpg "")
