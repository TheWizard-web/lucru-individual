# **Lucru Individual**

## **Prezentare generală**

Am dezvoltat o mică aplicație concepută pentru a gestiona o colecție de cărți și recenziile acestora. Oferă utilizatorilor funcționalități pentru a vizualiza și filtra cărți, precum și pentru a crea și adăuga recenzii pentru oricare dintre cărțile listate. Aplicația demonstrează implementarea unei relații unu-la-multe între cărți și recenziile lor, folosind funcții moderne Laravel, cum ar fi componentele Blade, interogarea în cache și limitarea ratei.

Aplicația este dezvoltată utilizând **Laravel 11** ca backend pentru gestionarea logicii aplicației și interacțiunea cu baza de date, iar **Blade** este utilizat ca frontend pentru generarea paginilor dinamice. Această arhitectură permite separarea clară a responsabilităților între backend și frontend, asigurând în același timp un flux de lucru eficient și modern.

## **Funcții principale**

-   Vizualizare lista de cărți.
-   Afișarea detaliilor unei cărți, inclusiv recenziile acesteia.
-   Adăugare recenzii, cu ratinguri între 1 și 5 stele.
-   Filtrare cărți după titlu și categorii populare.
-   Sistem de caching pentru performanță.
-   Limitarea recenziilor la un număr rezonabil pe utilizator (rate limiting).

## **Instrucțiuni de instalare și pornire**

Pentru a instala si porni proiectul trebuie să se cloneze proiectul și să se acceseze directorul, să se instaleze dependențele necesare folosind comanda `composer install` și `npm install`, apoi să se configureze baza de date `MySQL` în fișierul `.env`. Este important ca local sa fie instalat PHP 8.1 sau o versiune mai mare, deoarece proiectul este dezvoltat pe `Laravel 11`. După aceea, trebuie să se ruleze migrațiile și seed-urile cu comanda `php artisan migrate --seed`, să se pornească serverul Laravel cu comanda `php artisan serve` și să se acceseze aplicația la `http://127.0.0.1:8000`.
