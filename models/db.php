<?php

$matrix =  new Movies('The Matrix', 'English', 9, new Genre('Action', 'Neo giovane programmatore geniale scopre che il suo mondo altro non è ch una complessa illusione informatica creata da un programma chiamato Matrix'), 500, 120);

$cast_away =  new Movies('Cast Away', 'English', 8, new Genre('Drama', 'Un uomo viene naufragato su un\'isola deserta e deve imparare a sopravvivere'), 400, 143);

$schindler_list =  new Movies('Schindler\'s List', 'English', 10, new Genre('Drama', 'La storia vera di Oskar Schindler, un imprenditore che ha salvato la vita di oltre 1.000 ebrei durante l\'Olocausto'), 600, 195);

$lord_of_the_rings =  new Movies('The Lord of the Rings', 'English', 9.5, new Genre('Fantasy', 'Un epico viaggio per distruggere un anello magico e sconfiggere il male'), 800, 201);

$star_wars =  new Movies('Star Wars', 'English', 9, new Genre('Sci-Fi', 'Un\'epica saga sulla lotta tra il bene e il male in una galassia lontana'), 700, 180);

$in_vacanza_su_marte =  new Movies('In Vacanza su Marte', 'Italian', 7.5, new Genre('Comedy', 'Un gruppo di persone va in vacanza su Marte ma le cose non vanno come previsto'), 300, 110);


// $matrix->isGood($matrix->score);

// $matrix->title = 'The Matrix';

// $matrix->language = 'English';

// $matrix->score = '8/10';



// var_dump($matrix);

// var_dump($cast_away);

// $the_martian = new Production();

// $it = new Production();