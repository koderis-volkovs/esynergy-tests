### Projekta instalēšana

- Aizpildām datu bāzes iestatījumus `.env` failā
- uzinstalējam datu bāžu tabulas ar `php artisan migrate`
- Ja vēlamies aizpildīt datu bāzi ar produktu ierakstiem un lietotājiem, palaižam komandu `php artisan db:seed`, šī komanda aizpildīs datu bāzi ar nejaušiem datiem, kā arī izveidos 2 lietotājus:
    - lietājvārds: `user` parole: `password`
    - lietājvārds: `admin` parole: `password`
