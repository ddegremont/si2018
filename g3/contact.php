<form action="send_message.php" method="post">
    <select name="type">
        <option value="journaliste">Un journaliste</option>
        <option value="annonceur">Un annonceur</option>
        <option value="lecteur">Un lecteur</option>
        <option value="partenaire">Un partenaire</option>
        <option value="office de tourisme">Un office de tourisme</option>
    </select>
    <input type="text" name="entreprise" placeholder="Votre société">
    <input type="text" name="name" placeholder="Votre nom">
    <input type="text" name="email" placeholder="Votre e-mail">
    <input type="text" name="phone" placeholder="Votre téléphone">
    <textarea name="message" id="" cols="30" rows="10" placeholder="votre message"></textarea>
    <input type="submit" value="envoyer">
</form>