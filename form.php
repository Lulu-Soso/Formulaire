<?php

<form  action="thanks.php"  method="post">
    <div>
      <label  for="lastname">Nom :</label>
      <input  type="text"  id="lastname"  name="lastname">
    </div>
    <div>
      <label  for="firstname">Prenom :</label>
      <input  type="text"  id="firstname"  name="firstname">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="courriel">
    </div>
    <div>
      <label  for="phone">Telephone :</label>
      <input  type="tel"  id="phone"  name="phone">
    </div>
    <div>
    <label for="sujet-select">Choisir un sujet:</label>
        <select name="sujet" id="sujet-select">
            <option>...
            <option>marche
            <option>course
            <option>randonnée
            <option>voyages
            <option>visites
        </select>
    </div>
    <label  for="message">Message :</label>
      <textarea  id="message"  name="message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
</form>
