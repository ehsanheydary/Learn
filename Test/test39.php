<?php
/**
 * Created by PhpStorm.
 * User: amir
 * Date: 3/4/2018
 * Time: 9:55 PM
 */

$b = '{"Title":"The Godfather","Year":"1972","Rated":"R","Released":"24 Mar 1972","Runtime":"175 min","Genre":"Crime, Drama","Director":"Francis Ford Coppola","Writer":"Mario Puzo (screenplay by), Francis Ford Coppola (screenplay by), Mario Puzo (based on the novel by)","Actors":"Marlon Brando, Al Pacino, James Caan, Richard S. Castellano","Plot":"The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.","Language":"English, Italian, Latin","Country":"USA","Awards":"Won 3 Oscars. Another 24 wins & 27 nominations.","Poster":"https://images-na.ssl-images-amazon.com/images/M/MV5BY2Q2NzQ3ZDUtNWU5OC00Yjc0LThlYmEtNWM3NTFmM2JiY2VhXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SX300.jpg","Ratings":[{"Source":"Internet Movie Database","Value":"9.2/10"},{"Source":"Rotten Tomatoes","Value":"98%"},{"Source":"Metacritic","Value":"100/100"}],"Metascore":"100","imdbRating":"9.2","imdbVotes":"1,303,505","imdbID":"tt0068646","Type":"movie","DVD":"09 Oct 2001","BoxOffice":"N/A","Production":"Paramount Pictures","Website":"http://www.thegodfather.com","Response":"True"}';
$b = json_decode($b,true);

echo '<img src="'.$b['Poster'].'">';
